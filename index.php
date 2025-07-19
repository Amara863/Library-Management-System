<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Library Management System</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <div class="container">
    <h1>📚 Library Management System</h1>

    <form action="add.php" method="POST">
      <input type="text" name="title" placeholder="Book Title" required />
      <input type="text" name="author" placeholder="Author" required />
      <input type="text" name="isbn" placeholder="ISBN" required />
      <button type="submit">Add Book</button>
    </form>

    <h2>Available Books</h2>
    <table>
      <tr><th>Title</th><th>Author</th><th>ISBN</th><th>Action</th></tr>
      <?php
        include "db.php";
        $result = mysqli_query($conn, "SELECT * FROM books");
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
                  <td>{$row['title']}</td>
                  <td>{$row['author']}</td>
                  <td>{$row['isbn']}</td>
                  <td>
                    <a href='edit.php?id={$row['id']}' class='edit'>Edit</a> | 
                    <a href='delete.php?id={$row['id']}' class='delete'>Delete</a>
                  </td>
                </tr>";
        }
      ?>
    </table>
  </div>
</body>
</html>
