<?php include 'template/header.php'; ?>

<!-- Display DATA entry form below -->
    <div class="row">
        <div  class="col">
        <h1>Enter new SCP Subject Form</h1>
        <form name="insert" method="POST" action="connection.php" class="form-group">
            <label>Enter Subject Number</label>
            <br>
            <input type="text" name="item_no" class="form-control" placeholder="Use the following format SCP-###" required>
            <br>
            <label>Enter Subject Class Type</label>
            <br>
            <input type="text" name="object_class" class="form-control" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
            <br>
            <label>Enter link to subject image (if any available)</label>
            <br>
            <input type="text" name="subject_image" class="form-control" placeholder="Use following format: images/image_name.(gif, jpg, png)">
            <br>
            <label>Enter Subject Description Details</label>
            <br>
            <textarea name="description" rows="10" class="form-control" required>Separate Paragraphs with \n</textarea>
            <br>
            <br>
            <label>Enter Containment Procedures</label>
            <br>
            <textarea name="procedures" rows="10" class="form-control" requried>Separate Paragraphs with \n</textarea>
            <br>
            <input type="submit" class="btn btn-danger" name="submit" value="Submit Subject Data">
            </form>
        </div>
    </div>
   <?php include 'template/footer.php'; ?>