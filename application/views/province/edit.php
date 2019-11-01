<form action="<?php echo base_url('/Country/update') ?> " method="post">
    <div class="form-group">
        <label>Nama</label>
        <input type="hidden" value="<?php echo $province ['id']; ?>" name="id">
        <input type="text" value="<?php echo $province ['name']; ?>" name="name" class="form-control" placeholder="Nama">
    </div>
    <button type="submit" name="add" value="add" class="btn btn-primary">Submit</button>

</form>

    <input type="text" class="form-control" name="idKursus" id="idKursus" readonly value="<?php echo $id_kursus; ?>"> </div>