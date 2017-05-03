<?php
include("view/header.php");
$flag = true;
$message = "";
$error = "";
if(isset($_GET['roomid'])){$selected_room = $_GET['roomid'];}
if(isset($_POST['roomselected'])){$selected_room = $_POST['roomselected'];}

if(isset($_POST['continue'])){
  $check_in = $_POST['checkin'];
  $check_out = $_POST['checkout'];
  $roomid = $_POST['roomselected'];
  header("Location:reservation2.php?roomid=".$roomid."&checkin=".$check_in."&checkout=".$check_out."");
}

if(isset($_POST['continue2'])){
  $check_in = $_POST['checkin'];
  $check_out = $_POST['checkout'];
  $roomid = $_POST['selectedroom'];
  if(isset($_POST['selectedroom']) && !empty($_POST['selectedroom'])){
      header("Location:reservation2.php?roomid=".$roomid."&checkin=".$check_in."&checkout=".$check_out."");
  }else {
    $flag = false;
    $message = "Please select a room from table to continue";
  }
}

if(isset($_POST['search'])){
  $check_in = $_POST['checkin'];
  $check_out = $_POST['checkout'];
  $selected_room = $_POST['roomselected'];

    if(isset($_POST['checkin']) && !empty($_POST['checkin'])){
      if(isset($_POST['checkout']) && !empty($_POST['checkout'])){

            // $room_id = DB::query('SELECT id FROM niketh.rooms
            //                         WHERE id NOT IN(
            //                         SELECT roomid FROM niketh.reservation
            //                         WHERE (check_in >= :checkin &&
            //                         check_in < :checkout) ||
            //                         (check_out > :checkin && check_out < :checkout)) AND id = :selectedroom',
            //                         array(':checkin'=>$check_in, ':checkout'=>$check_out, ':selectedroom'=>$selected_room))[0]['id'];

            $room_id = DB::query('SELECT id FROM niketh.rooms
                                  WHERE id NOT IN(
                                  	SELECT roomid FROM niketh.reservation
                                  	WHERE((((check_in > :checkin && check_in < :checkin) ||
                                  (check_out > :checkout && check_out < :checkout)) ||
                                  ((check_in < :checkin && check_out > :checkout) ||
                                  (check_in = :checkin && check_out = :checkout))) ||
                                  ((check_in > :checkin && check_out < :checkout) ||
                                  (check_out > :checkin && check_out <= :checkout)))) AND id = :selectedroom',
                                  array(':checkin'=>$check_in, ':checkout'=>$check_out, ':selectedroom'=>$selected_room))[0]['id'];



            if(isset($room_id)){
                  $flag = true;
                  $message = "Selected room is available. Please click continue to finish the reservation";
            }else {
                  $flag = false;
                  $message = "Selected room is not available. Please click Available rooms to see all available rooms";
            }
      }else{
        $message= "Please select check-in/check-out dates";
      }
    }else{
      $message = "Please select check-in/check-out dates";
    }
}

if(isset($_POST['searchall'])){
  $check_in = $_POST['checkin'];
  $check_out = $_POST['checkout'];
  $flag = false;

  if(isset($check_in) && !empty($_POST['checkin'])){
    if(isset($check_out) && !empty($_POST['checkout'])){
      $rooms = DB::query('SELECT * FROM niketh.rooms
                              WHERE id NOT IN(
                              SELECT roomid FROM niketh.reservation
                              WHERE (check_in >= :checkin &&
                              check_in < :checkout) ||
                              (check_out > :checkin && check_out < :checkout))',
                              array(':checkin'=>$check_in, ':checkout'=>$check_out, 'checkin'=>$check_in, ':checkout'=>$check_out));

      if($rooms == null){
        $error= "Sorry no rooms are available on the specified dates!";
      }
    }else{
      $error = "Select the Check-out date";
    }
  }else{
    $error = "Select the Check-in date";
  }

}


?>
<div id="reservationbox">

<?php
if($flag){
  echo "<form action='reservation.php' method='post'>
  <table border='0' class='resvtable1'>
    <tbody>
      <tr>
        <td>Check-in</td>
        <td><input type='text' name='checkin' id='datepicker'"; if(isset($check_in)){echo"value='".$check_in."'";} echo" readonly></td>
        <td>Check-out</td>
        <td><input type='text' name='checkout' id='datepicker2'"; if(isset($check_out)){echo"value='".$check_out."'";} echo" readonly></td>
      </tr>
      <tr>
      <input type='hidden' name='roomselected' value='".$selected_room."'>
      </tr>
    </tbody>";
    if(!isset($room_id)){
      echo"<div class='notifydiv'>".$message."</div>
      <input type='submit' name='search' class='btn_gen_green' id='searchroombtn' value='Check availablity'>";
    }else {
      echo"<div class='notifydiv'>".$message."</div>
      <input type='submit' name='continue' class='btn_gen_green' id='searchroombtn' value='Continue'>";
    }
  echo"</table>
    </form>";
}

if(!$flag) {
  echo "<form action='reservation.php' method='post'>
  <table border='0' class='resvtable1'>
    <tbody>
    <tr>
      <td>Check-in</td>
      <td><input type='text' name='checkin' id='datepicker'"; if(isset($check_in)){echo"value='".$check_in."'";} echo"></td>
      <td>Check-out</td>
      <td><input type='text' name='checkout' id='datepicker2'"; if(isset($check_out)){echo"value='".$check_out."'";} echo"></td>
    </tr>
    </tbody>";
    if(!isset($rooms)){
        echo"<div class='notifydiv'>".$message."</div>
        <input type='submit' name='searchall' class='btn_gen_green' id='searchroombtn' value='Available rooms'>
        </table>";
    }
    if(isset($rooms) && $rooms != null){
      echo "<table border='1' id='roomstable' class='roomstable'>
              <tbody>
                <tr>
                  <th>Room No</th>
                  <th>Room name</th>
                  <th>Rate</th>
                </tr>";
        foreach($rooms as $room){
             echo"<tr>
                    <td class='roomIdCell'>".$room['id']."</td>
                    <td>".$room['name']."</td>

                    <td>".$room['rate']."</td>
                  </tr>";
        }
        echo"</tbody>
            </table>";

            echo" <div class='selectedroombox'>Room id: <input type='text' name='selectedroom' id='selectedroom'></div>
            <input type='submit' name='continue2' class='btn_gen_green' id='searchroombtn' value='Continue' id='continuebtn1'>";
    }else{
      echo"<div class='gobackBox'>".$error."
      </div>";
    }

    echo"</form>";

}

?>

</div>
</div>
    </main>

    <?php
	include("view/footer.php");
	?>
