<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        font-family: 'Roboto', sans-serif;
    }
    nav a.navbar-brand{
        color: #fff;
        font-size: 30px!important;
        font-weight: 500;
    }
    button a{
        float: right;
        color: #fff;
        font-size: 16px;
        padding: 12px 35px;
        border-radius: 200px;
        display: inline-block;
        border: 0;
        outline: 0;
        box-shadow:none;
        background-image: linear-gradient(135deg, #70F570 10%, #49C628 100%);
    }
    button a:hover{
        box-shadow: 0px 4px 20px 0px #49c628a6;
    }
    h1{
        position: absolute;
        top: 50%;
        left: 50%;
        width: 100%;
        color: midnightblue;
        font-family: 'Libre Caslon Text', serif;
        text-align: center;
        transform: translate(-50%, -50%);
        font-size: 70px;
        font-weight: 600;
    }

    h1:hover{
        color:  hsl(249, 63%, 54%);;
    }
    body {
        background: url(hero-bg.jpg);
        }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#"><img src="logo1.png" alt="logo" width="250" height="70"></a>
    <button type="button" class="btn"><a href="logout-user.php">Logout</a></button>
    </nav>
    <a href="travel.html"><h1>Welcome <?php echo $fetch_info['name'] ?></h1></a>
    
</body>
</html>