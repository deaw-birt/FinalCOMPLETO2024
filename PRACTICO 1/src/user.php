<!DOCTYPE html>
<html>
<head>
  <title>User Details</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  <h1>User Details</h1>
  <?php
  if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $servername = getenv('MYSQL_HOST');
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $dbname = getenv('MYSQL_DATABASE');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT name, email, age, bio FROM users WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo "<table>";
      echo "<tr><td>Name:</td><td>" . $row["name"] . "</td></tr>";
      echo "<tr><td>Email:</td><td>" . $row["email"] . "</td></tr>";
      echo "<tr><td>Age:</td><td>" . $row["age"] . "</td></tr>";
      echo "<tr><td>Bio:</td><td>" . $row["bio"] . "</td></tr>";
      echo "</table>";
    } else {
      echo "User not found.";
    }

    $conn->close();
  } else {
    echo "No user ID provided.";
  }
  ?>
</div>
</body>
</html>
