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
 *
 * @ Copyright (c) FirstPvP
 * @ Version
 * @ Author - Michael Krautkramer
*/



// 1) Includes
include_once "config.php";

// 2) Database Connector
//$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

// 3) Create User
function createUser($username, $key, $password){
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
	$stmt->bind_result($db_id, $db_username, $db_key, $db_password);
	$stmt->fetch();
	
	if($key != $db_key){
		//key is wrong
		return "ERROR:KEY";
	}
	if($db_password != ""){
		//password is already set, user exists
		return "ERROR:PASSWORD";
	}
	
	
	$stmt = $mysqli->prepare("UPDATE members SET `password`=? WHERE username=?");
	$stmt->bind_param("ss", $password, $username);
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
	
	$stmt = $mysqli->prepare("SELECT * FROM members WHERE username=? LIMIT 1");
	$stmt->bind_param("s", $username);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($id, $username, $key, $password);
	$stmt->fetch();
	$result["id"] = $id;
	$result["username"] = $username;
	$result["key"] = $key;
	$result["password"] = $password;
	return $result;
}