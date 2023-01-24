<?php
    session_start();
    require "koneksi.php";

//cek cookie
 	if (isset($_COOKIE ['id']) && isset($_COOKIE ['sese']) ){
 		$koko = $_COOKIE ['id'];
 		$sese = $_COOKIE ['sese'];
 		
 //ambil username berdasarkan id
 	$result = mysqli_query($conn, "SELECT username FROM user WHERE id=$id" );
 	$row = mysqli_fetch_assoc($result);

 //cek cookie dan username
 	if ($sese === hash('sha256', $row['username'])  ){
 		$_SESSION['login2'] = true;
 	}

}

    if (isset($_SESSION ["login2"])) {
    	header("Location: index.html");
    	exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <form method="post">
        <label>Username : </label>
        <input type="text" name="fusername">
        <br>
        <br>
        <label>Password : </label>
        <input type="password" name="fpassword">
        <br>
        <br>
        <input type="checkbox" name="remember" id="remember">
        <label for= "remember">Remember me</label>
        <br>
        <br>
        <button type = "submit" name="fmasuk">Login</button>

    </form>

    <?php
        if (isset ($_POST['fmasuk'])){
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];

            $qry = mysqli_query($koneksi, "SELECT * FROM tab_login WHERE
                username ='$username' AND password = md5('$password')");
            $cek = mysqli_num_rows($qry);
            if ($cek==1){
            	//set session
                $_SESSION['login2']=true;

                //cek remember me
                if (isset($_POST ['remember']) ){

                	//buat cookie
                	setcookie('id', $row['id'], time() +60);
                	setcookie('sese', hash ('sha256', $row ['username'] ), time() + 60 ); //hast adalah teknik mengacak 
                }

                header ("location:index.html");
                exit;
            }
            else{
                echo "Username dan password Anda salah !";
            }
        }
    ?>

</body>
</html>