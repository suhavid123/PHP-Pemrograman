<form action="<?php echo base_url('/City/update') ?> " method="post">
    <div class="form-group">
        <label>Nama</label>
        <input type="hidden" value="<?php echo $city['id']; ?>" name="id">
        <input type="text" value="<?php echo $city['name']; ?>" name="name" class="form-control" placeholder="Nama">
         <input type="text" value="<?php echo $city['province_id']; ?>" name="name" class="form-control" placeholder="Nama">
    </div>
    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>

</form>