<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transfer history</title>
    <!-- <link rel="stylesheet" href="table.css"> -->
 <link rel="stylesheet" href="css/navbar.css">
</head>
<style>

button{
        transition: 1.5s;
        background: #3598db;
        color : white;
      }
      button:hover{
        background-color:#5cb85c;
        color: white;
      }
      h2{
          text-align: center;
          font-size: 39px;
      }
      .tab{
          margin-left: auto;
          margin-right: auto;
      }
      body{
          background-color: wheat;
      }
    
</style>
<body>
    <?php
//  include 'header.php';
?>

        <div>

        <h2>Transfer history</h2>
        <br>
           <div>
<table border="2px" class="tab">
    <thead>
   <tr>
       <th>S No</th>
       <th>Sender</th>
       <th>Reciver</th>
       <th>Balance</th>
       <th>Date & Time</th>
   </tr>
    </thead>
   <tbody>
    <?php

        include 'config.php';

        $sql ="select * from transaction";

        $query =mysqli_query($conn, $sql);

        while($rows = mysqli_fetch_assoc($query))
        {
    ?>

        <tr>
        <td class="py-2"><?php echo $rows['sno']; ?></td>
        <td class="py-2"><?php echo $rows['sender']; ?></td>
        <td class="py-2"><?php echo $rows['receiver']; ?></td>
        <td class="py-2"><?php echo $rows['balance']; ?> </td>
        <td class="py-2"><?php echo $rows['datetime']; ?> </td>
            
    <?php
        }

    ?>
    </tbody>
</table>
           </div>

 
</body>
</html>