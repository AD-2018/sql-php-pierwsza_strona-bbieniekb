<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<link href="https://github.com/AD-2018/sql-php-pierwsza_strona-bbieniekb">ok</a>
    <h1>Bartosz Bieniek 2</h1>
<?php

$conn = new mysqli("mysql-bbieniekb.alwaysdata.net","bbieniekb","dorsz1234","bbieniekb_baza");
$sql = "SELECT * FROM pracownicy";
$wynik = mysqli_query($conn, $sql);


 
    echo('<table border="1">');
    echo('<th>Imie</th><th>zarobki</th>');

    while($wiersz=mysqli_fetch_assoc($wynik)){
        echo('<tr>');
        echo('<td>'.$wiersz['imie'].'</td>'.'<td>'.$wiersz['zarobki'].'</td>');
        echo('</tr>');
    }

    echo('</table>');

?>
    </body>
</html>
