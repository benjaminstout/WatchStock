<?php
	//Script to query WatchStock stock items from DB
  //Written by: Benjamin Stout | 2016-05-12

  /*
  //directory of SMA/IOM data scripts and subfolders
  $cwd = __DIR__;  //same as current script

  //include DB constants
  include $cwd . '/db_core.php';

  //open connection to DB
  $mysql = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    or die("Database connection failed: ".mysqli_error($mysql)."<br>");

  //get query term
  $term = $_GET['query'];
  //intialize empty json array
  $json = array();

  if(!empty($term)){
    // -----BUILD QUERY-----
    $query = '';
    $response = $mysql->query($query)

    //-----BUILD JSON-----

  }
  */
  $json = array();
  $json['result'] = 'list';
  $json['data'] = array(
                    'General Electric' => 'GE',
                    'Facebook' => 'FCBK',
                    'Google' => 'GOOGL',
                    'LinkedIn' => 'LNKD'
                  );

  echo json_encode($json);
?>
