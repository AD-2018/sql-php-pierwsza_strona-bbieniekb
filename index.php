<?php

$conn = new mysqli("mysql-bbieniekb.alwaysdata.net","bbieniekb","dorsz1234","bbieniekb_baza");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


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
