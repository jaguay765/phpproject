<?php include "header.php"?>
<div class="container">
    <h1 class="text-center"></br></h1>

    <table class="table table-borderless table-hover">
        <thead class="table">
            <tr>
                
            </tr>
        </thead>
            <tbody>
                <tr>

            <?php 
        $query= "SELECT * FROM myprisoners";
        $view_myprisoners = mysqli_query($conn, $query);

        while ($row= mysqli_fetch_assoc($view_myprisoners))
        {
            $id = $row['id'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $charges = $row['charges'];

 

            echo "<div class='card'>";
            echo "<div class='card-header'><h5>{$fname} {$lname}</h5></div>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$id}</h5>";
            echo "<p class='card-text'>{$charges} </p>";
            echo " <a href='update.php?myprisoners_id={$id}' class='btn btn-primary'>EDIT</a>";
            echo " <a href='view.php?myprisoners_id={$id}' class='btn btn-dark'>VIEW</a>";
            echo " <a href='delete.php?delete={$id}' class='btn btn-danger'>DELETE</a>";
            echo "</div>";
            echo "</div>";
            echo "</br>";
        }
            ?>
            </tr>
        </tbody>
    </table>
    </div>

   
    <div class="container text-center mt-5">
    <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Book Prisoner </a>
        
        <div>

        <?php include "footer.php" ?>

        <div class="container text-center mt-5">
      <a href="index.php" class="btn btn-warning mt-5"> Back </a>
    <div>

