<!DOCTYPE html>
<html>
<head>
  <title>User List</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
  <h1>User List</h1>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
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

      $sql = "SELECT id, name, email FROM users";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td><a href='user.php?id=" . $row["id"] . "'>" . $row["name"] . "</a></td>";
          echo "<td>" . $row["email"] . "</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='2'>0 results</td></tr>";
      }
      $conn->close();
      ?>
    </tbody>
  </table>
</div>
</body>
</html>
