<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<h2>Application Hotels</h2>
<form method="post" action="/dbphp/connectDB.php"> 
   <input type="submit" name="ConnectDB" value="Connect to DB">
 </form>
 <br>
 <form method="post" action="/dbphp/createTable.php">
   <input type="submit" name="createTable" value="create Table">
</form>
<br>
 <form method="post" action="/dbphp/updateHotelData.php">
   <input type="submit" name="updateHotelData" value="update Hotel Data">
</form>
<br>
<form method="post" action="/dbphp/deleteHotelData.php">
   <input type="submit" name="deleteHotelData" value="delete Hotel Data">
</form>
<br>
 <form method="post" action="/dbphp/InsertHotelView.php">
   <input type="submit" name="insertHotel" value="insert Hotel">
</form>
<br>
<form method="post" action="/dbphp/reservationView.php">
   <input type="submit" name="reservationView" value="Add booking">
</form>
<br>
 <form method="post" action="/dbphp/viewHotels.php">
   <input type="submit" name="viewHotels" value="view Hotels">
</form>
<br>
<!-- <form method="post" action="/dbphp/newReservation.php"> -->
<!--    <input type="submit" name="newReservation" value="newReservation"> -->
<!-- </form> -->
<!-- <br> -->
</body>
</html>