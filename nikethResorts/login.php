<?php
include("view/header.php");
?>

      <div id="mainbox">
<div class="loginheader">Adminstrator Login</div>
<div id="logindiv">
        <form>
          	<table border="0" id="logintable">
              <tbody>
                <tr>
                  <td>Username</td>
                  <td><input type="text" name="username"></td>
                </tr>
                <tr>
                  <td>Password</td>
                  <td><input type="password" name="password"></td>
                </tr>
              </tbody>
            </table>
            <input type="submit" name="login" value="Login" id="loginbtn">
        </form>
        </div>

      </div>
    </div>
    </main>

    <?php
	include("view/footer.php");
	?>
