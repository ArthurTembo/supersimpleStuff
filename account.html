<?php
session_start();
    include("connection.php");

    if(isset($_POST['reg_num'])){
        $user_reg= $_POST['reg_num'];

        $query="SELECT * FROM alfhainfo WHERE reg_num = '$user_reg' limit 1";
        mysqli_query($connection, $query);

        $result= mysqli_query($connection, $query);

        if($result){
            if($result && mysqli_num_rows($result)>=1){
                echo("Account already exists");
            }

            else{

                if($_SERVER['REQUEST_METHOD']== "POST"){
                    $regnumber= $_POST['reg_num'];
                    $password= $_POST['password'];
            
                    if(!empty($regnumber) && !empty($regnumber)){
                        $query="INSERT INTO alfhainfo( reg_num, password) VALUES('$regnumber', '$password')";
                        mysqli_query($connection, $query);
            
                        header("location: login.php");
                        die;
                    }
                }
            }

        }

}

    
?>

<!DOCTYPE html>
<html>
    <head>

                <!--Script-->
                <script>//Script start
                    function reg_form() {
                        var user_name = document.forms["log_form"]["reg_num"].value;
                        var user_conf_password = document.forms["log_form"]["conf_password"].value;
                        var user_password= document.forms["log_form"]["password"].value;
                        var student_name;
            
                        if (user_name != "") {
                            if(user_password != user_conf_password){
                                alert("Confirm password should match with actual password");
                                return false;
                            }
                            else{
                                alert("Passwords have matched, press OK to continue"); 
                            }
                        }
                        else{
                            alert("Enter your reg number pliz");
                            return false;
                        }
                      }
                    </script><!--Script end-->


        <link rel="stylesheet" href="login.css">
        <title>Creating account</title>
    </head>

    <body>
       <div class="main">
        <div class="submain"><!--Start sub main-->
    
                <div class="center">
                    <div class="top"></div>

                    <div class="accountcreate"><!--Start account creation-->
                        <form  name="log_form" onsubmit="return reg_form()" method="post"><!--start form   ####################-->
                            <h2 class="acc">Creating new account</h2><br>
                            <!--Top layer-->
                            <label>
                            <div class="text_fields">
                                Registration number
                            </div>
                            <div>
                                <input class="text_fields" type="text" name="reg_num" size="25" required>
                            </div>
                            </label>


                            <!--second layer-->
                            <label>
                            <div class="text_fields">
                                Password
                            </div>
                            <div>
                                <input class="text_fields" type="password" name="password" size="25" required>
                            </div>
                            </label>
                            <!--third layer-->


                            <label>
                                <div class="text_fields">
                                    Confirm password                             
                            </div>
                            <div>
                                <input class="text_fields" type="password" name="conf_password" size="25" required>
                            </div>
                            </label>
                            <div>
                                <div class="button">
                                    <a href="login.php">Already have account</a>
                                </div>
                            </div>
                            <div class="button">
                                    <button class="btn2" type="submit" name="logBtn">Finish</button> 
                                    <button class="btn2" type="reset">Reset</button>
                            </div>
                        </form>
                    </div><!--End account creation-->
                    
                </div><!--End center-->
        </div><!--end sub main-->
       </div><!--End main-->
    </body>
</html>
