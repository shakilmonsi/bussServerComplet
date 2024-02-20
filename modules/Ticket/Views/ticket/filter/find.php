<div class="col-2">
    <?php echo $this->include('common/filter/piclocation') ?>
</div>
<div class="col-2">
    <?php echo $this->include('common/filter/droplocation') ?>
</div>

<div class="col-2">
    <?php echo $this->include('common/filter/journeydate') ?>
</div>

<div class="col-3">
    <?php echo $this->include('common/filter/returndate') ?>
</div>

<div class="col-2">
    <?php echo $this->include('common/filter/fleet') ?>
</div>


<div class="col-3 ">
    <br>
    <button id="search-ticket" type="submit" class="mt-1 btn btn-success"><?php echo lang("Localize.submit") ?> </button>
</div>