<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: shopadd.php");
}

if (isset($_POST['submit'])) {
    $storename = $_POST['storename'];
    $vatnumber = $_POST['vatnumber'];
    $storetype = $_POST['storetype'];
    $streetname = $_POST['streetname'];
    if ($storename == $storename) {
        $sql = "SELECT * FROM stores_data WHERE vatnumber='$vatnumber'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO stores_data (storename, storetype, streetname, vatnumber)
                VALUES ('$storename', '$storetype', '$streetname', '$vatnumber')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $storename = "";
                $storetype = "";
                $streetname = "";
                $vatnumber = "";
                echo "<script>alert('Great! Your Business Details Have Been Uploaded To Our Secure Servers')</script>";
                header("Location home.php");
            } else {
                echo "<script>alert('Something went wrong! :( . Please contact our developers at timekeeperproject21@gmail.com')</script>";
                $storename = "";
                $storetype = "";
                $streetname = "";
                $vatnumber = "";
            }
        } else {
            echo "<script>alert('Oh no! The VAT number that you provided is already being used. Please check your VAT number and try again.')</script>";
            $storename = "";
            $storetype = "";
            $streetname = "";
            $vatnumber = "";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TimeKeeper - Add Your Store</title>
</head>

<body>
    <div class="card_menu" style="width: 80%; height:700px; background-color:#E66C37; margin-left:10%; margin-top:4%; border-radius:20px; box-shadow: 0 0px 20px 0 rgba(0,0,0,0.4); display:flex; flex-direction:column;" class="card">
        <form action="" method="POST">
            <h1 style="text-align:center; color:white; font-size:3vw; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">TimeKeeper</h1>
            <h2 style="text-align:center; color:white; font-size:1.5vw; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Add your store details and we'll handle the rest!</h2>
            <div style="display: flex;">
                <div style="margin-top:75px; flex-direction:column; display:flex; width:100%;height:100%;  gap:2vw;">
                    <i style="margin-left:37%;" class="fas fa-home"><input class="inputs" style="margin-left:2%; background-color:transparent; border:none; border-bottom: 3px solid white; border-radius: 5px; height:40px; width:300px; font-size:20px;" type="text" name="storename" value="<?php echo $storename; ?>" placeholder='Business Name' required></i>
                    <i style="margin-left:37%;" class="fas fa-address-card"><input class="inputs" style="margin-left:2%; background-color:transparent; border:none; border-bottom: 3px solid white; border-radius: 5px; height:40px; width:300px; font-size:20px;" type="text" name="vatnumber" value="<?php echo $vatnumber; ?>" placeholder='VAT Number' required></i>
                    <i style="margin-left:36.7%;" class="fas fa-box-open"><select name="storetype" value="<?php echo $storetype; ?>" id="types" required>
                            <option value="" disabled selected hidden>Choose your store type</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothes</option>
                            <option value="food">Food</option>
                            <option value="drugs">Drugs</option>
                        </select></i>
                    <i style="margin-left:37%; " class="fas fa-road"><input class="inputs" style="margin-left:2%; background-color:transparent; border:none; border-bottom: 3px solid white; border-radius: 5px; height:40px; width:300px; font-size:20px;" type="text" name="streetname" value="<?php echo $streetname; ?>" placeholder='Street Address' required></i>
                    <button class="btn22" type="submit" name="submit">SUBMIT</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>