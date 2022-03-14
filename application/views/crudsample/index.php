<br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form method="post" action="<?php echo site_url('CrudSample/create') ?>">
                    <fieldset>
                        <div class="form-group">
                            <label for="firstname" class="form-label mt-4">First Name</label>
                            <input type="text" class="form-control" name="first_name" aria-describedby="firstHelp" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="form-label mt-4">Last Name</label>
                            <input type="text" class="form-control" name="last_name" aria-describedby="lastHelp" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label for="address_" class="form-label mt-4">Address</label>
                            <input type="text" class="form-control" name="address" aria-describedby="addressHelp" placeholder="Enter Address">
                        </div>
                        <div class="form-group">
                            <label for="contact" class="form-label mt-4">Contact Number</label>
                            <input type="text" class="form-control" name="contact_no" aria-describedby="contactHelp" placeholder="Enter Contact Number">
                        </div>
                        <div class="form-group">
                            <label for="bd" class="form-label mt-4">Birthdate</label>
                            <input type="date" class="form-control" name="birthdate" aria-describedby="bdHelp" placeholder="Enter Birthdate">
                        </div>
                        <button type="submit" class="btn btn-primary" value="save">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Contact Number</th>
            <th scope="col">Birthdate</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($crudsample as $row) { ?>
            <tr>
                <th scope="row"><?php echo $row->id; ?></th>
                <td><?php echo $row->last_name; ?></td>
                <td><?php echo $row->first_name; ?></td>
                <td><?php echo $row->address; ?></td>
                <td><?php echo $row->contact_no; ?></td>
                <td><?php echo $row->birthdate; ?></td>
                <td>
                    <a href="<?php echo site_url('CrudSample/edit'); ?>/<?php echo $row->id; ?>">Edit</a> |
                    <a href="<?php echo site_url('CrudSample/delete'); ?>/<?php echo $row->id; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>