<?php
  require("connection.php");
  $from = htmlentities($_POST["from"]);
  if ($from == "addTutor") {
    addTutor($conn);
  }elseif ($from == "removeTutor") {
    removeTutor($conn);
  }elseif ($from == "addStudent") {
    addStudent($conn);
  }elseif ($from == "removeStudent") {
    removeStudent($conn);
  }elseif ($from == "addRoom") {
    addRoom($conn);
  }elseif ($from == "removeRoom") {
    removeRoom($conn);
  }elseif ($from == "addBuilding") {
    addBuilding($conn);
  }elseif ($from == "removeBuilding") {
    removeBuilding($conn);
  }else{
    header('Location: tutor-main-screen.php');
  }

//function to query and add a tutor to the database
  function addTutor($conn){
    $fName = htmlentities($_POST["fName"]);
    $lName = htmlentities($_POST["lName"]);
    $score = '0';
    $office = htmlentities($_POST["office"]);
    $current_pos = '0';
    $password = htmlentities($_POST["password"]);
    $query = "INSERT INTO tutorGroup (fName, lName, score, office, current_pos, password) VALUES ('". $fName ."', '" .$lName ."', '". $score ."', '" .$office ."', '". $current_pos ."', '" .$password ."');";
    $conn->query($query);
    header('Location: tutor-main-screen.php');
  }

//function to delete the selected tutor from the datavase
  function removeTutor($conn){
    $tutorID = htmlentities($_POST["tutorID"]);
    $query ="DELETE FROM tutorGroup WHERE tutorID =". $tutorID .";";
    $conn->query($query);
    header('Location: tutor-main-screen.php');
  }

//function to query and add a tutor to the database
  function addStudent($conn){
    $username = htmlentities($_POST["username"]);
    $tutorID = htmlentities($_POST["tutorID"]);
    $location = '0';
    $points = '0';
    $query = "INSERT INTO user (username, tutorID, location, points) VALUES ('". $username ."', " .$tutorID .", ". $location .", " .$points .");";
    $conn->query($query);
    header('Location: tutor-main-screen.php');
  }

//function to remove the selected student from the database
  function removeStudent($conn){
    $userID = htmlentities($_POST["userID"]);
    $query ="DELETE FROM user WHERE userID =". $userID .";";
    $conn->query($query);
    header('Location: tutor-main-screen.php');
  }

//fix using SQL dump
  function addRoom($conn){
    $name = htmlentities($_POST["name"]);
    $type = htmlentities($_POST["type"]);
    $buildingID = htmlentities($_POST["buildingID"]);
    $query = "INSERT INTO room (name, type, buildingID) VALUES ('".$name."', '".$type."', ".$buildingID.");";
    $conn->query($query);#
    header('Location: tutor-main-screen.php');
  }

//function to remove a rppm from the database
  function removeRoom($conn){
    $roomID = htmlentities($_POST["roomID"]);
    $query ="DELETE FROM room WHERE roomID =". $roomID .";";
    $conn->query($query);
    header('Location: tutor-main-screen.php');
  }


    function addBuilding($conn){
      $name = htmlentities($_POST["name"]);
      $info = htmlentities($_POST["info"]);
      $latitude = htmlentities($_POST["latitude"]);
      $longitude = htmlentities($_POST["longitude"]);
      $query = "INSERT INTO building (name, info, latitude, longitude) VALUES  ('".$name."', '".$info."', '".$latitude."', '".$longitude."');";
      $conn->query($query);
      header('Location: tutor-main-screen.php');
    }

  //function to remove a rppm from the database
    function removeBuilding($conn){
      $buildingID = htmlentities($_POST["buildingID"]);
      $query ="DELETE FROM building WHERE buildingID =". $buildingID .";";
      $conn->query($query);
      header('Location: tutor-main-screen.php');
    }


?>
