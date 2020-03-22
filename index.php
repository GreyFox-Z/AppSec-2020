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
            Welcome to my application<br><br>Please Click the following
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
						else {
							echo 'Connected Successfully </br>';
							create_database($conn);
							input_data($conn, "7a686f6e677a68616e672d7a7a323433312d3033323132303230");
							mysqli_close($conn);
						}

					} 


					if(isset($_POST['Restore_DB'])) { 
						$dbhost = 'localhost';
						$dbuser = 'root';
						$dbpass = '';
						$conn = mysqli_connect($dbhost, $dbuser, $dbpass);

						if ( !$conn ) {
							die('Could not connect the database - ' . mysqli_error( $conn ));
						}
						else {
							echo 'Connected Successfully </br>';
							remove_database($conn);
							mysqli_close($conn);
						}
					}


					function create_database($conn){
						$sqlquery = 'CREATE DATABASE 7a686f6e677a68616e672d7a7a323433312d3033323132303230';
						$retval = mysqli_query( $conn, $sqlquery );

						if(! $retval ) {
							die('Could not create the database - ' . mysqli_error( $conn ));
						}

						echo "Database Created Successfully </br>";
					} 


					function input_data($conn, $db_name){

						#------------ Table Secret -------------------------------
						$sqlquery = 'CREATE TABLE secret( ' .
							'username VARCHAR(56) NOT NULL, ' .
							'password VARCHAR(56) NOT NULL )';
						mysqli_select_db( $conn, $db_name );

						$retval = mysqli_query( $conn, $sqlquery );

						if(! $retval ) {
							die('Could not create the table - ' . mysqli_error( $conn ));
						}

						echo "Table secret Created Successfully </br>";

						#------------- Table Users -------------------------------
						$sqlquery = 'CREATE TABLE users( ' .
							'firstname VARCHAR(56) NOT NULL, ' .
							'lastname VARCHAR(56) NOT NULL, ' .
							'username VARCHAR(56) NOT NULL, ' .
							'password VARCHAR(56) NOT NULL )';
						mysqli_select_db( $conn, $db_name );

						$retval = mysqli_query( $conn, $sqlquery );

						if(! $retval ) {
							die('Could not create the table - ' . mysqli_error( $conn ));
						}

						echo "Table users Created Successfully </br>";

						#------------- Insert Users -----------------------------
						$sqlquery = 'INSERT INTO secret (username, password) VALUES ("admin", "password")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						$sqlquery = 'INSERT INTO secret (username, password) VALUES ("GreyFox", "GreyFoxZ")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						$sqlquery = 'INSERT INTO secret (username, password) VALUES ("eclarks", "eclarks1234")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						$sqlquery = 'INSERT INTO secret (username, password) VALUES ("lshewarz", "lshewarz5678")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						#------------- Insert Users ----------------------------
						$sqlquery = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("John","Doe", "admin", "password")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						$sqlquery = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("GreyFox","Z", "GreyFox", "GreyFoxZ")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						$sqlquery = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Emily", "Clarks", "eclarks", "eclarks1234")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						$sqlquery = 'INSERT INTO users (firstname, lastname, username, password) VALUES ("Luke", "Shewarz", "lshewarz", "lshewarz5678")';
						if (mysqli_query( $conn, $sqlquery)) {
							echo "New record created successfully </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}

						echo "Done </br>";

					}


					function remove_database( $conn ) {
						$sqlquery = 'DROP DATABASE 7a686f6e677a68616e672d7a7a323433312d3033323132303230';
						$retval = mysqli_query( $conn, $sqlquery );

						if ( $retval ) {
							echo "Database Successfully Removed </br>";
						}
						else {
							echo "[Error]: " . $sqlquery . "<br>" . mysqli_error( $conn );
						}
					} 
					
				?>  
            </div>
        </div>
		
        <div id="bottom">
            <div id="copyright">Copyright © 1999-2019. All rights reserved. </div>
        </div>
                 
    </body>
</html>


