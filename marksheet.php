<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
</head>
<body>

<?php
// echo isset($_GET) && (!empty($_GET));
if(isset($_GET) && (!empty($_GET))){
    $fname = $_GET['fname'];
    $marks = $_GET['marks'];
    
    if($marks < 30){
        echo "You are $fname fail";
        die;
    }else{
        echo "You are $fname pass";
        die;
    }
}
?>


<form>
<h1>10th Board Result</h1>
<form method="GET" >
    <label for="fname">Names</label><br>
    <input type="text" name="fname" id=fname ><br>
    <label for="NAME">Marks</label><br>
    <input type="text" id=marks name="marks" ><br>
    <input type="submit" value="Submit">
</form>





</body>
</html>