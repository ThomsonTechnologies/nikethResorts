<?php
include("view/header.php");

$rooms = DB::query("SELECT * FROM niketh.rooms");
?>

<div id="mainbox">
  <div class="mainboxheader">Tariff</div>
 <table border="0" id="tarifftable">
  <tbody>
    <tr>
      <th scope="col">Room type</th>
      <th scope="col">Package name</th>
      <th scope="col">Occupancy</th>
      <th scope="col">Daily Rate(tax extra)</th>
      <th scope="col">Extra Bed (above 12 years)</th>
      <th scope="col">Reservation</th>
    </tr>
    <?php
    foreach($rooms as $room){
      echo"<tr>
        <td>".$room['name']."</td>
        <td>CP</td>
        <td>Double</td>
        <td>".$room['rate']."</td>
        <td>500 INR</td>
        <td><a href='reservation.php?available=true&roomid=".$room['id']."'>Book Now</a></td>
      </tr>";
    }
    ?>

  </tbody>
</table>

      <table border="0" id="pkgdetailstable">
        <tbody>
          <tr>
            <td class="col1">Meal Plan:</td>
            <td>AP (American Plan)-Room with breakfast, lunch and dinner.</br>
                CP (Continental Plan)-Room with breakfast.</br>
                EP (European Plan)-Room only</br>
                MAP (Modified American Plan)-Room with breakfast,lunch/dinner.</td>
          </tr>
          <tr>
            <td class="col1">Check In Time:</td>
            <td>12.00 Noon.</td>
          </tr>
          <tr>
            <td class="col1">Check Out Time:</td>
            <td>11.00 Am.</td>
          </tr>
          <tr>
            <td class="col1">Infant/Child Policy:</td>
            <td>BELOW 12 free.</td>
          </tr>
          <tr>
            <td class="col1">Cancellation Policy:</td>
            <td>Cancellation before 10 days will allow a full refund</br>
                Cancellation less than 10 days and more than 4 days will allow a 50% refund.</br>
                Cancellation less than 4 days will be a full cancellation.</td>
          </tr>
          <tr>
            <td class="col1">Things to carry:</td>
            <td>Warm Clothing, Umbrellas, Trek Shoes, Sun Hats</td>
          </tr>
        </tbody>
      </table>

  <div id="pakgegraphic"><h1><img src="resources/mainTxt.png" width="151" height="43" alt=""/></h1>
  </div>
</div>
</div>
    </main>

    <?php
	include("view/footer.php");
	?>
