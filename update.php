<!-- Footer -->
<?php include "header.php"?>

<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['myprisoners_id']))
    {
      $myprisonersid = $_GET['myprisoners_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM myprisoners WHERE id = $myprisonersid ";
      $view_myprisoners= mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($view_myprisoners))
        {
          $id = $row['id'];
          $fname = $row['firstname'];
          $lname = $row['lastname'];
          $charges = $row['charges'];
        }
 
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $fname = $_POST['firstname'];
      $lname = $_POST['lastname'];
      $charges = $_POST['charges'];
      
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE myprisoners SET firstname = '{$fname}' , lastname = '{$lname}' , charges= '{$charges}' WHERE id = $myprisonersid";
      $update_prisoners = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('Prisoners data updated successfully!')</script>";
    }             
?>

<h1 class="text-center">Update Student Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="firstname" >First Name</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $fname  ?>">
      </div>

      <div class="form-group">
        <label for="lastname" >Last Name</label>
        <input type="text" name="lastname"  class="form-control" value="<?php echo $lname  ?>">
      </div>
        
    
      <div class="form-group">
        <label for="charges" >charges</label>
        <input type="text" name="charges"  class="form-control" value="<?php echo $charges  ?>">
      </div>    

      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>

    <!-- a BACK button to go to the home page -->
    <div class="container text-center mt-5">
      <a href="home.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<!-- Footer -->
<?php include "footer.php" ?>