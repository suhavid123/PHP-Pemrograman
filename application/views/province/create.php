<?php echo validation_errors(); ?>
<form action="<?php echo base_url('/Country/provinces') ?> " method="post">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" placeholder="Nama">
    </div>
    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>

</form>