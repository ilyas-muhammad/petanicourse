<html>
<head>
	<title>Contact us PetaniWeb</title>
</head>
<body>
 
	<form action="/request/submit" method="post">
		<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
      
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
        No Telepon :
        <input type="text" name="phone"> <br />
        
		<input type="submit" value="Simpan">
	</form>
 
</body>
</html>