<?php
/**
 *
 * ############################################
 * Database Controller
 * ############################################
 *
 * DESCRIPTION
 *
 * FirstPvP Database Controller.
 *
 * TABLE OF CONTENTS
 *
 * 1) Includes
 * 2) Database Connnector
 * 3) Create User
 *
 * @ Copyright (c) FirstPvP
 * @ Version
 * @ Author - Michael Krautkramer
*/

ini_set('display_errors', 'On');
error_reporting(E_ALL);


// 1) Includes
include_once "config.php";

// 2) Database Connector
//$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

// 3) Create User
function createUser($username, $email, $key, $password){
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
	$stmt = $mysqli->prepare("SELECT * FROM members WHERE username=? LIMIT 1");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows != 1){
		//user doesn't exist
		return "ERROR:USER";
	}

	$stmt = $mysqli->prepare("SELECT * FROM members WHERE username=? LIMIT 1");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($db_id, $db_username, $db_email, $db_key, $db_password);
	$stmt->fetch();
	
	if($key != $db_key){
		//key is wrong
		return "ERROR:KEY";
	}
	if($db_password != ""){
		//password is already set, user exists
		return "ERROR:PASSWORD";
	}
	
	
	$stmt = $mysqli->prepare("UPDATE members SET `email`=?, `password`=? WHERE username=?");
	$stmt->bind_param("sss", $email, $password, $username);
	$stmt->execute();
	return "SUCCESS";
}

function getUser($username){
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
	$stmt = $mysqli->prepare("SELECT * FROM members WHERE username=? LIMIT 1");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows != 1){
		//user doesn't exist
		return "ERROR:USER";
	}
	
	$stmt->bind_result($id, $username, $email, $key, $password);
	$stmt->fetch();
	$result["id"] = $id;
	$result["username"] = $username;
	$result["key"] = $key;
	$result["password"] = $password;
	$result["email"] = $email;
	return $result;
}