<?php
$connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($connection,'contact_us')

            if(isset($_POST['ok'])){
                include_once 'function.php';
    $first_name = $_POST['first_name'];
 
 $query = "SELECT * FROM `contact_us` WHERE first_name=$first_name'"; 
 $query_run = mysqli_query($connection,$query);


 while($row = mysqli_fetch_array($query_run))

 {
    ?>

       <tr>
              <td> <?php echo $row['first_name']; ?></td>;
              <td> <?php echo $row['last_name']; ?></td>;
              <td> <?php echo $row['email']; ?></td>;
              <td> <?php echo $row['phone']; ?></td>;
              <td> <?php echo $row['message']; ?></td>;
              <td> <?php echo $row['datetime']; ?></td>;
              <td> <?php echo $row['status']; ?></td>;
             
            </tr>
            <?php
        }
        }
        ?>
