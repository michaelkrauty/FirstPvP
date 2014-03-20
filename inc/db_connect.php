<?php
/**
 *
 * ############################################
 * Database Controller
 * ############################################
 *
 * DESCRIPTION
 *
 * MPCP Database Controller.
 *
 * TABLE OF CONTENTS
 *
 * 1) Includes
 * 2) Database Connnector
 * 3) Create User
 * 4) Delete User
 * 5) List Users
 * 6) Get User
 *
 * @ Copyright (c) FirstPvP
 * @ Version
 * @ Author - Michael Krautkramer
 * @ Author - Daniel Oxenbury (http://daniel.oxituk.co.uk)
*/



// 1) Includes
include_once "config.php";

// 2) Database Connector
//$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

// 3) Create User
function createUser($email, $password, $mcusername, $salt) {
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
	$prep_stmt = "INSERT INTO users (email, password, mcusername, salt) VALUES (?, ?, ?, ?)";
        $stmt = $mysqli->prepare($prep_stmt);
	$stmt->bind_param("ssss", $email, $password, $mcusername, $salt);
	$stmt->execute();
}

// 4) Delete User
function deleteUser($userid) {
        $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
        $prep_stmt = "DELETE FROM users WHERE userid = ? LIMIT 1";
        $stmt = $mysqli->prepare($prep_stmt);
        $stmt->bind_param("s", $userid);
        $stmt->execute();
}

// 5) List Users
function listUsers() {
    $mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
	return mysqli_query($mysqli, "SELECT * FROM users");
}

// 6) Get User
function getUser($str){
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
	return mysqli_query($mysqli, "SELECT * FROM users WHERE player='".$str."'");
}


