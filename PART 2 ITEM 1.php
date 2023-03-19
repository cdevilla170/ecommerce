<!--product.php -->
<h3>New Record</h3> 
<form action="product.php" method="post">
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