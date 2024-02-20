<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('public/css/sumoselect.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public/css/customestyle.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('public/css/datepicker.css'); ?>" type="text/css">


</head>

<body>

    <body>

        <div class="container-fluid">

            <br>
            <!-- <form action="<?php echo base_url(route_to('getall-trip')) ?>" id="locationform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data"> -->
            <form action="<?php echo base_url(route_to('apigetall-trip')) ?>" id="locationform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="col-3 ">
                    <label for="pick_location_id" class="form-label">Pick Up</label>
                    <select class="form-select" name="pick_location_id" id="pick_location_id">
                        <option value="">None</option>
                        <?php foreach ($location as $locationvalue) : ?>

                            <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>

                        <?php endforeach ?>
                    </select>
                </div>


                <div class="col-3 ">
                    <label for="drop_location_id" class="form-label">Drop</label>
                    <select class="form-select" name="drop_location_id" id="drop_location_id">
                        <option value="">None</option>
                        <?php foreach ($location as $locationvalue) : ?>

                            <option value="<?php echo $locationvalue->id ?>"><?php echo $locationvalue->name ?></option>

                        <?php endforeach ?>
                    </select>

                </div>

                <div class="input-append date datepicker" id="journeydate" data-date-format="dd-mm-yyyy">
                    <input size="16" type="text" name="journeydate" readonly>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>


                <div class="input-append date datepicker" id="returndate" data-date-format="dd-mm-yyyy">
                    <input size="16" type="text" name="returndate" readonly>
                    <span class="add-on"><i class="icon-th"></i></span>
                </div>

                <br>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary"><?php echo lang("Localize.submit") ?></button>
                </div>

            </form>
        </div>

    </body>
    <script src="<?php echo base_url('public/js/jquery3.6.0.js'); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('public/js/jquery.sumoselect.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bus365datapick.js'); ?>"></script>
    </script>

</html>