<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>

    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('create-menu')) ?>" id="menuform" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/security') ?>

                <div class="row justify-content-center">
                    <div class="col-8">
                        <div class="row">
                            <div class="col-12">
                                <label for="menu_title" class=""><?php echo lang("Localize.menu") ?> <?php echo lang("Localize.title") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="menu_title" name="menu_title" value="<?php echo esc(old('menu_title'))  ?>" class="form-control " placeholder="<?php echo lang("Localize.menu") ?> <?php echo lang("Localize.title") ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="page_url" class=""><?php echo lang("Localize.page") ?> <?php echo lang("Localize.url") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="page_url" name="page_url" value="<?php echo esc(old('page_url'))  ?>" class="form-control " placeholder="<?php echo lang("Localize.page") ?> <?php echo lang("Localize.url") ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="module_name" class=""><?php echo lang("Localize.module") ?> <?php echo lang("Localize.name") ?> <abbr title="Required field">*</abbr></label>
                                <input type="text" id="module_name" name="module_name" value="<?php echo esc(old('module_name'))  ?>" class="form-control " placeholder="<?php echo lang("Localize.module") ?> <?php echo lang("Localize.name") ?>" required />
                            </div>

                            <div class="col-12 mt-3">
                                <label for="parent_menu_id"><?php echo lang("Localize.parent") ?> <?php echo lang("Localize.menu") ?></label>
                                <select class="form-select" name="parent_menu_id" id="parent_menu_id">
                                    <option value="">None</option>
                                    <?php if (!empty($parentmenu)) : ?>
                                        <?php foreach ($parentmenu as $parentValue) : ?>

                                            <option value="<?php echo $parentValue->id ?>"><?php echo $parentValue->menu_title  ?></option>

                                        <?php endforeach ?>
                                    <?php endif ?>

                                </select>
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php echo $this->endSection() ?>