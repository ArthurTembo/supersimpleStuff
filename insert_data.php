<?php
    if(isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['program']) || isset($_POST['birth_date'])){
    $user_reg = $_SESSION['user_reg'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $program = $_POST['program'];
    $birth_date = $_POST['birth_date'];

    //without this the data base will misbehave######################
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
                    }
                                        
                }
        }
    //end  misbehaviours

        //#################################### Start Updating info in the course registers

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

                $query="SELECT * FROM musical_instru_org WHERE reg_num = '$user_reg' limit 1";
                    mysqli_query($connection, $query);
                    $res= mysqli_query($connection, $query);
                        if($res){
                            if($res && mysqli_num_rows($res)>=1){
                                $user_data= mysqli_fetch_assoc($res);
                                $name_first= $user_data['first_name'];
                                $name_last= $user_data['last_name'];
                                $prog= $user_data['program'];

                                if($first_name != $name_first){
                                   
                                    $query="UPDATE musical_instru_org SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                    mysqli_query($connection, $query);

                                }

                                if($last_name != $name_last){
                                   
                                    $query="UPDATE musical_instru_org SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                    mysqli_query($connection, $query);

                                }

                                if($program != $prog){
                                   
                                    $query="UPDATE musical_instru_org SET program= '$program' WHERE reg_num='$user_reg'";
                                    mysqli_query($connection, $query);

                                }

                            }
                        }

                        $query="SELECT * FROM pc_maintenance WHERE reg_num = '$user_reg' limit 1";
                        mysqli_query($connection, $query);
                        $res= mysqli_query($connection, $query);
                            if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];
    
                                    if($first_name != $name_first){
                                       
                                        $query="UPDATE pc_maintenance SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);
    
                                    }
    
                                    if($last_name != $name_last){
                                       
                                        $query="UPDATE pc_maintenance SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);
    
                                    }

                                    if($program != $prog){
                                       
                                        $query="UPDATE pc_maintenance SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);
    
                                    }
    
                                }
                            }

                            $query="SELECT * FROM vocal_melodies WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $res= mysqli_query($connection, $query);
                                if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];

                                    if($first_name != $name_first){
                                    
                                        $query="UPDATE vocal_melodies SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($last_name != $name_last){
                                    
                                        $query="UPDATE vocal_melodies SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($program != $prog){
                                    
                                        $query="UPDATE vocal_melodies SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                }
                            }
                            
                            $query="SELECT * FROM intro_aa WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $res= mysqli_query($connection, $query);
                                if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];

                                    if($first_name != $name_first){
                                    
                                        $query="UPDATE intro_aa SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($last_name != $name_last){
                                    
                                        $query="UPDATE intro_aa SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($program != $prog){
                                    
                                        $query="UPDATE intro_aa SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }
                                }
                            }

                            $query="SELECT * FROM intro_fl WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $res= mysqli_query($connection, $query);
                                if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];

                                    if($first_name != $name_first){
                                    
                                        $query="UPDATE intro_fl SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($last_name != $name_last){
                                    
                                        $query="UPDATE intro_fl SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($program != $prog){
                                    
                                        $query="UPDATE intro_fl SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                }
                            }

                            $query="SELECT * FROM customer_handling WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $res= mysqli_query($connection, $query);
                                if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];

                                    if($first_name != $name_first){
                                    
                                        $query="UPDATE customer_handling SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($last_name != $name_last){
                                    
                                        $query="UPDATE customer_handling SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($program != $prog){
                                    
                                        $query="UPDATE customer_handling SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                }
                            }

                            $query="SELECT * FROM comm_skills WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $res= mysqli_query($connection, $query);
                                if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];

                                    if($first_name != $name_first){
                                    
                                        $query="UPDATE comm_skills SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($last_name != $name_last){
                                    
                                        $query="UPDATE comm_skills SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($program != $prog){
                                    
                                        $query="UPDATE comm_skills SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }
                                }
                            }

                            $query="SELECT * FROM business_management WHERE reg_num = '$user_reg' limit 1";
                                mysqli_query($connection, $query);
                                $res= mysqli_query($connection, $query);
                                if($res){
                                if($res && mysqli_num_rows($res)>=1){
                                    $user_data= mysqli_fetch_assoc($res);
                                    $name_first= $user_data['first_name'];
                                    $name_last= $user_data['last_name'];
                                    $prog= $user_data['program'];

                                    if($first_name != $name_first){
                                    
                                        $query="UPDATE business_management SET first_name= '$first_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($last_name != $name_last){
                                    
                                        $query="UPDATE business_management SET last_name= '$last_name' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                    if($program != $prog){
                                    
                                        $query="UPDATE business_management SET program= '$program' WHERE reg_num='$user_reg'";
                                        mysqli_query($connection, $query);

                                    }

                                }
                            }
            }
        }
    }
    }

?>