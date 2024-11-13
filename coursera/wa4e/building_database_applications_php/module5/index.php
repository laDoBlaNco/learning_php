<?php
require_once 'pdo.php';  // no other model on this one
session_start();
?>

<html>
    <head>
        <title>The CRUD App</title>
    </head>
    <body>
        <?php
            if(isset($_SESSION['error'])){
                echo '<p style="color:red">' . $_SESSION['error']. "</p>\n";
                unset($_SESSION['error']);
            }
            if(isset($_SESSION['success'])){
                echo '<p style="color:green">' . $_SESSION['success']. "</p>\n";
                unset($_SESSION['success']);
            }

            echo '<table border="1">' . "\n";
            // this next stuff should really be in the  model, but here in
            // snuck in the view
            $stmt = $pdo->query('select name,email,password,user_id from users');
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                echo "<tr><td>";
                echo htmlentities($row['name']);
                echo "</td><td>";
                echo htmlentities($row['email']);
                echo "</td><td>";
                echo htmlentities($row['password']);
                echo "</td><td>";
                // NOTE: HERE IS WHERE WE ENSURE OUR GET REQUEST WITH user_id for
                // the other pages to check $_GET['user_id']
                echo '<a href="edit.php?user_id='.$row['user_id'].'">Edit</a> /';
                echo '<a href="delete.php?user_id='.$row['user_id'].'">Delete</a>';
                echo "\n</form>\n";
                echo "</td></tr>\n";
            }

        ?>
        </table>
        <br>
        <a href="add.php">Add New</a>
    </body>
</html>