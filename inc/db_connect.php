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
$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);

// 3) Create User
function createUser($username, $key, $password){
        $stmt = $mysqli->prepare("INSERT INTO members (username, key, password) VALUES (?,?,?)");
	$stmt->bind_param("sss", $username, $key, $password);
	$stmt->execute();
}