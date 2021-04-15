<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bartosz Bieniek</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
    <div class="header">
      <?php
require_once("../../lib.php");

echo("<br>nauczyciele<br>");
$sql = "SELECT * FROM nauczyciele";
echo($sql);

$result = mysqli_query($conn, $sql);
if ( $result) {
        echo "<li>ok";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

echo('<table border="1">');
    echo('<th>ID</th><th>nauczyciele</th>');

    while($row=mysqli_fetch_assoc($result)){
        echo('<tr>');
        echo('<td>'.$row['id'].'</td><td>'.$row['nauczyciele'].'</td>');
        echo('</tr>');
    }

echo('</table>');
?>
</div>
    <header>
        <h1>gridcss</h1>
      </header>
      <nav>
        2
      </nav>
      <main>
        3
      </main>
      <aside>
        5
      </aside>
      <footer>
        4
      </footer>
    </div>
  </body>
</html>