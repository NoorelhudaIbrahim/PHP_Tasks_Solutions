<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
  
// Text to replace
$text = "PHP Tutorial";
  
// The preg_replace is used here to replace the 
// color of first character of the word
$text = preg_replace('/(\b[a-z])/i', 
'<span style="color:green;">\1</span>', $text);
  
// Display the text value
echo $text
?>

</body>
</html>