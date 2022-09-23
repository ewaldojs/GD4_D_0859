<?php
include '../component/sidebar.php';
?>

<div class="container p-3 m-4 h-100"
    style="background-color: #FFFFFF;  border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
    <h4>Profile</h4>
    <hr>

    <form>
        <div class="mb-3">
            <?php
            echo'
            <label for="profile" class="form-label">Name</label>
            <p class="form-control text-muted"> ' . $_SESSION['user']['name'] . '</p>
            ';
            ?>
        </div>
        <div class="mb-3">
            <?php
            echo'
            <label for="profile" class="form-label">Phone Number</label>
            <p class="form-control text-muted"> ' . $_SESSION['user']['phonenum'] . '</p>
            ';
            ?>
        </div>
        <div class="mb-3">
            <?php
            echo'
            <label for="profile" class="form-label">membership</label>
            <p class="form-control text-muted"> ' . $_SESSION['user']['membership'] . '</p>
            ';
            ?>
        </div>
        <div class="mb-3">
            <?php
            echo'
            <label for="profile" class="form-label">Email</label>
            <p class="form-control text-muted"> ' . $_SESSION['user']['email'] . '</p>
            ';
            ?>
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