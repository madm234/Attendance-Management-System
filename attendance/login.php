<?php   
include('database.php');
$obj =new boat();
$warn ="";

if(isset($_POST['login']))
{
  $username =$obj->safe_str($_POST['username']);
	$password =$obj->safe_str($_POST['pass']);

$res =$obj->selquery('*','admin',['username'=>$username,'password'=>$password],'');

 if($res!=[])
 {
  $_SESSION['QR_USER_LOGIN']=true;
  $_SESSION['USER_ROLE'] =0;
    $obj->redirect('user.php');
 }
 else
 {
   $warn ="Invalid Username or password!"; 
 }
  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>
  <div class="wrapper">
    <header>Login Now!</header>
    <form method="post">
      <div class="field email">
        <div class="input-area">
          <input type="text" placeholder="Email" name="username">
          <i class="icon fas fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" placeholder="Password" name="pass">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>
     
      <input type="submit" value="Login" name="login">
    </form>
    <span style="color: red;"><?php echo $warn ?></span>
    <br>  
    <br>  
  </div>
</body>
</html>