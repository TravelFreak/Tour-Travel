<?php 
include("../includes/database_connection.php");
include("../includes/session.php");
include("../includes/functions.php");
?>

<?php
if(logged_in())
    header("Location : home.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">

        $(function () {
        $('input[type="button"]').on('click', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'login1.php',
            data: $('form').serialize(),
            success: function (result) {
              checkStatus(result);
            }
          });

        });

      });
        function checkStatus(status)
        {
            var data = $.trim(status);
            if(data=="Wrong Login"){
                $("#err_msg_login").html(data);
            }
            else if(data=="Success Login")
            {
                $(location).attr('href', 'home.php');
            }
            else if(data=="Success Signup")
            {
                $(location).attr('href', 'login.php');
            }
            else if(data=="Wrong Signup")
            {
                $("#err_msg_signup").html(data);
            }
        }
    </script>
</head>
<body>
<hr width="80%">
    <center><h1>Welcome To TravelFreak</h1></center>
    <hr width="80%">
    <b>
        <div class="login">
            <center>
                <div class="text"> 
                   <font size="7">Login</font>
                   <form  >
                       <table>
                           <tr><td>Username<td><input name="username" type="text" required ></tr><br>
                           <tr><td>Password<td><input name="password" type="password" required ></tr><br>
                       </table>
                       <div id = "err_msg_login" style="color: red;"></div>
                       <br>

                       <input type="button" name="submit" value="Login"></input> &nbsp&nbsp&nbsp   <input type="reset" name="Reset">
                   </form>
                   <br>
                   <br>
                   <br>
                   <a href="signup2.php" style="text-decoration:none">New User! Click Here To Register</a>
               </div>
           </center>
       </div>
   </b>

</body>
</html>