<div class="col-md-4">
                <h3>New Record</h3>
                <?php
                     if(isset($_GET['new_record'])){
                            switch($_GET['new_record']){
                                case "added": echo "<div class='alert alert-success'>User Added.</div>";
                                      break;
                                case "failed":  echo "<div class='alert alert-danger'>User Not Added</div>";
                                      break;
                                        
                            }
                       }
                ?>

  				<div class="mb-3">
        <label for="username" class="form- label">Username</label>
        <input type="text" id="username" required name="username" class="form-control">
    </div>
    <div class="mb-3">
        <label for="passwords" class="form- label">Passwords</label>
        <input type="text" required id="passwords" name="passwords" class="form-control">
    </div>
    <div class="mb-3">
        <label for="fullname" class="form- label">Fullname</label>
        <input type="text" required id="fullname" name="fullname" class="form-control">
    </div>
    <input type="submit" class="btn btn-primary"> 
</form>