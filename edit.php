<?php
include "db.php";

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM books WHERE id=$id");
  $row = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
  $title = $_POST['title'];
  $author = $_POST['author'];
  $isbn = $_POST['isbn'];
  $id = $_POST['id'];

  mysqli_query($conn, "UPDATE books SET title='$title', author='$author', isbn='$isbn' WHERE id=$id");
  header("Location: index.php");
}
?>

<form method="POST">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="title" value="<?php echo $row['title']; ?>" required>
  <input type="text" name="author" value="<?php echo $row['author']; ?>" required>
  <input type="text" name="isbn" value="<?php echo $row['isbn']; ?>" required>
  <button type="submit" name="update">Update Book</button>
</form>
