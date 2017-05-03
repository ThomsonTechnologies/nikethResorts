<?php
include("view/header.php");

$error = "";
$packages = DB::query('SELECT * FROM niketh.package');
if(isset($_GET['checkin'])){$check_in = $_GET['checkin'];}
if(isset($_GET['checkout'])){$check_out = $_GET['checkout'];}
if(isset($_GET['roomid'])){$roomid = $_GET['roomid'];}
if(isset($_POST['roomid'])){$roomid = $_POST['roomid'];}

if(isset($_POST['complete'])){
  $title = $_POST['title'];
  $check_in = $_POST['checkin'];
  $check_out = $_POST['checkout'];
  $room_id = $_POST['roomid'];
  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state =$_POST['state'];
  $country = $_POST['country'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $adults = $_POST['adults'];
  $children = $_POST['children'];
  $package = $_POST['package'];
  $details = "NA";

  if(isset($title) && $title != "Select"){
    if((isset($first_name) && (strlen($first_name) < 60 && strlen($first_name) > 1)) && (isset($last_name) && (strlen($last_name) < 60 && strlen($last_name) > 1))){
      if(isset($address1) && (strlen($address1) < 100 && strlen($address1) >3)){
          if(isset($city) && (strlen($city) < 100 && strlen($city) > 0)){
            if(isset($state) && strlen($state < 100 && strlen($state) >0)){
              if(isset($country) && $country != "Select"){
                if(isset($zip) && (strlen($zip) < 20 && strlen($zip) > 3)){
                  if(isset($phone) && (strlen($phone) < 20 && strlen($phone) > 6)){
                    if(isset($email) && (strlen($email) < 100 && strlen($email) > 0)){
                      if(isset($adults) && $adults != "Select"){
                        if(isset($children) && $children != "Select"){
                          if(isset($package) && $package != "Select"){

                            DB::query('INSERT INTO niketh.users VALUES(\'\', :title, :fname, :lname, :address1, :address2, :city, :state, :country, :zip, :phone, :email)',
                                        array(':title'=>$title, ':fname'=>$first_name, ':lname'=>$last_name, ':address1'=>$address1, ':address2'=>$address2, ':city'=>$city, ':state'=>$state,
                                        ':country'=>$country, ':zip'=>$zip, ':phone'=>$phone, 'email'=>$email));

                            $userid = DB::query('SELECT id FROM niketh.users WHERE first_name = :fname AND last_name = :lname AND email = :email',
                                    array(':fname'=>$first_name, ':lname'=>$last_name, ':email'=>$email))[0]['id'];

                            $error = "user id: ". $userid;

                            DB::query('INSERT INTO niketh.reservation VALUES(\'\', :userid, :roomid, :package, :checkin, :checkout, :details)',
                                      array(':userid'=>$userid, ':roomid'=>$room_id, ':package'=>$package, ':checkin'=>$check_in, ':checkout'=>$check_out, ':details'=>$details));

                            header("Location:reservation_complete.php");

                          }else {
                            $error = "Select the package name or slect none if no package";
                          }
                        }else {
                          $error = "Select the number of children";
                        }
                      }else {
                        $error = "Select the number of adults";
                      }
                    }else {
                      $error = "Invalid email address";
                    }
                  }else {
                    $error = "Invalid phone number";
                  }

                }else {
                  $error = "Invalid country name";
                }

              }else {
                $error = "Invalid country name";
              }

            }else {
              $error = "Invalid state name";
            }

          }else {
            $error = "Invalid city name";
          }
      }else {
        $error = "Invalid address";
      }
    }else {
      $error = "Invalid first name or last name";
    }
  }else {
    $error = "Please select title";
  }


}

?>
<div id="reservation2_box">
<form action="reservation2.php" method="post">
<table border="0" id="rsv2table">
  <tbody>
  <tr>
    <td>Check-in</td>
    <td><input type="text" name="checkin" value="<?php echo $check_in ?>" readonly></td>
    <td>Check-out</td>
    <td><input type="text" name="checkout" value="<?php echo $check_out ?>" readonly></td>
  </tr>
  <tr>
      <td colspan="2"><h4>Personal Information</h4></td>
    </tr>
    <tr>
      <td>Title</td>
      <td><select name="title">
        <option value="Select">Select</option>
        <option value="Mr.">Mr.</option>
        <option value="Mrs.">Mrs.</option>
        <option value="Ms.">Ms.</option>
        </select>
      </td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>First Name: </td>
      <td><input type="text" name="fname"></td>
      <td>Last Name</td>
      <td><input type="text" name="lname"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input type="text" name="address1"></td>
      <td>Address 2</td>
      <td><input type="text" name="address2"></td>
    </tr>
    <tr>
      <td>City</td>
      <td><input type="text" name="city"></td>
      <td>State</td>
      <td><input type="text" name="state"></td>
    </tr>
    <tr>
      <td>Country</td>
      <td><input type="text" name="country"></td>
      <td>Zip</td>
      <td><input type="number" name="zip"></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><input type="text" name="phone"></td>
      <td>email</td>
      <td><input type="email" name="email"></td>
    </tr>
    <tr>
      <td colspan="2"><h4>Reservation Information</h4></td>

    </tr>
    <tr>
      <td>Adults</td>
      <td><input type="number" name="adults"></td>
      <td>Children</td>
      <td><input type="number" name="children"></td>
    </tr>
    <tr>
      <td>Package: </td>
      <td><select name="package">
        <option value="0" id="pkgsel">Select</option>
      <?php
      foreach($packages as $package){
        echo"<option value='".$package['id']."'>".$package['name']."</option>";
      }

      ?>
      </select></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>

    <tr>
      <td><input type='hidden' name='roomid' value='<?php echo $roomid ?>'></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<div class="errorbox"><?php echo $error ?></div>
<input type="submit" name="complete" class="btn_gen_green" value="Complete" id="sendbtn">
</form>

</div>
</div>
    </main>

    <?php
	include("view/footer.php");
	?>
