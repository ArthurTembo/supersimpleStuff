<?php
session_start();
    include("connection.php");
    include("insert_data.php");


    $user_reg = $_SESSION['user_reg'];

    $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
    mysqli_query($connection, $query);

    $result= mysqli_query($connection, $query);
    if($result){
        if($result && mysqli_num_rows($result)>=1){
            $user_info= mysqli_fetch_assoc($result);

            if(!empty($user_info['first_name']) && !empty($user_info['last_name']) && !empty($user_info['program']) && !empty($user_info['reg_num'])){//Start main if
            
            $first_name= $user_info['first_name'];
            $last_name= $user_info['last_name'];
            $user_reg= $user_info['reg_num'];
            $program= $user_info['program'];
            $num = 0;
            $numb = 0;

            if(isset($_POST['MIO'])){

                $query="SELECT * FROM musical_instru_org WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                    if($result && mysqli_num_rows($result)>=1){
                        $num++;
                    }

                    else{
                        $query="INSERT INTO musical_instru_org( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                        mysqli_query($connection, $query);
            
                        $numb++;
                        }
                }
              
            }

            if(isset($_POST['ITFL'])){

                $query="SELECT * FROM intro_fl WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                if($result){
                    if($result && mysqli_num_rows($result)>=1){
                        $num++;
                    }

                    else{
                        $query="INSERT INTO intro_fl( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                        mysqli_query($connection, $query);
            
                        $numb++;
                        }
                }
            }

            if(isset($_POST['ITAA'])){

                $query="SELECT * FROM intro_aa WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                        if($result && mysqli_num_rows($result)>=1){
                            $num++;
                        }

                        else{
                            $query="INSERT INTO intro_aa( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                            mysqli_query($connection, $query);
                
                            $numb++;
                            }
                    }
            }

            if(isset($_POST['VAM'])){

                $query="SELECT * FROM vocal_melodies WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                        if($result && mysqli_num_rows($result)>=1){
                            $num++;
                        }

                        else{
                            $query="INSERT INTO vocal_melodies( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                            mysqli_query($connection, $query);
                
                            $numb++;
                            }
                    }
            }

            if(isset($_POST['PCM'])){

                $query="SELECT * FROM pc_maintenance WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                        if($result && mysqli_num_rows($result)>=1){
                            $num++;
                        }

                        else{
                            $query="INSERT INTO pc_maintenance( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                            mysqli_query($connection, $query);
                
                            $numb++;
                            }
                    }
            }

            if(isset($_POST['CCS'])){

                $query="SELECT * FROM comm_skills WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                        if($result && mysqli_num_rows($result)>=1){
                            $num++;
                        }

                        else{
                            $query="INSERT INTO comm_skills( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                            mysqli_query($connection, $query);
                
                            $numb++;
                            }
                    }
            }

            if(isset($_POST['CHS'])){

                $query="SELECT * FROM customer_handling WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                        if($result && mysqli_num_rows($result)>=1){
                            $num++;
                        }

                        else{
                            $query="INSERT INTO customer_handling( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                            mysqli_query($connection, $query);
                
                            $numb++;
                            }
                    }
            }

            if(isset($_POST['BMS'])){

                $query="SELECT * FROM business_management WHERE reg_num = '$user_reg' limit 1";
                mysqli_query($connection, $query);
                $result= mysqli_query($connection, $query);
                    if($result){
                        if($result && mysqli_num_rows($result)>=1){
                            $num++;
                        }

                        else{
                            $query="INSERT INTO business_management( reg_num, first_name, last_name, program) VALUES('$user_reg', '$first_name', '$last_name', '$program')";
                            mysqli_query($connection, $query);

                            $numb++;
                            }
                    }
            }
            if($num>0 && $numb == 0){
                echo("Courses already registered");
            }
            if($numb>0){
                echo("New courses registered");
            }

        }//End main if

        else{
            echo("Enter personal details first plizz!!!");
        }

            }
            
        }

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

                    <span class="main_container2"><!--############Student details main container-->

                        <div class="head">

                            <?php //setting reg number on the page
                            if(isset($_SESSION['user_reg'])){
                                $user_reg = $_SESSION['user_reg'];
                                echo("$user_reg");
                            }
                            ?>
                            
                        </div>

                        <div>

                        </div>

                        <div>
                            <h3 class="h2">Course registering</h3>
                        </div>
                        
                        <form method="post" onsubmit= "return form()"><!--Start form ############################-->
                            <div >
                                <table border="1" width="650" class="table_field">
                                        <tr>
                                        <td height="30" width="35"><b>#</b></td>
                                        <td height="30" width="45"> <b>Tick</b> </td>
                                        <td height="30" width="150"> <b>Course code</b> </td>
                                        <td height="30"> <b>Course title</b> </td>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>1</b></td>
                                        <td height="30"><input type="checkbox" id="row1" name="MIO" value="BMSK2301 Musical instruments organisation" method="post"></td>
                                        <td height="30"><label for="row1">BMSK2301 </td></label>
                                        <td height="30"><label for="row1">Musical instruments organisation </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>2</b></td>
                                        <td height="30"><input type="checkbox" id="row2" name="ITFL" value="BMSK2302 Introduction to fruity loops" method="post"></td>
                                        <td height="30"><label for="row2">BMSK2302 </td></label>
                                        <td height="30"><label for="row2">Introduction to fruity loops </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>3</b></td>
                                        <td height="30"><input type="checkbox" id="row3" value="BMSK2303 Introduction to adobe audition" name="ITAA" method="post"></td>
                                        <td height="30"><label for="row3">BMSK2303 </td></label>
                                        <td height="30"><label for="row3">Introduction to adobe audition </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>4</b></td>
                                        <td height="30"><input type="checkbox" id="row4" value="BMSK2304 Vocals and melodies" name="VAM" method="post"></td>
                                        <td height="30"><label for="row4">BMSK2304 </td></label>
                                        <td height="30"><label for="row4">Vocals and melodies </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>5</b></td>
                                        <td height="30"><input type="checkbox" id="row5" name="PCM" value="CMAN2301 PC maintainance and management" method="post"></td>
                                        <td height="30"><label for="row5">CMAN2301</td></label>
                                        <td height="30"><label for="row5">PC maintainance and management </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>6</b></td>
                                        <td height="30"><input type="checkbox" id="row6" name="CCS" name="COMM2301 Communication skills" method="post"></td>
                                        <td height="30"><label for="row6">COMM2301 </td></label>
                                        <td height="30"><label for="row6">Communication skills </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>7</b></td>
                                        <td height="30"><input type="checkbox" id="row7" name="CHS" value="ENTPR2301 Customer handling skills II" method="post"></td>
                                        <td height="30"><label for="row7">ENTPR2301 </td></label>
                                        <td height="30"><label for="row7">Customer handling skills II </td></label>
                                        </tr>

                                        <tr>
                                        <td height="30"><b>8</b></td>
                                        <td height="30"><input type="checkbox" id="row8" name="BMS" value="ENTPR2302 Business management skills II" method="post"></td>
                                        <td height="30"><label for="row8">ENTPR2302 </td></label>
                                        <td height="30"><label for="row8">Business management skills II</td></label>
                                        </tr>

                                </table>
                            </div>     

                        <div class="button">
                            <input type="submit" value="Finish" class="btn2">
                            <input type="reset" value="Reset" class="btn2">
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