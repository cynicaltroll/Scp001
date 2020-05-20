<?php

    // Create Database credential variables
    $user = "a9993453_Host";
    $password = "Toiohomai1234";
    $db_name = "a9993453_SCP_000";

    // Create php db connection object
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get all data from the table and save in a variable for use on our page application
    $result = $connection->query("select * from subject") or die($connection->error);

    // Check if form has been filled out by checking POST value, then insert form contents into database.
    if(isset($_POST['item_no']))
    {
        // save all $_POST values from form into separate variables
        $item_no = $_POST['item_no'];
        $object_class = $_POST['object_class'];
        $subject_image = $_POST['subject_image'];
        $description = $_POST['description'];
        $procedures = $_POST['procedures'];

        // create insert command
        $sql = "insert into subject(item_no, object_class, subject_image, description, procedures) values('$item_no', '$object_class', '$subject_image', '$description', '$procedures')"; 

        if ($connection->query($sql) === TRUE) {
            include 'template/insert_header.php';
            echo "<h1>Record created successfully</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            include 'template/footer.php';
           } 
           else 
           {
               include 'template/insert_header.php';
               echo "<h1>Error creating record: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
               include 'template/footer.php';
           }

        
    } 
   

?>