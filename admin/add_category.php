<?php include 'includes/header.php'; ?>
<?php
  //Create DB Object
  $db = new Database();
  
  if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($db->link, $_POST['name']);
    //Simple validation
    
    if($name =='') {
      //Set error
      $error = 'Please fill out all required fields';
    } else {
      $query = "INSERT INTO categories (name) 
                VALUES ('$name')"; //dont need quotes for an integer
      $update_row = $db->update($query);
    }
  }
?>

<form method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control"placeholder="Enter Category">
  </div>
  <div>
    <input name="submit" type="submit" class="btn btn-default" value="Submit">
  </div>
  <br>
</form>
<?php include 'includes/footer.php'; ?>