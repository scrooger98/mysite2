<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./css/stylenav.css">
<link rel="stylesheet" href="./css/text.css">
</head>
<body>
<div class="navbar">
  <a href="./index.php">Home</a>
  <a href="./konfig.html">Konfigurator</a>
  <div class="dropdown">
    <button class="dropbtn">Infos
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="./wallpaper.html">Wallpaper</a>
      <a href="./datenschutz.html">Datenschutz</a>
      <a href="./impressum.html">Impressum</a>
    </div>
  </div>
</div>
<div class=Textbox><p>Auf dieser Seite kannst du in einem Autokonfigurator dein Traumauto zusammenstellen. Außerdem kannst du Bilder von deinem Traum hier hochladen.</p></div>
<div class=Textbox>
    <?php
$connection = pg_connect ("host=ec2-54-217-236-206.eu-west-1.compute.amazonaws.com dbname=dc63fijc2cjsgd user=epwtkajqmcuxwh password=5a020fac88c1bdbc73c2bb2fe303ca4e4a61e378b3fa245220035023ea46d9a6");
if($connection) 
{
echo ' <p>connected 123</p> ';
}
else 
{
echo 'there has been an error connecting';
} 

$sql = "SELECT * FROM huansohn";
$result = pg_query($connection, $sql);
while ($row = pg_fetch_array($result)) {

    echo " <img width= 100 height= 100 src= " . $row[1] . ">";

    echo " <p>Model name: " . $row[1] . "<p />";
}
pg_free_result($result);
pg_close($connection);
?></div>
    
<div> 
</div>
</body>
</html>