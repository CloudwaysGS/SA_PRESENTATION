
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
    
<div class="form-structor">
	<div class="signup">
		<div class="form-holder">
			<input type="text" class="input" placeholder="Name" /><br><br>
			
			<input type="password" class="input" placeholder="Password" /><br><br>
		</div>
		<button class="submit-btn">Sign up</button>
	</div>
	<div class="login slide-up">
		<div class="center">
			
			
		</div>
	</div>
</div>
</body>
</html>
<!-- 
<?php
// require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
if(isset($_SESSION[KEY_ERRORS])){
	$errors = $_SESSION[KEY_ERRORS];
	unset($_SESSION[KEY_ERRORS]);
}

?>
		
		<?php
// require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."header.inc.html.php");
if(isset($_SESSION[KEY_ERRORS])){
$errors = $_SESSION[KEY_ERRORS];
unset($_SESSION[KEY_ERRORS]);
}

?>



<center>
<div id="container">


<h6>Login Form</h6>



<form action="http://localhost/sonatel/SA_PRESENTATION/quizz_mvc/public/" method="POST">

<input type="hidden" name="controller" value="securite" >
<input type="hidden" name="action" value="connexion">

<?php
if(isset($errors['connexion'])):
?>
<p style="color:red "><?=$errors['connexion'];?></p>
<?php endif?>

<input type="text" name="login" id="login" placeholder="Login"><br><br>



<?php
if(isset($errors['login'])):
?>
<p style="color:red "><?=$errors['login'];?></p>
<?php endif?>

<input type="text" name="password" id="password" placeholder="Password" ><br><br>


<?php
if(isset($errors['password'])):
?>
<p style="color:red "><?=$errors['password'];?></p>
<?php endif?>

<div class="bout">
<button class="btn1">Connexion</button>
<button class="btn2">S'inscrire pour connecter</button>
</div>

</form>
</div>

</center>


<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>





</div>
	<?php
	require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footer.inc.html.php");
?>

 -->