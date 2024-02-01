<html>
  <head>
  <title>
    Registered Users
  </title>
    <style>
      table{
        border:solid;
      }
      th{
        border:double;
      }
      td{
        border:double;
      }
      <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      color: #007bff;
      text-align: center;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #007bff;
      color: #fff;
    }

    tr:hover {
      background-color: #f5f5f5;
    }
  </style>
    
  </head>
<body>
  

<?php

$connection = mysqli_connect("localhost", "root", "", "myDatabase");
if (!$connection) {
  die("Database connection failed: " . mysqli_connect_error());
}

// Prepare and execute the SQL query to retrieve the data
$query = "SELECT * FROM regForm";
$result = mysqli_query($connection, $query);

// Display the retrieved data in a table
echo '<table>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
        
          <th>Password</th>
          <th> Email Address</th>
          <th>Mobile Number</th>
          <th>Bithdate </th>
          <th>Gender</th>
          <th>Physical Address</th>
        </tr>';

while ($row = mysqli_fetch_assoc($result)) {
  echo '<tr>
          <td>' . $row['firstname'] . '</td>
          <td>' . $row['lastname'] . '</td>
         
          <td>' . $row['passcode'] . '</td>
          <td>' . $row['email'] . '</td>
          <td>' . $row['mobile'] . '</td>
          <td>' . $row['birthdate'] . '</td>
          <td>' . $row['gender'] . '</td>
          <td>' . $row['p_address'] . '</td>
        </tr>';
}

echo '</table>';

// Close the database connection
mysqli_close($connection);
?>