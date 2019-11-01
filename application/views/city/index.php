
        <table class="table table-hover table-stripped">
            <a href="<?php echo site_url('city/create') ?>" class="btn btn-success">Create City</a>
            <br>
            <thead>
                <br>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Province id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($city as $cty) : ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $cty['name']; ?></td>
                         <td><?php echo $cty['province_id']; ?></td>
                        <td>
                            <a href="<?php echo base_url("City/edit"); echo "/".$cty['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?php echo base_url("City/delete"); echo "/".$cty['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php $i++; endforeach; ?>
            </tbody>
        </table>