<html>
   <head>
       <title>Swag</title>
   </head> 
   <body>
       <form action="index.php" method="GET">
            Enter Regex<br>
            <input type="text" name="firstletter">
            <br>
            Enter length<br>
             <input type="text" name="length">
            <br>
         
            <input type="submit" value="Submit">
        </form>
<?php
$item = $_GET["firstname"];
$file = file_get_contents("file.txt");
$pattern = '/\b'. $_GET["firstletter"]. '([a-z0-9]{'.(string)(intval($_GET["length"])-1) .'})\b/'; 
preg_match_all($pattern, $file, $matches ); 
foreach($matches as $key => $value)
{
  echo $key." has the value". $value;
}
print_r(array_values($matches));

?>
</body>
</html>
