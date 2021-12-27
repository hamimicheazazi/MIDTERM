<?php
include_once("dbconnect.php");
$sqlroom = "SELECT * FROM rent_a_room ORDER BY DateCreated DESC";
$stmt = $conn->prepare($sqlroom);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
<title>Main Page</title>
</head>

<body>
     <div class="w3-header w3-container w3-pale-red w3-padding-32 w3-center">
     <h1 style="font-size:calc(8px + 4vw);">MAJESTIC ROOM RENTAL</h1>
       <p style="font-size:calc(8px + 1vw);;">We only serve you the best room to stay!</p>
     </div>

     <div class="w3-bar w3-brown">
      <a href="#contact" class="w3-bar-item w3-button w3-right">Logout</a>
      <a href="newroom.php" class="w3-bar-item w3-button w3- left">New Room</a>
     </div>

<div class="w3-grid-template">
<?php
foreach($rows as $room){
    $contact = $room['contact'];
    $title = $room['title'];
    $description = $room['description'];
    $price = $room['price'];
    $deposit = $room['deposit'];
    $state = $room['state'];
    $area = $room['area'];
    $DateCreated = $room['DateCreated'];
    $latitude = $room['latitude'];
    $longitude = $room['longitude'];

    echo "<div class='w3-center w3-padding'>";
    echo "<div class='w3-card-4 w3-brown'>";
    echo "<header class='w3-container w3-black'>";
    echo "<h5>$title</h5>";
    echo "</header>";
    echo "<img class='w3-image' src=res/images/$title.png" . " onerror=this.onerror=null;this.src='res/images/room-icon.png'" . " style='width:100%;height:250px'>";
    echo "<div class='w3-container w3-left-align'><hr>";
    echo "<i class='fa fa-phone style='font-size 20px;'> Contact :</i> &nbsp&nbsp$contact<br>
    <i class='fas fa-file-invoice' style='font-size 20px;'> Description :</i> &nbsp&nbsp$description<br>
    <i class='fas fa-dollar-sign' style='font-size 20px;'> Price :</i> &nbsp&nbsp$price<br>
    <i class='fas fa-money-bill' style='font-size 20px;'> Deposit :</i> &nbsp&nbsp$deposit<br>
    <i class='far fa-flag' style='font-size 20px;'> State :</i> &nbsp&nbsp$state<br>
    <i class='fas fa-map-signs' style='font-size 20px;'> Area :</i> &nbsp&nbsp$area<br>
    <i class='far fa-calendar-alt' style='font-size 20px;'> Date Created :</i> &nbsp&nbsp$DateCreated<br>
    <i class='fas fa-map-marker-alt' style='font-size 20px;'> Latitude :</i> &nbsp&nbsp$latitude<br>
    <i class='fas fa-map-marker-alt' style='font-size 20px;'> Longitude :</i> &nbsp&nbsp$longitude<br></p><hr>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}
?>
</div>

</footer>

</body>
<footer class="w3-footer w3-brown w3-center">
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>©️ 2021 Copyright all right reserved | Designed by <a class="text-white">MAJESTIC ROOM RENTAL</a></p>
</footer>
</html>
