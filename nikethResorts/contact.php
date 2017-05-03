<?php
include("view/header.php");
?>

      <div id="mainbox">
      <div id="pkgheader">Contact Us</div>
      <table border="0" id="contacttable">
  <tbody>
    <tr>
      <td>Name</td>
      <td><input type="text"></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="email"></td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><input type="text"></td>
    </tr>
    <tr>
      <td>Message</td>
      <td><textarea class="messageta"></textarea></td>
    </tr>
  </tbody>
</table>
<input type="submit" name="sendmail" class="btn_gen_green" value="Send" id="sendbtn">
      </div>
</div>
    </main>
    
    <?php
	include("view/footer.php");
	?>