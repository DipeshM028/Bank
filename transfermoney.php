<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/table.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>

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
          font-size: 30px;
      }
      .tab{
          margin-left: auto;
          margin-right: auto;
      }
      body{
          background-color: rgb(165, 201, 174);
      }
     
</style>
<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
//  include 'header.php';
?>
    <div>

         <h2>Transfer Money</h2>
         <br>
            <div>
<table border="2px" class="tab">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>email</th>
        <th>Balance</th>
        <th>Operation</th>
    </tr>
    </thead>
    <tbody>
        <?php 
            while($rows=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td class="py-2"><?php echo $rows['id'] ?></td>
                <td class="py-2"><?php echo $rows['name']?></td>
                <td class="py-2"><?php echo $rows['email']?></td>
                <td class="py-2"><?php echo $rows['balance']?></td>
                <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td>
            </tr>
        <?php
            }
        ?>
    
                </tbody>
</table>

            </div>

    </div>
</body>
</html>