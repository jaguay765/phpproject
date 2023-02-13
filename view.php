<?php include 'header.php'?>

<h1 class="text-center"> Student Details</h1>
  <div class="container">
    <table class="table table-striped table-borderless table-hover">
        <thead class="table-secondary">
            <tr>
                <th  scope="col">ID</th>
                <th  scope="col">First Name</th>
                <th  scope="col">Last Name</th>
                <th  scope="col">Booked On</th>

            </tr>
        </thead>
            <tbody>
                <tr>


<?php 
if (isset($_GET['myprisoners_id'])) {
    $myprisoners_id = $_GET['myprisoners_id'];

        $query="SELECT * FROM myprisoners WHERE id = {$myprisoners_id} ";
        $view_prisoners = mysqli_query($conn,$query);

        while ($row= mysqli_fetch_assoc($view_prisoners))
        {
            $id = $row['id'];
            $fname = $row['firstname'];
            $lname = $row['lastname'];
            $charges = $row['charges'];

            echo "<tr>";
            echo "<td> {$id}</td>";
            echo "<td> {$fname}</td>";
            echo "<td> {$lname}</td>";
            echo "<td> {$charges}</td>";
            echo "</tr>";
            }
}
            ?>
            </tr>
        </tbody>
    </table>
    </div>

    <div class="container text-center mt-5">
        <a href="home.php" class="btn btn-dark mt-5"> Back </a>
        <div>

        <?php include "footer.php" ?>
