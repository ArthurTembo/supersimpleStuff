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
                        <a href="master.php"><input  type="button" value="Tap to hide registered courses" class="btn2"></a>
                    </div>
                </form><!--End form-->
                
                <!--########################View courses start-->
                        <div class="table_field2">
                        <table width="650" class="table_field">
                                        <tr>
                                        <td height="30" width="35"><b></b></td>
                                        <td height="30" width="150"> <b>Course code</b>
                                        </br>

                                        <?php //setting course code
                                        if(isset($_SESSION['user_reg'])){
                                            $num=0;
                                            $user_reg = $_SESSION['user_reg'];

                                            $query="SELECT * FROM musical_instru_org WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("BMSK2301");
                                                }                                           
                                            }

                                            $query="SELECT * FROM intro_fl WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>BMSK2302");
                                                }                                           
                                            }

                                            $query="SELECT * FROM intro_aa WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>BMSK2303");
                                                }                                           
                                            }

                                            $query="SELECT * FROM vocal_melodies WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>BMSK2304");
                                                }                                           
                                            }

                                            $query="SELECT * FROM pc_maintenance WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>CMAN2301");
                                                }                                           
                                            }

                                            $query="SELECT * FROM comm_skills WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>COMM2301");
                                                }                                           
                                            }

                                            $query="SELECT * FROM customer_handling WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>ENTPR2301");
                                                }                                           
                                            }

                                            $query="SELECT * FROM business_management WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                $num++;
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>ENTPR2302");
                                                }                                           
                                            }
                                        }
                                        if($num==0){
                                            echo("No courses registered");
                                        }
                                        ?>
                                                                             
                                        <td height="30" width="45"> <b></b> </td>
                                        <td height="30"> <b>Course title</b>                                       
                                        </br>
                                        <?php //setting course code
                                        if(isset($_SESSION['user_reg'])){
                                            $user_reg = $_SESSION['user_reg'];
                                            $query="SELECT * FROM musical_instru_org WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("Musical instruments organisation");
                                                }                                           
                                            }

                                            $query="SELECT * FROM intro_fl WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>Introduction to fruity loops");
                                                }                                           
                                            }

                                            $query="SELECT * FROM intro_aa WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>Introduction to adobe audition");
                                                }                                           
                                            }

                                            $query="SELECT * FROM vocal_melodies WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);
                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>Vocals and melodies");
                                                }                                           
                                            }

                                            $query="SELECT * FROM pc_maintenance WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);

                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>PC maintainance and management");
                                                }                                           
                                            }

                                            $query="SELECT * FROM comm_skills WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);

                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>Communication skills");
                                                }                                           
                                            }

                                            $query="SELECT * FROM customer_handling WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);

                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>Customer handling skills II");
                                                }                                           
                                            }

                                            $query="SELECT * FROM business_management WHERE reg_num = '$user_reg' limit 1";
                                            mysqli_query($connection, $query);

                                            $result= mysqli_query($connection, $query);
                                            if($result){
                                                if($result && mysqli_num_rows($result)>=1){
                                                    echo("<br>Business management skills II");
                                                }                                           
                                            }
                                        }
                                        ?>

                                        </tr>
                        </table>
                        </div>
                <!--########################View courses End-->
                
        </span><!--##################End student details main container-->
        

                </div><!--###########################End right container-->

            </div><!--################################End bottom container-->

            <div class="most_bottom"><!--################################Start bottom container-->

            </div><!--################################End most bottom container-->
            
        </div><!--End personal info-->
    </body>
</html>