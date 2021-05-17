<?php

    include('../database/dbcon.php');
    session_start();

    if(!isset($_POST['username']) && !isset($_POST['password']))
        {
            echo "<script tyep='text/javascript'>
            alert('Unauthorised Acces!!, Login For Authentication First')
            window.location='./login.php';
            </script>";
        }
    else
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            $query=mysqli_query($con,"SELECT * FROM `register` WHERE `username`='$username'");
            
            $result=mysqli_fetch_assoc($query);
            
            
                $hashedpassfromDB=$result['password'];
                $role=$result['role'];
            
                // echo $hashedpassfromDB;
                if(password_verify($password,$hashedpassfromDB) && $role=="Teacher")
                    {
                        
                        $_SESSION['user']=$username;
                        
                        echo "<script type='text/javascript'> window.location='../admin/postassignment.php'</script>";
                    }
                elseif(password_verify($password,$hashedpassfromDB) && $role=="Parent"){
                    
                    $_SESSION['user']=$username;
                    
                    echo "<script type='text/javascript'> window.location='../admin/basic_table.html'</script>";
                }
                elseif(password_verify($password,$hashedpassfromDB) && $role=="Student"){
                    
                    $_SESSION['user']=$username;
                    
                    echo "<script type='text/javascript'> window.location='../admin/chart-chartjs.html'</script>";
                }
                else
                    {
                        echo "<script type='text/javascript'> alert('Wrong Password and Username!')</script>";
                        echo "wadzoswa pano";
                        // echo "<script type='text/javascript'> window.location='./rolelogin.php'</script>";
                    }




        }









?>

