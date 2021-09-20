<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="/css/table.css">
   
    <title>View Customer</title>
</head>
<style>
    .back{
         background-image: url("images/net.jpg"); 
        background-repeat: no-repeat; 
         background-size: cover;    
       
    }
    h2{
        text-align: center;
        font-size: 30px;
        
    }
    .tab{
        margin-left: auto;
        margin-right: 643px;
    }
    
</style >

 <body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php
//   include 'header.php';
?>
   <div class="back">
    <div class="container">
       <h2>View Customer</h2>
     <br>
     
     
     <div >
         <table border="2px" class="tab">
             <thead>
             <tr >
                 <th>Id</th>
                 <th>Name</th>
                 <th>E-mail</th>
                 <th>Balance</th>
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
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
         </table>
     </div>
        </div>
     
    </div>
</body>
</html>