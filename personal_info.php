<!--######################################### Start Master-->
<?php
session_start();
    include("connection.php");
    include("insert_data.php")
    
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">

        <script>//Script start
                    function form() {
                        var outut = "";
                        var output= "<?php //details updated code ##################################################

if(isset($_SESSION['user_reg'])){

    
    if(isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['program']) || isset($_POST['birth_date'])){
    $user_reg = $_SESSION['user_reg'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $program = $_POST['program'];
    $birth_date = $_POST['birth_date'];

    $query="UPDATE alfhainfo SET last_name='$last_name', first_name= '$first_name', program= '$program', birth_date= '$birth_date' WHERE reg_num='$user_reg'";
            mysqli_query($connection, $query);
    
    $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
            mysqli_query($connection, $query);

            $result= mysqli_query($connection, $query);
            if($result){
                if($result && mysqli_num_rows($result)>=1){
                    $user_info= mysqli_fetch_assoc($result);
                    
                    if(!empty($user_info['first_name']) &&  !empty($user_info['program']) && !empty($user_info['last_name']) && !empty($user_info['birth_date']) ){
                        $_SESSION['user_reg']= $user_info['reg_num'];
                        echo ("Personal details updated!!!");
                    }
                    
                }
        }


}
}
//end details updated code######################################
?>";
                        if(output!= ""){
                            alert("Personal details updated");
                        }
                        else{
                            alert("Personal details updated");
                        }
                      }
                    </script><!--Script end-->
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
                <form method="post" onsubmit="return form()"><!--Start form-->
                    <div class="head">
                        
                        <?php //setting reg number on the page
                        if(isset($_SESSION['user_reg'])){
                            $user_reg = $_SESSION['user_reg'];
                            echo("$user_reg");
                        }
                        ?>
                    </div>
                    <div>
                        <h3 class="h2">Set personal details</h3>
                    </div>
  

                    <div class="text_field2">
                        <div>
                            <label for="last_name">Last name</label>
                        </div>
                        <div>
                            <input type="text" id="last_name" name="last_name" size="35" value="<?php
                            if(isset($_SESSION['user_reg'])){
                                $user_reg = $_SESSION['user_reg'];

                                $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $result= mysqli_query($connection, $query);
                                if($result){
                                    if($result && mysqli_num_rows($result)>=1){
                                        $user_info= mysqli_fetch_assoc($result);
                                        $last_name= $user_info['last_name'];
                                        echo("$last_name");
                                    }

                                }
                            }
                            ?>"required>
                        </div>
                    </div>    

                    <div class="text_field2">
                        <div>
                            <label for="first_name">First name</label>
                        </div>
                        <div>
                            <input type="text" id="first_name" name="first_name" size="35" value="<?php
                            if(isset($_SESSION['user_reg'])){
                                $user_reg = $_SESSION['user_reg'];

                                $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $result= mysqli_query($connection, $query);
                                if($result){
                                    if($result && mysqli_num_rows($result)>=1){
                                        $user_info= mysqli_fetch_assoc($result);
                                        $first_name= $user_info['first_name'];
                                        echo("$first_name");
                                    }

                                }
                            }
                            ?>"required>
                        </div>
                    </div>



                    <div class="text_field2">
                        <div>
                            <label for="birth_date">Date of birth</label>
                        </div>
                        <div>
                            <input type="date" id="birth_date" name="birth_date" size="40" value="<?php
                            if(isset($_SESSION['user_reg'])){
                                $user_reg = $_SESSION['user_reg'];

                                $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $result= mysqli_query($connection, $query);
                                if($result){
                                    if($result && mysqli_num_rows($result)>=1){
                                        $user_info= mysqli_fetch_assoc($result);
                                        $birth_date= $user_info['birth_date'];
                                        echo("$birth_date");
                                    }

                                }
                            }
                            ?>" required>
                        </div>
                    </div>   

                    <div class="text_field2">
                        <div>
                            <label for="program">Program of study</label>
                        </div>
                        <div>
                            <input type="text" id="program" name="program" size="35" value="<?php
                            if(isset($_SESSION['user_reg'])){
                                $user_reg = $_SESSION['user_reg'];

                                $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $result= mysqli_query($connection, $query);
                                if($result){
                                    if($result && mysqli_num_rows($result)>=1){
                                        $user_info= mysqli_fetch_assoc($result);
                                        $program= $user_info['program'];
                                        echo("$program");
                                    }

                                }
                            }
                            ?>"required>
                        </div>
                    </div>     


                    <div class="button">
                        <input type="submit" value="Save" class="btn2">
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
<!--###########################################################End Master-->