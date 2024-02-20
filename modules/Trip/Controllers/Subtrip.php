<?php

namespace Modules\Trip\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Rolepermission;
use CodeIgniter\Database\RawSql;
use Modules\Trip\Models\SubtripModel;
use Modules\Location\Models\LocationModel;
use Modules\Trip\Models\TripModel;

class Subtrip extends BaseController
{

    protected $Viewpath;
    protected $tripModel;
    protected $subtripModel;
    protected $locationModel;
    protected $db;

    public function __construct()
    {
        $this->Viewpath = "Modules\Trip\Views";
        $this->tripModel = new TripModel;
        $this->subtripModel = new SubtripModel;
        $this->locationModel = new LocationModel;
        $this->db = \Config\Database::connect();
    }

    public function index($id)
    {
        $heading = lang("Localize.sub") . ' ' . lang("Localize.trip") . ' ' . lang("Localize.list");
        $data['pageheading'] = $heading;

        $data['subtrip'] = $this->subtripModel->where('trip_id', $id)->where('type', 'subtrip')->find();
        $data['createTrip'] = $id;
        $data['delete_data'] = (new Rolepermission)->delete("trip_list");

        return view($this->Viewpath . '\subtrip\index', $data);
    }

    public function new($id)
    {
        $data['maintripid'] =  $id;

        // Build trip stopages
        $tripInfo = $this->tripModel->select('trips.stoppage')->where('trips.id', $id);

        $data['location'] = $this->locationModel
            ->where(new RawSql('FIND_IN_SET(locations.id, (' . $tripInfo->builder()->getCompiledSelect() . '))'))
            ->findAll();

        $heading = lang("Localize.add") . ' ' . lang("Localize.sub") . ' ' . lang("Localize.trip");
        $data['pageheading'] = $heading;

        return view($this->Viewpath . '\subtrip/new', $data);
    }

    public function create()
    {
        $show = $this->request->getVar('show') ?: 0;
        $pickLocation =  $this->request->getVar('pick_location_id');
        $dropLocation =  $this->request->getVar('drop_location_id');
        $tripimage = $this->request->getFile('imagesubtrip');
        $tripImagePath = null;

        $stoppage = array_merge([$pickLocation], (array) $this->request->getVar('stoppage'), [$dropLocation]);
        $stoppage = implode(",", array_filter($stoppage));

        if ($show == 1) {
            if ($tripimage->isValid() && !$tripimage->hasMoved()) {
                $tripImagePath = $this->imgaeCheck($tripimage);
            } else {
                return redirect()->back()->withInput()->with('fail', 'image fill reqired');
            }
        }

        $subtripData = array(
            "trip_id" => $this->request->getVar('id'),
            "pick_location_id" => $this->request->getVar('pick_location_id'),
            "drop_location_id" => $this->request->getVar('drop_location_id'),
            "stoppage" => $stoppage,
            "adult_fair" => $this->request->getVar('adult_fair'),
            "child_fair" => $this->request->getVar('child_fair'),
            "special_fair" => $this->request->getVar('special_fair'),
            "type" => 'subtrip',
            "status" => $this->request->getVar('status'),
            "show" => $show,
            "imglocation" => $tripImagePath,
        );

        if ($this->validation->run($subtripData, 'subtrip')) {
            $this->subtripModel->insert($subtripData);
            $maintripid = $this->request->getVar('id');

            $trip = array();
            array_push($trip, $maintripid);

            return redirect()->route('index-Subtrip', $trip)->with("success", "Data Save");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function edit($id)
    {
        $data['subtrip'] = $subtripInfo = $this->subtripModel->find($id);

        // Build trip stopages
        $tripInfo = $this->tripModel->select('trips.stoppage')->where('trips.id', $subtripInfo->trip_id);

        $data['location'] = $this->locationModel
            ->where(new RawSql('FIND_IN_SET(locations.id, (' . $tripInfo->builder()->getCompiledSelect() . '))'))
            ->findAll();

        $data['stoppage'] = explode(",", $subtripInfo->stoppage);

        $heading = lang("Localize.edit") . ' ' . lang("Localize.sub") . ' ' . lang("Localize.trip");
        $data['pageheading'] = $heading;

        return view($this->Viewpath . '\subtrip/edit', $data);
    }

    public function update($subtrip_id)
    {
        $show = $this->request->getVar('show') ?: 0;
        $pickLocation =  $this->request->getVar('pick_location_id');
        $dropLocation =  $this->request->getVar('drop_location_id');
        $tripimage = $this->request->getFile('imagesubtrip');
        $tripImagePath = $this->request->getVar('imagepath');

        $stoppage = array_merge([$pickLocation], (array) $this->request->getVar('stoppage'), [$dropLocation]);
        $stoppage = implode(",", array_filter($stoppage));

        if ($show == 1) {
            if ($tripimage->isValid() && !$tripimage->hasMoved()) {
                $tripImagePath = $this->imgaeCheck($tripimage);
            } elseif (empty($tripImagePath)) {
                return redirect()->back()->withInput()->with('fail', 'image fill reqired');;
            }
        }

        $subtripData = array(
            "id" => $subtrip_id,
            "trip_id" => $this->request->getVar('trip_id'),
            "pick_location_id" => $pickLocation,
            "drop_location_id" => $dropLocation,
            "stoppage" => $stoppage,
            "adult_fair" => $this->request->getVar('adult_fair'),
            "child_fair" => $this->request->getVar('child_fair'),
            "special_fair" => $this->request->getVar('special_fair'),
            "type" => 'subtrip',
            "status" => $this->request->getVar('status'),
            "show" => $show,
            "imglocation" => $tripImagePath,
        );

        if ($this->validation->run($subtripData, 'subtrip')) {
            $this->subtripModel->save($subtripData);
            $maintripid = $this->request->getVar('trip_id');

            $trip = array();
            array_push($trip, $maintripid);
            return redirect()->route('index-Subtrip', $trip)->with("success", "Data Save");
        }

        return redirect()->back()->withInput()->with('fail', $this->validation->listErrors());
    }

    public function delete($id)
    {
        $mainid = $this->subtripModel->where('id', $id)->where('type', 'subtrip')->first();
        $this->subtripModel->delete($id);
        $trip = array();
        array_push($trip, $mainid->trip_id);
        return redirect()->route('index-Subtrip', $trip)->with("fail", "Data Deleted");
    }

    public function imgaeCheck($image)
    {
        $newName = $image->getRandomName();
        $path = 'image/subtrip';
        $image->move($path, $newName);
        return $path . '/' . $newName;
    }
}
