<!DOCTYPE html>
<html>
<head>
    <title>CSC 309 DB Class</title>
</head>
<body>
    <h2>Registration Form</h2>

    <!-- Select all users and display in a Table -->
    <table border="1">
        <thead>
          <tr>
            <th>SN</th>
            <th>FIRSTNAME</th>
            <th>LASTNAME</th>
            <th>EMAIL</th>
            <th>GENDER</th>
            <th>GATE OF BIRTH</th>
            
          </tr>
            <!-- Complete the table header row -->
        </thead>

        <tbody>
            <?php
                $server = 'localhost'; // 127.0.0.1
                $username = 'root';
                $password = '';
                $db = 'csc309';
            
                // Open a new connection
                $con = new mysqli($server, $username, $password, $db);
            
                // Check connection
                if ($con->connect_error){
                    die("Connection failed: " . $con->connect_error);
                }
            
                // Create a Table
                $sql = "SELECT* FROM users" ;
                
            
                $result = $con->query($sql);
                if($result->num_rows>0){ 
                   while($row=$result->fetch_assoc()){ 
                         echo "<tr>";
                         echo "<th>".$row['id']."</th>";
                         echo "<th>".$row[' firstname']."</th>";
                         echo "<th>".$row['lastname']."</th>";
                         echo "<th>".$row[' email']."</th>";
                         echo "<th>".$row[' gender']."</th>";
                         echo "<th>".$row['date_of_birth ']."</th>";
                         echo "</tr>";
                   }

                  }
                // Close connection
                $con->close();
            
                // Complete code to:
                // Connect to the DB
                // Select all records from users table
                // Display all the selected records
            ?>
        </tbody>
    </table>
</body>
</html>
