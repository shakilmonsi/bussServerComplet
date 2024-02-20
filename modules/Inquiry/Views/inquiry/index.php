<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table display table-bordered table-striped table-hover basic" id="inquirylist">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?php echo lang("Localize.name") ?> </th>
                            <th scope="col"><?php echo lang("Localize.email") ?> </th>
                            <th scope="col"><?php echo lang("Localize.mobile") ?> </th>
                            <th scope="col"><?php echo lang("Localize.subject") ?> </th>
                            <th scope="col"><?php echo lang("Localize.action") ?> </th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($inquiry as $kye =>  $value) : ?>
                            <tr>
                                <th scope="row"><?php echo $kye + 1; ?></th>
                                <td><?php echo $value->name; ?></td>
                                <td><?php echo $value->email; ?></td>
                                <td><?php echo $value->mobile; ?></td>
                                <td><?php echo $value->subject; ?></td>
                                <td>
                                    <form action="<?php echo base_url(route_to('delete-inquiry', $value->id)) ?>" id="locatindelete" method="post" class="deletionForm">
                                        <?php echo $this->include('common/delete') ?>
                                        <?php if ($read_data == true) : ?>
                                            <a href="<?= base_url(route_to('show-inquiry', $value->id)) ?>" class="btn btn-sm btn-success text-white" title="<?php echo lang("Localize.show") ?>"><i class="fas fa-eye"></i></a>
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