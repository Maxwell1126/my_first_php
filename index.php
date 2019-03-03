<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
echo "hello world";
?>

<?php 
$greeting = [ "<h1>hello</h1> ","<h6>world</h6>"
];
for($i = 0; $i < count($greeting); $i++){
    echo $greeting[$i];
}
?>
<?php 
$php = 'Php';
$python = 'Python';
$languages = ["$php","$pyhton"];
$knowIt = ['JavaScript','React','Redux','Node','SQL',];
echo "Before today, I knew:";
for($i = 0; $i < count($knowIt); $i++){
   echo "<li>$knowIt[$i]</li>";
}
for($i = 0; $i < count($languages); $i++){
    if($languages[$i]=='Php'){
        array_push($knowIt, $languages[$i]);
    }
}
echo "Now I know:";
for($i = 0; $i < count($knowIt); $i++){
   echo "<li>$knowIt[$i]</li>";
}

?>
</body>
</html>

