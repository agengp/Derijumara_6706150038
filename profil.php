<!DOCTYPE html>
<?php 
if (isset($_COOKIE['username'])){
	$username=$_COOKIE['username'];
}
if (isset($_COOKIE['pass1'])){
	$pass1=$_COOKIE['pass1'];
}
if (isset($_COOKIE['namadepan'])){
	$namadepan=$_COOKIE['namadepan'];
}
if (isset($_COOKIE['namabelakang'])){
	$namabelakang=$_COOKIE['namabelakang'];
}
if (isset($_COOKIE['email'])){
	$email=$_COOKIE['email'];
}

if (isset($_POST['submit'])){
	setcookie("username","");
	setcookie("pass1","");
	setcookie("namadepan","");
	setcookie("namabelakang","");
	setcookie("email","");
}
?>


<html>
<head>
    <title>SILAPAR</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>
<body>
<div id="art-page-background-middle-texture">
	<div id="art-main">
		<div class="cleared reset-box"></div>
		<div class="art-header">
		</form>
			<div class="art-header-position">
				<div class="art-header-wrapper">
					<div class="cleared reset-box"></div>
						<div class="art-header-inner">
							<div class="art-headerobject"></div>
							
														<div class="art-nav-profil">
			<ul class="art-profil">
				<li role="presentation"><a>Akun</a>
				<ul>
						<li><a href="profil.php">Profil</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="index.php">Logout</a></li>	
					</ul>
				</li>
					</ul>
		</div>
							
								<div class="art-logo">
									<h1 class="art-logo-name">SILAPAR</h1>
									<h2 class="art-logo-text">makan dongggggggggggggggg</h2></div>
										
						</div>
					</div>
				</div>
			
		  
		</div>
	   <div class="cleared reset-box"></div>
		<div class="art-bar art-nav">
		<div class="art-nav-outer">
		<div class="art-nav-wrapper">
		<div class="art-nav-inner">
		<div class="art-nav-center">
			<ul class="art-hmenu">
				<li role="presentation"><a href="home.php">Home</a></li>	
				<li role="presentation"><a href="pengaduan.php">Pengaduan</a></li>
				<li role="presentation"><a href="kebijakan.php">Opini Kebijakan</a></li>
				<li role="presentation"><a href="statistik.php">Statistik</a></li>
				<li role="presentation"><a href="contact.php">Contact</a><li>
				</ul>
			</div>
		
		</div>
		</div>
		</div>
		</div>
			<div class="cleared reset-box"></div>
			<div class="art-box art-sheet">
					<div class="art-box-body art-sheet-body">
					
					<div class="main_content">
					
					<form class="form-horizontal" method="post">
	  <table>
        <tr>
		<td>User name :</td>
		<td><input type="text" name="username" disabled value="<?php echo $username ?>"; ><br></td>
		</tr>
		<tr>
		<td>Password :</td>
		<td><input type="text" name="pass1" disabled value="<?php echo $pass1 ?>"; ><br></td>
		</tr>
		<tr>
		<td>Nama Depan :</td>
		<td><input type="text" name="namadepan" disabled value="<?php echo $namadepan ?>"; ><br></td>
		</tr>
		<tr>
		<td>Nama Belakang:</td>
		<td><input type="text" name="namabelakang" disabled value="<?php echo $namabelakang ?>";><br></td>
		</tr>
		<td>email :</td>
		<td><input type="text" name="email" disabled value="<?php echo $email ?>";><br></td>
		<tr><td colspan="3" align="center">
		
		</table>
      </form>	
						
				</div>			
				<div class="cleared"></div>
						<div class="art-footer">
							<div class="art-footer-body">

										<div class="art-footer-text">
											<p>Copyright &copy;  2017 SILAPAR. All rights reserved.</p>
																		</div>
								<div class="cleared"></div>
							</div>
						</div>
						<div class="cleared"></div>
					</div>
			</div>
			<div class="cleared"></div>
			<p class="art-page-footer">&nbsp;</p>
			<div class="cleared"></div>
	</div>
</div>
</body>
</html>
