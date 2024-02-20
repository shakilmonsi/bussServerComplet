<?php echo $this->extend('template/admin/main') ?>

<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">

            <form action="<?php echo base_url(route_to('update-websetting', $webseeting->id)) ?>" id="websettingedit" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
                <?php echo $this->include('common/securityupdate') ?>

                <div class="col-3">
                    <label for="name" class=""><?php echo lang("Localize.text") ?> <?php echo lang("Localize.logo") ?> </label>
                    <input type="text" id="logotext" name="logotext" value="<?php echo esc(old('logotext')) ?? $webseeting->logotext ?>" class="form-control" placeholder="<?php echo lang("Localize.text") ?> <?php echo lang("Localize.logo") ?>">
                </div>

                <div class="col-3">
                    <label for="value" class=""><?php echo lang("Localize.app") ?> <?php echo lang("Localize.title") ?> </label>
                    <input type="text" id="apptitle" name="apptitle" value="<?php echo esc(old('apptitle')) ?? $webseeting->apptitle ?>" class="form-control" placeholder="<?php echo lang("Localize.app") ?> <?php echo lang("Localize.title") ?>">
                </div>

                <div class="col-3">
                    <label for="name" class=""><?php echo lang("Localize.copy_right_text") ?></label>
                    <input type="text" id="copyright" name="copyright" value="<?php echo esc(old('copyright')) ?? $webseeting->copyright ?>" class="form-control" placeholder="<?php echo lang("Localize.copy_right_text") ?>">
                </div>

                <div class="col-3">
                    <label for="name" class=""><?php echo lang("Localize.max_ticket_for_one_person") ?></label>
                    <input type="text" id="max_ticket" name="max_ticket" value="<?php echo esc(old('max_ticket')) ?? $webseeting->max_ticket  ?>" class="form-control" placeholder="<?php echo lang("Localize.max_ticket_for_one_person") ?>">
                </div>

                <div class="col-2 ">
                    <label for="localize_name" class="form-label"><?php echo lang("Localize.language") ?></label>
                    <select class="form-select" name="localize_name" id="localize_name" required>
                        <option value="">None</option>
                        <?php foreach ($localize as $localizevalue) : ?>

                            <?php if ($localizevalue->language_code == $webseeting->localize_name) : ?>
                                <option value="<?php echo $localizevalue->language_code ?>" selected><?php echo $localizevalue->display_name ?></option>
                            <?php else : ?>
                                <option value="<?php echo $localizevalue->language_code ?>"><?php echo $localizevalue->display_name ?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>


                <div class="col-2 ">
                    <label for="fontfamely" class="form-label"><?php echo lang("Localize.font") ?> <?php echo lang("Localize.family") ?> </label>
                    <select class="form-select" name="fontfamely" id="fontfamely" required>
                        <option value="">None</option>
                        <?php foreach ($font as $fontvalue) : ?>

                            <?php if ($fontvalue->font_name == $webseeting->fontfamely) : ?>
                                <option value="<?php echo $fontvalue->font_name ?>" selected><?php echo $fontvalue->font_display ?></option>
                            <?php else : ?>
                                <option value="<?php echo $fontvalue->font_name ?>"><?php echo $fontvalue->font_display ?></option>
                            <?php endif ?>

                        <?php endforeach ?>
                    </select>

                </div>


                <div class="col-2 ">
                    <label for="currency" class="form-label"> <?php echo lang("Localize.currency") ?> </label>
                    <select class="form-select" name="currency" id="currency" required>
                        <option value="">None</option>
                        <?php foreach ($currency as $currencyvalue) : ?>

                            <?php if ($currencyvalue->id == $webseeting->currency) : ?>
                                <option value="<?php echo $currencyvalue->id ?>" selected><?php echo $currencyvalue->code ?> - <?php echo $currencyvalue->symbol ?></option>
                            <?php else : ?>
                                <option value="<?php echo $currencyvalue->id ?>"><?php echo $currencyvalue->code ?> - <?php echo $currencyvalue->symbol ?></option>
                            <?php endif ?>

                        <?php endforeach ?>
                    </select>

                </div>


                <div class="col-3 ">
                    <label for="country" class="form-label"><?php echo lang("Localize.country") ?></label>
                    <select class="form-select" name="country" id="country" required>
                        <option value="">None</option>
                        <?php foreach ($country as $countryvalue) : ?>

                            <?php if ($countryvalue->id == $webseeting->country) : ?>
                                <option value="<?php echo $countryvalue->id ?>" selected><?php echo $countryvalue->name ?></option>
                            <?php else : ?>
                                <option value="<?php echo $countryvalue->id ?>"><?php echo $countryvalue->name ?></option>
                            <?php endif ?>

                        <?php endforeach ?>
                    </select>

                </div>


                <div class="col-3 ">
                    <label for="timezone" class="form-label"><?php echo lang("Localize.time") ?> <?php echo lang("Localize.zone") ?></label>
                    <select class="form-select" name="timezone" id="timezone" required>
                        <option value="">None</option>
                        <?php foreach ($timezone as $timezonevalue) : ?>

                            <?php if ($timezonevalue->timezone == $webseeting->timezone) : ?>
                                <option value="<?php echo $timezonevalue->timezone ?>" selected><?php echo $timezonevalue->timezone ?></option>
                            <?php else : ?>
                                <option value="<?php echo $timezonevalue->timezone ?>"><?php echo $timezonevalue->timezone ?></option>
                            <?php endif ?>

                        <?php endforeach ?>
                    </select>

                </div>


                <div class="col-2">
                    <label for="headercolor" class=""><?php echo lang("Localize.header") ?> <?php echo lang("Localize.background") ?> <?php echo lang("Localize.color") ?></label>
                    <input type="color" id="headercolor" name="headercolor" value="<?php echo esc(old('headercolor'))  ?? $webseeting->headercolor  ?>" class="form-control">
                </div>

                <div class="col-2">
                    <label for="footercolor" class=""><?php echo lang("Localize.footer") ?> <?php echo lang("Localize.background") ?> <?php echo lang("Localize.color") ?></label>
                    <input type="color" id="footercolor" name="footercolor" value="<?php echo esc(old('footercolor'))  ?? $webseeting->footercolor ?>" class="form-control">
                </div>

                <div class="col-2">
                    <label for="bottomfootercolor" class=""><?php echo lang("Localize.button") ?> <?php echo lang("Localize.footer") ?> <?php echo lang("Localize.background") ?> <?php echo lang("Localize.color") ?> </label>
                    <input type="color" id="bottomfootercolor" name="bottomfootercolor" value="<?php echo esc(old('bottomfootercolor'))  ?? $webseeting->bottomfootercolor ?>" class="form-control">
                </div>

                <div class="col-2">
                    <label for="buttoncolor" class=""> <?php echo lang("Localize.button") ?> <?php echo lang("Localize.background") ?> <?php echo lang("Localize.color") ?> </label>
                    <input type="color" id="buttoncolor" name="buttoncolor" value="<?php echo esc(old('buttoncolor')) ?? $webseeting->buttoncolor  ?>" class="form-control">
                </div>

                <div class="col-2">
                    <label for="buttoncolorhover" class=""><?php echo lang("Localize.button") ?> <?php echo lang("Localize.hover") ?> <?php echo lang("Localize.color") ?> </label>
                    <input type="color" id="buttoncolorhover" name="buttoncolorhover" value="<?php echo esc(old('buttoncolorhover')) ?? $webseeting->buttoncolorhover  ?>" class="form-control">
                </div>

                <div class="col-2">
                    <label for="buttontextcolor" class=""><?php echo lang("Localize.button") ?> <?php echo lang("Localize.text") ?> <?php echo lang("Localize.color") ?> </label>
                    <input type="color" id="buttontextcolor" name="buttontextcolor" value="<?php echo esc(old('buttontextcolor'))  ?? $webseeting->buttontextcolor ?>" class="form-control">
                </div>

                <div class="col-4">
                    <label for="editlogoheader" class="form-label"><?php echo lang("Localize.header") ?> <?php echo lang("Localize.logo") ?> </label>
                    <div id="editlogoheader">

                    </div>
                    <input type="hidden" id="oldlogoheader" name="oldlogoheader" value="<?php echo $webseeting->headerlogo ?>">
                </div>

                <div class="col-4">
                    <label for="editlogofavicon" class="form-label"><?php echo lang("Localize.favicon") ?></label>
                    <div id="editlogofavicon">

                    </div>
                    <input type="hidden" id="oldlogofavicon" name="oldlogofavicon" value="<?php echo $webseeting->favicon ?>">
                </div>

                <div class="col-4">
                    <label for="editfooterlogo" class="form-label"><?php echo lang("Localize.footer") ?> <?php echo lang("Localize.logo") ?> </label>
                    <div id="editfooterlogo">

                    </div>
                    <input type="hidden" id="oldlogofooter" name="oldlogofooter" value="<?php echo $webseeting->footerlogo ?>">
                </div>


                <div class="col-3 ">

                    <label class="form-label" for="">
                        <?php echo lang("Localize.tax") ?> <?php echo lang("Localize.type") ?>
                    </label>

                    <?php if ($webseeting->tax_type == "inclusive") : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tax_type" id="tax_type" value="inclusive" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo lang("Localize.inclusive") ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tax_type" id="tax_type" value="exclusive">
                            <label class="form-check-label" for="exampleRadios2">
                                <?php echo lang("Localize.exclusive") ?>
                            </label>
                        </div>
                    <?php else : ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tax_type" id="tax_type" value="inclusive">
                            <label class="form-check-label" for="exampleRadios1">
                                <?php echo lang("Localize.inclusive") ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tax_type" id="tax_type" value="exclusive" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                <?php echo lang("Localize.exclusive") ?>
                            </label>
                        </div>
                    <?php endif ?>
                </div>


                <input type="hidden" id="baseurl" name="baseurl" value="<?php echo base_url(); ?>">

                <div class="text-danger">
                    <?php if (isset($validation)) : ?>
                        <?= $validation->listErrors(); ?>
                    <?php endif ?>
                </div>

                <br>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success"><?php echo lang("Localize.submit") ?></button>
                </div>
            </form>
        </div>
    </div>

<?php echo $this->endSection() ?>

<?php echo $this->section('js') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#fontfamely').change(function () { 
                var $select = $(this),
                    fontName = $select.val();

                $select.prop('disabled', true);

                // Load webfont
                WebFont.load({
                    fontactive: function(familyName, fvd) {
                        // change font family
                        $select.css('font-family', familyName);
                        $select.prop('disabled', false);
                    },
                    google: {
                        families: [fontName]
                    }
                });
            });
        });
    </script>
<?php echo $this->endSection() ?>