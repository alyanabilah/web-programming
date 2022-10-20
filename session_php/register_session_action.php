<?php
if(isset($_POST["user"]) && isset($_POST["pass"]))
{
    
    $file=fopen("user_session.txt","r");
    $checkUser = false;
    while(!feof($file))
    {
        $line = fgets($file);
        $parts = explode("|",$line);
        if(trim($parts[0]) == $_POST['user'])
        {
            $checkUser=true;
            break;
        }
    }
    fclose($file);
 
    
    if( $checkUser )
    {
        echo $_POST["user"];
        echo ' sudah ada! gunakan user yang lain <br> <br>';
        include 'register_session.php';
    }
    else
    {
        $file = fopen("user_session.txt", "a");
        fputs($file,$_POST["user"]."|".$_POST["pass"]."|". $_POST["role"]."\r\n");
        fclose($file);

        echo $_POST["user"];
        echo " berhasil terdaftar!";
    }
}
else
{
    include 'register_session.php';
}
?>