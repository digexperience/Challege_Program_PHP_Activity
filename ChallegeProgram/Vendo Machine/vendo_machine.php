<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <h1>Vendo Machine</h1>
    <form method ="post">
    <fieldset class="fieldset" style="width:30%">
    <legend>Product:</legend>
    <input type="checkbox" name="brand[]" id="sCoke" value ="Coke" > <label for = "sCoke">Coke - ₱15</label><br>
    <input type="checkbox" name="brand[]" id="sSprite" value ="Sprite"> <label for = "sSprite">Sprite - ₱20</label><br>
    <input type="checkbox" name="brand[]" id="sRoyal" value ="Royal"> <label for = "sRoyal">Royal - ₱20</label><br>
    <input type="checkbox" name="brand[]" id="sPepsi" value ="Pepsi"> <label for = "sPepsi">Pepsi - ₱15</label><br>
    <input type="checkbox" name="brand[]" id="sMountaindew" value ="Mountaindew"> <label for = "sMountaindew">Mountain Dew - ₱20</label><br>
  
    </fieldset>
    <fieldset class="fieldset" style="width:30%">
        <legend>Options:</legend>
        <label for="size">Size:</label>
        <select name="size" id="size">
            <option value="Regular">Regular </option>
            <option value="UpSize">Up-Size (add ₱5)</option>
            <option value="Jumbo">Jumbo (add ₱10)</option>
        </select>

<label for="quantity"> Quantity: </label>
<input type="number" name="quantity" id="quantity" min="1" max="9999">
<input type="submit" name="btncheckout" value ="Check Out">
</fieldset>
</form>

<?php
if(isset($_POST['btncheckout'])) {
    echo '<hr>';
    if(isset($_POST['brand']) && is_numeric($_POST['quantity'])){

        $arrbrand = $_POST['brand'];
        $selectedsize = $_POST['size'];
        $quanitem = $_POST['quantity'];
        $amount = 0;

        $pricesDetais = array(
            'brandprices' => array(
                    'Coke' => 15,
                    'Sprite' => 20,
                    'Royal' => 20,
                    'Pepsi' => 15,
                    'Mountaindew' => 20
            ),
            'brandsize' => array(
                    'Regular' => 0,
                    'UpSize' => 5,
                    'Jumbo' => 10
            )
        );

        echo '<b>Purchase Summary:</b> <br><br>';
        foreach($arrbrand as $keybrand => $valuebrand){
            $amount += $quanitem * ($pricesDetais['brandprices'][$valuebrand] + $pricesDetais['brandsize'][$selectedsize]);
            echo '<li> '. $quanitem . ' pieces of ' . $selectedsize . ' ' . $valuebrand . ' amounting to ₱ ' . $quanitem * ($pricesDetais['brandprices'][$valuebrand] + $pricesDetais['brandsize'][$selectedsize]). '</li>';
        }
        echo '<br>';
        echo '<b>Total Number of Items: </b>',count($arrbrand) * $quanitem,'<br>';
        echo '<b>Total Amount: </b>',$amount ,'<br>';
        
    }
    elseif(empty($_POST['brand'])) {
        echo '<b>No Selected Product, Try Again</b>';
    }
    else {
        echo '<b>Please fill the quantity, Try Again</b>';
    }
}

?>

</body>
</html>