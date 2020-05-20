
<!-- include header.php this contains html code above our main content -->
<?php include 'template/header.php'; ?>
<!-- Display record in div below -->
    <div class="row">
        <div  class="col">
        <?php
        // check if the subject get value exits
        if(isset($_GET['subject']))
        {
            // remove single quotes from subject get value
            $item_number = trim($_GET['subject'], "'");

            // run sql command to select record based on get value
            $record = $connection->query("select * from subject where item_no='$item_number'") or die($connection->error());

            // convert $record into an array for us to echo out on screen
            $row = $record->fetch_assoc();
            
            // create variables that hold data from db fields
            $item = $row['item_no'];
            $object_class = $row['object_class'];
            $procedures = $row['procedures'];
            $description = $row['description'];
            $subject_image = $row['subject_image'];

            // strip out \n and replace with linebreaks
            $procedures = str_replace('\n', '<br><br>', $procedures);
            $description = str_replace('\n', '<br><br>', $description);

            // if subject does not have an image
            if(empty($subject_image))
            {
              // Display db subject record to screen
              echo "<h1>SCP Subject Database</h1>
              <h2>Item_#: {$item}</h2>
              <h3>Class: {$object_class}</h3>
              <h3>Procedures</h3>
              <p>{$procedures}</p>
              <h3>Description</h3>
              <p>{$description}</p>";
            }
            else
            {
              // Display db fields including image
              echo "<h1>SCP Subject Database</h1>
              <h2>Item_#: {$item}</h2>
              <h3>Class: {$object_class}</h3>
              <p class='text-center'><img class='img-fluid rounded mx-auto d-block' src='images/{$subject_image}'></p>
              <h3>Procedures</h3>
              <p>{$procedures}</p>
              <h3>Description</h3>
              <p>{$description}</p>";
            }
        }
        else
        {
          // if this is the first time index.php is accessed, display the content below
          echo "<h1>SCP Subject Database</h1>
              <p class='text-center'>Welcome Agent, use the links above to view subject files or enter new subject data</p>
              <p><img src='images/scp_console.jpg' class='img-fluid rounded mx-auto d-block'></p>";
        }
        ?>
        </div>
    </div>
    <?php include 'template/footer.php'; ?>