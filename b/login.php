<?php session_start(); /* Starts the session */
/* Check Login form submitted */if(isset($_POST['Submit'])){
/* Define username and associated password array */$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');

/* Check and assign submitted Username and Password to new variable */$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Username and Password existence in defined array */if (isset($logins[$Username]) && $logins[$Username] == $Password){
/* Success: Set session variables and redirect to Protected page  */$_SESSION['UserData']['Username']=$logins[$Username];
header("location:index.php");
exit;
} else {
/*Unsuccessful attempt: Set error message */$msg="<span style='color:red'>Invalid Login Details</span>";
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Form Login</title>
</head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">

.header {
  padding: 15px;
  
  text-align: center;
  background: #292F33;
  color: white;
  font-size: 10px;
}  
  body{

    background-image: url("images/hotelBagus.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;    
    background-size: 100% 100%;
    padding-bottom: 100px;
} 

.contentkotak{
    border-radius: 10px;
    background-color: #343a40;
    margin-top: 20px;
    margin-left: 50px;
    margin-right: 175px;

    padding-top: 10px; 
    padding-bottom: 50px;
    padding-right: 7px;
    padding-left: 5px;
    border: 3px solid #343a40;
    opacity: 80%;


}


td{
  color: white;
}

.tombol-login{
  padding-top: 15px;
}

</style>

<body>

  <div class="header">

    <table align="center">
        <tr>
            <td><img src="images/udinus_logo.png" width="100px"></td>
            <td>  <h1 style="color: white">Lecturer List </h1>
  <p style="color: white">DIAN NUSWANTORO UNIVERSITY</p></td>
        </tr>
    </table>

    

</div>

<br>
<br>
<br>



  <div class="countainer">
    <div class="row">
      <div class="col-sm-6" >
        
        <div class="contentkotak">
          
<!-- 
  <form action="" method="post" name="Login_Form">
    <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">

      <tr>
        <td colspan="2" align="center" valign="top"><h3>Login</h3></td>
      </tr>
      <tr>
        <td></td>
      </tr>
      <tr>
        <td align="right" valign="top">Username</td>
        <td><input name="Username" type="text" class="Input"></td>
      </tr>
      <tr>
        <td align="right">Password</td>
        <td><input name="Password" type="password" class="Input"></td>
      </tr>
      <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
      </tr>
    </table>
  </form>
 -->


<br>
 <form action="" method="post" name="Login_Form" style="margin: 20px; color: white;">
      <?php if(isset($msg)){?>
      <tr>
        <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
      </tr>
      <?php } ?>  
<div class="form-group">
<label for="npp"><strong> Username :</strong></label>
<input type="text" class="form-control" name="Username" type="text" placeholder="Your Username . . . ">
</div>
<div class="form-group">
<label for="nama"><strong>Password :</strong></label>
<input type="password" class="form-control"  name="Password" placeholder="Your Password . . . ">

<div class="tombol-login">

  <button type="submit" class="btn btn-warning" name="Submit" value="Login" name="Submit">Login</button>

</div>      

            
</form>


        </div>

      </div>
      <div class="col-sm-2">

      </div>
      <div class="col-sm-4"></div>
      
    </div>
    
  </div>

</body>
</html>

