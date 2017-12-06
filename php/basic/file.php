
<!DOCTYPE html>
<html>
<body>

<?php
// echo readfile("fileText.txt");
?>
<br/>
<br/>
<br/>
<?php
$myfile = fopen("fileText.txt", "w") or die("Unable to open file!");
// echo fread($myfile,filesize("fileText.txt"));
echo "<br/>";
// while (!feof($myfile)) {
//     echo fgets($myfile) . "<br>";
// }
// while (!feof($myfile)) {
//     echo fgetc($myfile) . "<br>";
// }
$txt = "Bill Gates\n";
fwrite($myfile, $txt);
$txt = "Steve Jobs\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>