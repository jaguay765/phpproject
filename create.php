<?php include "header.php" ?>

<?php 
    if(isset($_POST['create']))
        {
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $charges = $_POST['charges'];

            $query= "INSERT INTO myprisoners(firstname, lastname, charges) VALUES('{$fname}','{$lname}','{$charges}')";
            $add_myprisoners = mysqli_query($conn, $query);

            if (!$add_myprisoners) {
                echo "something went wrong". mysqli_error($conn);
            }

            else { echo "<script type='text/javascript'>alert('prisoner added successfully!')</script>";
            }

        }
    ?>

    <h1 class="text-center">Book Prisoners</h1>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" name="firstname" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" name="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="charges" class="form-label">Charges</label>
                <input type="text" name="charges" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" name="create" class="btn btn-primary mt-2" value="submit">
            </div>
        </form>
    </div>

    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    </div>

    <?php include "footer.php" ?>