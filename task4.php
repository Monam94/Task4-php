<?php
// Path to store uploaded file
$path = "C:/xampp/htdocs/";
if(isset($_POST['submit'])){

     // Count total files
     $fileCount = count($_FILES['file']['name']);
     for($i = 0; $i < $fileCount; $i++){

          $file = $_FILES['file']['name'][$i];
          move_uploaded_file($_FILES['file']['tmp_name'][$i], $file);

     }
} 
?>
<form method='post' action='' enctype='multipart/form-data'>
 		<input type="file" name="file[]" id="file" multiple>
 		<input type='submit' name='submit' value='Upload'>
	</form>