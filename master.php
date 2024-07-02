<?php
session_start();
    include("connection.php");

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
        <title>Alfha schools personal information</title>
    </head>
    
    <body>
        <div class="personal_info"><!--Start personal info-->
            <div class="Cont1"><!--Start cont1-->
                <span class="LogoCont">
                    <h3>Alfha Schools</h3>
                </span>
                <span class="logout">
                    <a href="logout.php">
                        <button class="Lgout">Logout</button>
                    </a>
                </span>
            </div><!--End cont1-->


            <div class="bottom_cont" ><!--##########start bottom container-->
                <div class="leftcont"><!--###########start left container-->

                <div >
                    <div class="srch">
                        <button type="search" class="searchbtn">Search</button>
                        <input type="search" size="15" class="search">
                    </div>
                </div>

                <form action="master.php">
                    <div>
                        <input type="submit" class="btn_dec" value="Home">
                    </div>
                </form>

                <form action="personal_info.php">
                    <div>
                        <input type="submit" class="btn_dec" value="Personal details">
                    </div>
                </form>  
                
                <form action="course_reg.php">
                    <div>
                        <input type="submit" class="btn_dec" value="Register courses">
                    </div>
                </form>
                
                <form action="students.php">
                    <div>
                        <input type="submit" class="btn_dec" value="Registered students">
                    </div>
                </form>



                </div><!--#########################End left container-->

                <div class="rightcont"><!--################start right container-->
                 
                <span class="main_container"><!--############Student details main container-->
                <form method="post"><!--Start form-->
                    <div class="head">
                        
                        <?php //setting reg number on the page
                        if(isset($_SESSION['user_reg'])){
                            $user_reg = $_SESSION['user_reg'];
                            echo("$user_reg");
                        }
                        ?>

                    </div>



                    <div class="button">
                        <a href="courses.php"><input  type="button" value="Tap to view registered courses" class="btn2"></a>
                    </div>
                </form><!--End form-->
                
        </span><!--##################End student details main container-->

                </div><!--###########################End right container-->

            </div><!--################################End bottom container-->

            <div class="most_bottom"><!--################################Start bottom container-->

            </div><!--################################End most bottom container-->
            
        </div><!--End personal info-->
    </body>
</html>