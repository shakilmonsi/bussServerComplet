<?php echo $this->extend('template/web/main') ?>

    <?php echo $this->section('content') ?>
    <?php echo $this->include('common/message') ?>

        <div class="d-flex align-items-center justify-content-center text-center h-100vh">
            <div class="form-wrapper m-auto">
                <div class="form-container my-4">
                    <div class="register-logo text-center mb-4">
                        
                    </div>
                    <div class="panel">
                       
                        <form action="<?php echo base_url(route_to('confirmpassword'))?>" id="logindauth" method="post" class="row g-3" accept-charset="utf-8" enctype="multipart/form-data">
								<?php echo $this->include('common/security') ?>
                            <div class="mb-3">
                                <input type="text" name="recovery_code" class="form-control" id="recovery_code" placeholder="Recovery Ccode">
                            </div>

                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" id="password-field" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                
                            </div>

                            <div class="mb-3">
                                <input type="password" name="repassword" class="form-control" id="repassword-field" placeholder="Repassword">
                                <span toggle="#repassword-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                
                            </div>
                           
                            <input type="hidden" name="slug" class="form-control" id="slug"  value="<?php echo $slug ?>">
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </form>

                    </div>
                    
                   
                </div>
            </div>
        </div>


    <?php echo $this->endSection() ?>