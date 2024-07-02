<?php
session_start();
    include("connection.php");

    if($_SERVER['REQUEST_METHOD']== "POST"){ //Data validation with php############
        $user_reg= $_POST['reg_num'];
        $password= $_POST['password'];

        if(!empty($user_reg)){
            $query="SELECT * FROM alfhainfo WHERE reg_num= '$user_reg' limit 1";

            $result= mysqli_query($connection, $query);

             if($result){
                if($result && mysqli_num_rows($result)>=1){
                    $user_info= mysqli_fetch_assoc($result);
                    
                    if($user_info['password']===$password){

                        $_SESSION['user_reg']= $user_reg;
                        header("location: master.php");
                        die;
                    }

                    
                  }
                }
            }
            echo("Wrong login details");
           
        }
        
?>

<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="login.css">
        <title>Login to alfha schools</title>

    </head>
    <body><!--Body-->
        <div class="main"><!--Start main div-->
            <div class="midcontainer">
    
                <div class="schlname">
                    <h1 class="AlphaSchl">Alfha School of Music</h1>
                </div>
                
                <div class="StdInfo">
                    <form method="post"><!--Start form-->
                        <div class="regnum">
                            <label>
                                <div>
                                    Reg number
                                </div>
                                <div>
                                    <input id="regnumber" type="text" name="reg_num" placeholder="" required>
                                </div>
                            </label>
                        </div><!--end reg num-->
        
                        <div class="password">
                            <label>
                                <div>
                                    password
                                </div>
                                <div>
                                    <input id="security" name="password" type="password" placeholder="" required>
                                </div>
                            </label>    
                        </div><!-- end password-->
                        <div class="button">
                            <input type="submit" value="Login" class="btn">
                            <button type="reset" class="btn">Reset</button>
                        </div><!--End button-->
                        <div class="button">
                            <div class="crt_acc">
                                <a href="account.php">Create account</a>
                            </div>
                        </div>

                        <div>

                        </div>
                    </form><!--End Start form-->  
                </div><!--End stdInfo-->
    
            </div><!--end midcontainer-->
        </div><!--end main div-->
    </body><!--end body-->
    
</html><!--end html-->
