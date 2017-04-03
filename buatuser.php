<!DOCTYPE html>
<html>
<head>
	<title>Input Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="css/sidebar.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <div action="profil.php" id="content">
      <form class = "form-horizontal" method="post" align="center">
	  <table>
        <tr>
		<td>Username :</td>
		<td><input type="text" name="username"><br></td>
		</tr>
		<tr>
		<td>Password (1):</td>
		<td><input type="text" name="pass1"><br></td>
		</tr>
		<td>Password (2):</td>
		<td><input type="text" name="pass2"><br></td>
		
		<tr>
		<td>Nama Depan :</td>
		<td><input type="text" name="namadepan"><br></td>
		</tr>
		<tr>
		<td>Nama Belakang:</td>
		<td><input type="text" name="namabelakang"><br></td>
		</tr>
		<td>Email :</td>
		<td><input type="text" name="email"><br></td>
		</tr>
		
		<tr><td colspan="3" align="center">
		<input type="submit" name="submit" value="Buat User baru">
	    </td></tr>	
		</table>
      </form>
  </div>
</body>
</html>

<?php 
	include("koneksi.php");
	if (isset($_POST['submit'])){
		$user=$_POST['username'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		$namadepan=$_POST['namadepan'];
		$namabelakang=$_POST['namabelakang'];
		$email=$_POST['email'];
		setcookie("depan",$namadepan);
		setcookie("belakang",$namabelakang);
		setcookie("email",$email);
		$pass=md5($_POST['pass1']);
		$query="insert into user values('$user','$pass','$namadepan','$namabelakang','$email')";
		$sql=mysqli_query($koneksi,$query);
		if($pass1 != $pass2){
			echo "<script type='text/javascript'> alert('Password 1 dan Password 2 Berbeda !');</script>";
			
		}else{
			if($sql==true){
				header('location:index.php');
				echo "<script type='text/javascript'> alert('Data Berhasil Ditambahkan !');</script>";
				
			}
		}
	}
?>
