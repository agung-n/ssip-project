
    <html>
        <body>

    <p>
<?php
echo "selamat malam";
echo "<br>";
$a = 10;
$b = "selamat malam";
$c = 30;
echo $a;
echo "<br>";
echo $b;
echo "<br>";

echo $a.$b;

print $a;

echo "<br><br><br>";

echo "<u>".$a."</u> ini adalah echo var a<br>";
echo "<u>".$b."</u> ini adalah echo var b<br>";
print "<u>".$c."</u> ini adalah print var c<br>";

echo var_dump($a);

echo "<br><br><br>";

function lala(){
  global $a;
  $a++;
  echo $a;
  $a = "bakso";
  echo $a;

  }
lala();
lala();
lala();
lala();
lala();
lala();
echo lala();

echo $a;
echo $b;
?>
  </p>

        </body>
    </html>