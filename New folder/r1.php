<?php
include("connection.php");
echo $r=$_GET['room'];
echo $ci=$_GET['ci'];
echo $co=$_GET['co'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home (Hotel Management)</title>
        <link rel=" " type="text/css" href="css/style.css">
        <link href=" " type="img/icon" rel="icon">
    </head>

    <body>
        <div id="full">
            <div id="bg" style="background -image:url('img/bed.jpg')";height=1200px>
            <div id="header">
                <div id="logo">
                    <h1>
                        <font color="white">My Project</font>
                    </h1>
                </div>
                <div id="nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">BOOK MY STAY</a></li>
                        <li><a href="#">Our Hotel</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
            </div>
            <div id="banner">
                <div id="form">
                    <from action="r1.php" method="post">
                        <table style="color:yellow;">
                        <?php
                            $q="select * from room where status='unbooked'";
                            $run=mysqli_query($a,$q);
                            $num=mysqli_num_rows($run);
                            echo $num;
                            if($r<=$num)
                            {
                                

                            }
                        ?>
                        <tr>
                            <td>Status</td>
                            <td><input type="text" name="Status" placeholder="Status" title="Status"></td>
                        </tr>
                        
                    </table>
                    </from>
                </div>
            </div>

            </div>
        </div>
    </body>
</html>