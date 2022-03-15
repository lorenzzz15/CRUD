<div class="container">
    <form method="post" action="<?php echo site_url('CrudSample/update') ?>/<?php echo $row->id ?>">
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
            <br>
            <button type="submit" class="btn btn-primary" value="save">Save changes</button>
        </fieldset>
    </form>
</div>