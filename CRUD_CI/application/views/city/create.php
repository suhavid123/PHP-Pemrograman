<?php echo validation_errors(); ?>
<form action="<?php echo base_url('/City/citys') ?> " method="post">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Nama">
    </div>
    <div class="form-group">
        <label>Province id</label>
        <input type="text" name="province_id" class="form-control" placeholder="Province id">
    </div>
    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>

</form>