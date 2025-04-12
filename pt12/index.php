<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To PHP</title>
</head>
<body>
    <?php echo "<h1>Welcome to my First Website with PHP</h1>"; ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <p>My Name is <?php echo "<b>Agnes Monica</b>"; ?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
        $nama = "Agnes Monica"; //string
        $umur = 20; //number
        $Perempuan = true; //boolean
        $saldo = null; //null
        $hobby =["Memancing", "Berenang","Berlari"]; //array
        $makanan_fav = array("Sushi", "Pempek", "Bakie"); //array
        #ini jg komentar

        //variabel statis
        const PI =3.14;
        echo "Nilai PI =", PI;
        echo "<br/>";
        echo "Umur = $umur";
        echo "<br/>";
        //echo "Hobi 1. $hobby[0]";

        //menampilkan nilai array
        foreach ($hobby as $key => $value) {
            echo "Hobi".($key+1)."= $value <br/>";
        }

        $saldo = 1000; //dollar
        //tampilkan symbol dolar ($) menggunakan echo
        echo "Saldo = \"\$$saldo USD\"";
?>
</body>
</html> 