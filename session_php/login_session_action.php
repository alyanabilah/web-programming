<?php
session_start();
if (isset ($_POST['submit'])) {
$namaFile = fopen('user_session.txt', 'r');
$success=false;
//periksa login
while(!feof($namaFile)){
    $line = fgets ($namaFile );
    $parts = explode('|', $line);
    if ((isset($parts[0])) && (isset($parts[1]))&& (isset($parts[2]))){
    } if(trim($parts[0]) == $_POST['user'] && trim($parts[1]) == $_POST['pass'] && trim($parts[2]) == "operator" ){
        $_SESSION['login'] = $_POST['user'];
        echo "<h1>Anda berhasil LOGIN sebagai operator</h1>";
        echo "<h2>Klik <a href='session2.php'> di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session operator";
        $success = true;
        break;
    } if(trim($parts[0]) == $_POST['user'] && trim($parts[1]) == $_POST['pass'] && trim($parts[2]) == "admin" ){
        $_SESSION['login'] = $_POST['user'];
        echo "<h1>Anda berhasil LOGIN sebagai admin</h1>";
        echo "<h2>Klik <a href='session2.php'> di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session Admin";
        $success = true;
        break;
    }
}

if(!$success){
    echo "email atau password salah";
    echo " silakan login kembali <a href ='session1.php'> disini (session1.php)</a>";
}


} else { ?>
    <html>
    <head>
    <title>Login here...</title>
    </head>
    <body>
    <form action="" method="post">
    <h2>Login Here...</h2>
    Username : <input type="text" name="user"><br>
    Password : <input type="password" name="pass"><br>
    <input type="submit" name="Login" value="Log In">
    </form>
    </body>
    </html>

    <?php
    }
    ?>