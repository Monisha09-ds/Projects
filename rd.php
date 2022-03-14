<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link>

    </head>

<body>
<div id="logo">
    <h1><font color="white">My Project</font></h1>
</div>
<div id="cl"><input type="button" name="btn" id="btn"></div>

<div id="nav">
    <ul id="a1">
        <li><a href="ahome.php">Home</a></li>
        <li><a href="room.php">Room Update</a></li>
        <li><a href="booking.php">Booking</a></a></li>
        <li><a href="rd.php">Room Details</a></li>
        <li><a href="ahome.php">Help</a></li>
    </ul>
</div>
<div id="banner"><br><br><br><br><br><br><br>
    <h1 style="color:blue; text-align:centre;">Welcome Admin</h1>
    <div style="background-color:rgba (255,255,255,0.6);">
     <table>
         <tr>
             <th width="25%" height="50px">Room No</th>
             <th width="25%" height="50px">Room Type</th>
             <th width="25%" height="50px">Price</th>
             <th width="25%" height="50px">Status</th>
             <th width="25%" height="50px">Option</th>
         </tr>
         <?php
                        $q1="select * from room";
                        $run=mysqli_query($a,$q1);
                        while($row=mysqli_fetch_array($run))
                        {
                            $rno=$row['rno'];
                            $type=$row['type'];
                            $price=$row['price'];
                            $status=$row['status'];
                           
                               
                        }
                        ?>
         <tr>
             <td width="25%" height="50px"><centre><?php echo $rno;?></centre></td>
             <td width="25%" height="50px"><centre><?php echo $type;?></centre></td>
             <td width="25%" height="50px"><centre><?php echo $price;?></centre></td>
             <td width="25%" height="50px"><centre><?php echo $status;?></centre></td>
             <td><a style="color:blue"href="co.php?rno<?php echo $rno ?>">Check out</a></td>
         </tr>

     </table>
    </div>
</div>
</body>
</html>