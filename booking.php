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
        <div id="full">
            <div style>
                <div id="header">
                    <div id="logo">
                        <h1><font color="white">My Project</font></h1>
                    </div>
                    <div id="cl"><input type="button" name ="btn" id="btn"></div>
                    <div id="nav">
                        <ul id="a1">
                            <li><a href="ahome.php">Home</a></li>
                            <li><a href="room.php">Room Update</a></li>
                            <li><a href="booking.php">Booking</a></a></li>
                            <li><a href="rd.php">Room Details</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
                <div id="banner"><br><br><br><br><br><br><br>
                    <h1 style="color:blue; text-align:centre;">Welcome Admin</h1>
                    <div style="background-color:rgba (255,255,255,0.6);">
                    <table>
                        <tr>
                            <th width="25%" height="50px">Name</th>
                            <th width="25%" height="50px">Id No</th>
                            <th width="25%" height="50px">City</th>
                            <th width="25%" height="50px">District</th>
                            <th width="25%" height="50px">State</th>
                            <th width="25%" height="50px">Check In Dates</th>
                            <th width="25%" height="50px">Check Out Dates</th>
                            <th width="25%" height="50px">Memeber</th>
                            <th width="25%" height="50px">Check </th>
                            <th width="25%" height="50px">Memeber items</th>
                        </tr>
                        <?php
                        $q1="select * from f1";
                        $run=mysqli_query($a,$q1);
                        while($row=mysqli_fetch_array($run))
                        {
                            $name=$row['name'];
                            $idno=$row['idno'];
                            $city=$row['city'];
                            $dis=$row['dis'];
                            $status=$row['state'];
                                $cidate=$row['cidate'];
                                $codate=$row['codate'];
                                $m=$row["m"];
                        
                        ?>
                        <tr>
                            <td width="25%" height="50px"><centre><?php echo $name; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $idno; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $city; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $dis; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $state; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $cidate; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $codate; ?></centre></td>
                            <td width="25%" height="50px"><centre><?php echo $m; ?></centre></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>