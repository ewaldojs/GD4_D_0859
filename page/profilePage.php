<?php
include '../component/sidebar.php';
include( '../db.php');
$query = mysqli_query($con, "SELECT * FROM users WHERE id = ". $_SESSION['user']['id']);
$user = mysqli_fetch_assoc($query);
?>

<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF;  border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Profile</h4>
    <hr>

    <form>
        <div class="mb-3">
            <label for="profile" class="form-label">Name</label>
            <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $user['name']?>" disabled>
        </div>
        <div class="mb-3">
            <label for="profile" class="form-label">Phone Number</label>
            <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp" value="<?php echo $user['phonenum']?>" disabled>
        </div>
        <div class="mb-3">
            <label for="profile" class="form-label">membership</label>
            <input class="form-control" id="membership" name="membership" aria-describedby="emailHelp" value="<?php echo $user['membership']?>" disabled>
        </div>
        <div class="mb-3">
            <label for="profile" class="form-label">email</label>
            <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $user['email']?>" disabled>
        </div>
        <button type="button" class="btn btn-primary">
        <a class = "button" href="./editProfilePage.php">Edit Profile</a>
        </button>
    </form>
</div>
</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>