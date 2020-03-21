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
                  Database Setup
              </div>
            </div>
        </div>

        <div id="content">
            <div id="message">
            Welcome to our application<br><br>Please Click the following
            </div>


            <div id="button-box">
            	<div class="button">
                	<button class="button" type="button" name="Home" onclick="location.href='./homepage.html';">Home</button>
                </div>

				<form method="post">
					<input type="submit" name="Create_DB" value="Create Database"/>
					<input type="submit" name="Restore_DB" value="Restore Database"/>
				</form>
			
				<?php
					if(isset($_POST['Create_DB'])) { 
						
						$dbhost = 'localhost';
						$dbuser = 'root';
						$dbpass = '';
						$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

						if ( !$conn ) {
							die('Could not connect the database - ' . mysqli_error( $conn ));
						}
						else
							
					} 


					if(isset($_POST['Restore_DB'])) { 
						echo "This is Button2 that is selected"; 
					} 
				?>  
            </div>
        </div>
		
        <div id="copyright">Copyright © 1999-2019. All rights reserved. </div>         
    </body>
</html>


