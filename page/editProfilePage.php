<?php
include '../component/sidebar.php';
include('../db.php');

$query = mysqli_query($con, "SELECT * FROM users WHERE id = ". $_SESSION['user']['id']);
$user = mysqli_fetch_assoc($query);

?>

<div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px 
solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 
0.19);">

    
    <div class="body d-flex justify-content-between">
        <h4>Edit Profile</h4>
        <a href="../page/profilePage.php"> <i style="color: red" class="fa fa-arrow-left fa-2x"></i></a>
    </div>

    <hr>

    <div class="card-body">
            <form action="../process/editProfileProcess.php" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?php echo $user['name']?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                    <input class="form-control" id="phonenum" name="phonenum" aria-describedby="emailHelp" value="<?php echo $user['phonenum']?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Membership</label>
                    <select class="form-select" aria-label="Default select example" name="membership"
                        id="membership" value="<?php echo $user['membership']?>">
                        <option value="Reguler">Reguler</option>
                        <option value="Gold">Gold</option>
                        <option value="Platinum">Platinum</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $user['email']?>">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-dark" name="save">Save</button>
                </div>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>