<html>
<head>
	<title> Login </title>
</head>
<body>
<center><h1> PENGINPUTAN BIODATA </h1></center>
<form method="POST" action="menampilkanbiodata.php">
	<table width="400" align="center" cellpadding="2" cellspacing="2">
		<tr>
			<td width="130"> Nama </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td width="130"> NPM </td>
			<td><input type="text" name="npm"></td>
		</tr>
		<tr>
			<td width="130"> Jurusan </td>
			<td><input type="text" name="jurusan"></td>
		</tr>
		<tr>
			<td width="130"> Email </td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td width="130">No. Telp</td>
			<td><input type="text" name="telp"></td>
		</tr>
		<tr>
			<td width="130"> Alamat </td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="btnLogin" value="Login">
				<input type="reset" name="reset" value="Reset">
			</td>
		</tr>
	</table>
</form>
</body>
</html>