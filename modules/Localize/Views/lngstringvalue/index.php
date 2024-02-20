<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-lngstngvalue')) ?>" id="lagsrtform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="table-responsive">
                    <table class="table display table-bordered table-striped table-hover basic" id="languageStringValue">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><?php echo lang("Localize.name") ?> </th>
                                <th scope="col"><?php echo lang("Localize.value") ?> </th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($lanStrValue as $kye =>  $value) : ?>
                                <tr>
                                    <th scope="row"><?php echo $kye + 1; ?></th>
                                    <td><?php echo $value->name; ?></td>
                                    <td>
                                        <input type="text" id="strvalue" name="strvalue[]" value="<?php echo esc($value->value)  ?>" class="form-control" placeholder="<?php echo lang("Localize.language") . " " . lang("Localize.string") . " " . lang("Localize.value") ?>">
                                        <input type="hidden" id="" name="strid[]" value="<?php echo esc($value->id)  ?>">
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
                <input type="hidden" name="langid" value="<?php echo esc($lngid)  ?>">

                <div class="col-12">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </form>
        </div>
    </div>
    <?php echo $this->include('common/datatable_default_lang_change') ?>
<?php echo $this->endSection() ?>