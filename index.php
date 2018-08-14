<?php 
require_once("Functions.php");
require_once("redirect.php");

$errors = array();
$message = "";

if(isset($_POST['submit']))
{
    $username = trim($_POST["Username"]);
    $password = trim($_POST["Password"]);

    if(!has_username($username))
    {
        $errors['username'] = "Please enter your full name.";
    }

    if(!has_password($password))
    {
        $errors['password'] = "Please enter the password";
    }

    if(!has_max_length($password))
    {
        $errors['max-length'] = "Password length exceeded";
    }

    if(!has_min_length($password))
    {
        $errors['min-length'] = "Password length is less.";
    }

    if(!text_field($_POST['Skills']))
    {
        $errors['Skills'] = "Please enter your skills.";
    }

    if(empty($errors))
    {
        if($username === "Suyash Awasthi" && $password ==="Secretofme")
        {
            redirect_to("Home.php");
        }
        else
        {
            $message = "Username/Password do not match";
        }
    }
}
else
{
    $username = "";
    $password = "Please Log in";
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-bootstrap/0.5pre/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="container">
<div class="well well-xs">   

    <?php echo $message ?>

    <?php 

        echo has_errors($errors);
    ?>

    <form action="index.php" method="post" id="Block_form">

        <div class="form-group">
        <label for="username">Full Name: </label>
        <input type="text" class="form-control" name="Username" placeholder="Henry Wentworth" required/>
        </div>

        <div class="form-group">
        <label for="password">Password: </label>
        <input type="password" class="form-control" name="Password" required/>
        </div>

        <div class="form-group">
        <label for="Textfield">Write your skills: </label>
        <textarea name="Skills" id="skills" cols="10" rows="5" class="form-control"></textarea>
        </div>

        <div class="form-group">
        <label for="Options">Select Course: </label>
        <select name="Options" id="options" class="form-control">
        <option value="A">A</option>
        <option value="B">B</option>
        </select>
        </div>

        <div class="form-group">
        <input type="submit" name="submit" value="submit">
        </div>
     </form>
   </div>
</div>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
     
</body>
</html>