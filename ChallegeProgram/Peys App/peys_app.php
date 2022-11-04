<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peys Apps</title>
</head>
<body>
<h1>Peys App</h1>
    <form  method = get>
    <label for="photosize">Select Photo Size:</label>
     <input type="range" id="photosize" name="photosize"  min="10" max="100" step="10" value="60"><br>
    <label for="boardercolor">Select Boarder Color:</label>
    <input type="color" name="boardercolor" id="boardercolor"><br>
    <input type="submit" name="Process">
    <br><br>
    <?php
    $size = 60;
    if(isset($_GET['Process'])){
        $size = $_GET['photosize'];
        $border = $_GET['boardercolor'];
    }
    ?>
    <img src="../img/profile_picture.jpg" style="width: <?php echo ($size * 2) . "px"; ?>;border-color: <?php echo $border; ?>;border-width: <?php echo $size; ?>; border-style: solid;margin: <?php echo (100-$size)."px";?>;align-items:center;justify-content:center;">
        

    </form>
</body>
</html>