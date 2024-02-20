<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <?php if ($add_data == true) : ?>
                <div class="text-end">
                    <a class="btn btn-success" href="<?php echo base_url(route_to('new-fitness')) ?>"><?php echo lang("Localize.add_fitness") ?></a>
                </div>
            <?php endif ?>

            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="fitnesslist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.fitness") ?> <?php echo lang("Localize.name") ?> </th>
                            <th scope="col"><?php echo lang("Localize.vehicle") ?> <?php echo lang("Localize.reg") ?> <?php echo lang("Localize.no") ?> </th>
                            <th scope="col"><?php echo lang("Localize.from") . ' ' . lang("Localize.date") ?> </th>
                            <th scope="col"><?php echo lang("Localize.to") . ' ' . lang("Localize.date") ?> </th>
                            <th scope="col"><?php echo lang("Localize.milage") ?> </th>
                            <th scope="col"><?php echo lang("Localize.end") ?> <?php echo lang("Localize.milage") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($fitness as $kye =>  $value) : ?>
                            <?php
                            $date_now = strtotime(date('Y-m-d'));
                            $endDate    =  strtotime($value->end_date);
                            ?>

                            <?php if ($endDate  >= $date_now) : ?>
                                <?php $redclass = ""; ?>
                            <?php else : ?>

                                <?php $redclass = "bg-warning"; ?>
                            <?php endif ?>

                            <tr>
                                <th scope="row" class="<?php echo $redclass ?>"><?php echo $kye + 1; ?></th>
                                <td class="<?php echo $redclass ?>"><?php echo  $value->fitness_name;  ?></td>
                                <td class="<?php echo $redclass ?>"><?php echo  $value->regno; ?></td>
                                <td class="<?php echo $redclass ?>"><?php echo $value->start_date; ?></td>
                                <td class="<?php echo $redclass ?>"><?php echo $value->end_date; ?></td>
                                <td class="<?php echo $redclass ?>"><?php echo $value->start_milage; ?></td>
                                <td class="<?php echo $redclass ?>"><?php echo $value->end_milage; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('delete-fitness', $value->id)) ?>" id="locatindelete" method="post" class="deletionForm" accept-charset="utf-8" enctype="multipart/form-data">
                                        <?php echo $this->include('common/delete') ?>

                                        <?php if ($edit_data == true) : ?>
                                            <a href="<?= base_url(route_to('edit-fitness', $value->id)) ?>" class="btn btn-sm btn-info text-white" title="<?php echo lang("Localize.edit") ?>"><i class="fas fa-edit"></i></a>
                                        <?php endif ?>

                                        <?php if ($delete_data == true) : ?>
                                            <button type="button" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
                                        <?php endif ?>
                                    </form>
                                </td>

                            </tr>


                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>