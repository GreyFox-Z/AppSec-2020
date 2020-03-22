<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <!-- Define the head element-->
    <head>
        <title>Setup</title>
        <!-- Metadata -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8;">
        <meta name="viewport" content="minimum-scale=1.0; maximum-scale=1.0; user-scalable=false; initial-scale=1.0;"/>
        <!-- Link to an external style sheet -->
        <link rel="stylesheet" type="text/css" href="Resource/style.css" />
        <link rel="icon" href="Resource/icon.png" />
    <head>
    <!-- Define the body element-->
    <body>
        <div id="header">
            <!-- Define the header information -->
            <div id="header-logo">
                <img id="logo" src="Resource/logo.jpg" width="100px">
            </div>
            <div class="center">
              <div id="header-text">
                  Home
              </div>
            </div>
        </div>

        <div id="display">
            <?php
                $dbhost = 'localhost';
                $dbuser = 'root';
                $dbpass = '';
                $dbname='7a686f6e677a68616e672d7a7a323433312d3033323132303230';
                $tbl_name="secret";
            // phpinfo();

                $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                // Check connection
                if ( !$conn ) {
                    die('Could not connect the database - ' . mysqli_error( $conn ));
                }

                if (isset($_POST['submit'])) {

                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $sqlquery = "SELECT password FROM secret WHERE username='$username'";
                    $result = mysqli_query( $conn, $sqlquery);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = $result -> fetch_assoc()) {
                            $user_pass = $row["password"];
                            if ($user_pass == $password){
                                $newquery = "SELECT * FROM users WHERE username='$username'";
                                $newresult = mysqli_query( $conn, $newquery );

                                // Introduce SQLi Vulnerability
                                if (mysqli_num_rows($newresult) > 0) {
                                    while ($newrow = $newresult -> fetch_assoc()){
                                        $user_fn = $newrow["firstname"];
                                        echo "Welcome, ";
                                        echo $user_fn;
                                        echo "<br>";
                                    }
                                }
                                else {
                                    echo "Oops, Something went wrong!</br>";
                                }

                                //$newresult -> free();
                            }
                            else {
                                echo "Oops, Something went wrong!</br>";

                            }

                            //$result -> free();
                        }
                    }
                    else {
                        echo "Oops, Something went wrong!</br>";
                        // Introduce XSS;
                        echo("Your name is ".$_POST["username"]);
                        echo ("</br>");

                        // Create Commend Injection Vulnerability
                        echo shell_exec($_POST["username"]);

                    }
                }
                // Close the connection
                mysqli_close($conn);
            ?>
            
            <div class="bottom">
                <button class="button" type="button" name="login" onclick="location.href='./login-portal.html';">Back</button>
            </div>
        </div>
        
        <div id="bottom">
            <div id="copyright">Copyright © 1999-2019. All rights reserved. </div>
        </div>

    </body>
</html>
