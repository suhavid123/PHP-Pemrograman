
        <table class="table table-hover table-stripped">
             <a href="<?php echo site_url('Country/create') ?>" class="btn btn-success">Create Province</a>
             <br>
            <thead>
                <br>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach ($province as $prv) : ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $prv['name']; ?></td>
                        <td>
                            <a href="<?php echo base_url("Country/edit"); echo "/".$prv['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="<?php echo base_url("Country/delete"); echo "/".$prv['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php $i++; endforeach; ?>
            </tbody>
        </table>
