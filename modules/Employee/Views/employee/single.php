<?php echo $this->extend('template/admin/main') ?>
<?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

    <div class="card mb-4">
        <div class="card-body">
            <div class="user-details row">
                <div class="user-details-left-col col-md-3 pe-5">
                    <div class="user-deatails-image">
                        <img src="<?php echo base_url($profile_pic) ?>" alt="NO User Image" class="img-thumbnail">
                        <div class="d-block mt-3">
                            <img src="<?php echo base_url($nid_image) ?>" alt="NO NID Image" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-7 employee-details-section">
                    <h5><?php echo $employee->first_name; ?> <small><?php echo $employee->last_name; ?></small></h5>

                    <div class="row details-group">
                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.employee") ?> <?php echo lang("Localize.type") ?>:</span>
                                <?php echo $employee->employee_type ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.mobile") ?>:</span>
                                <?php echo $employee->phone ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.email") ?>:</span>
                                <?php echo $employee->email ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.blood") ?>:</span>
                                <?php echo $employee->blood ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.nid_passport_number") ?>:</span>
                                <?php echo $employee->nid ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.country_name") ?>:</span>
                                <?php echo $employee->country_name ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.city_name") ?>:</span>
                                <?php echo $employee->city ?>
                            </p>
                        </div>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.zip_code") ?>:</span>
                                <?php echo $employee->zip ?>
                            </p>
                        </div>

                        <?php if (!empty($user_role)) : ?>

                            <div class="col-12 single-employee-details">
                                <p>
                                    <span><?php echo lang("Localize.role") ?> <?php echo lang("Localize.name") ?> :</span>
                                    <?php echo $user_role ?>
                                </p>
                            </div>
                        <?php endif ?>

                        <div class="col-12 single-employee-details">
                            <p>
                                <span><?php echo lang("Localize.address") ?>:</span>
                                <?php echo $employee->address ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <ul class="list-group">
                        <li class="list-group-item pb-0 border-0">

                            <?php if ($edit_data == true) : ?>
                                <a href="<?php echo base_url(route_to('edit-employee', $employee->id)) ?>" class="btn btn-info d-block"> 
                                    <i class="fas fa-pencil-alt"></i>
                                    <?php echo lang("Localize.edit") ?>
                                </a>
                            <?php endif; ?>

                        </li>
                        <li class="list-group-item pb-0 border-0">

                            <?php if ($edit_data == true) : ?>
                                <a href="<?php echo base_url(route_to('edit-employee-role', $employee->id)) ?>" class="btn btn-secondary d-block"> 
                                    <i class="fas fa-user-check"></i>
                                    <?php echo $role_button_text ?>
                                </a>
                            <?php endif; ?>

                        </li>
                        <li class="list-group-item pb-0 border-0">
                            <form action="<?php echo base_url(route_to('delete-employee', $employee->id)) ?>" method="post" onsubmit="return confirm('Are you sure?');">
                                <?php echo $this->include('common/delete') ?>

                                <?php if ($delete_data == true && false) : ?>
                                    <button type="submit" class="btn btn-danger d-block" style="width: 100%" title="<?php echo lang("Localize.delete") ?>">
                                        <i class="far fa-trash-alt"></i>
                                        Delete
                                    </button>
                                <?php endif ?>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <style>
        .employee-details-section > h5 {
            display: inline-block;
            font-weight: bolder;
            border-bottom: 1px dashed #333;
            padding: 0 30px 5px 0px;
        }
        .employee-details-section .details-group {
            margin-top: 10px;
        }
        
        .single-employee-details p span {
            font-weight: bold;
        }
        
    </style>
<?php echo $this->endSection('content') ?>