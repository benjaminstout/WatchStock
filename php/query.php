<?php
	//Script to query WatchStock stock items from DB
  //Written by: Benjamin Stout | 2016-05-12

  // Get query term
  $term = $_GET['query'];
  // Get query search flag [true/false]
  $search = $_GET['search'];
  // Check for empty parameter
  if(!empty($term) && !empty($search)){

    // Intialize empty json array
    $json = array();

    // -----CONNECT TO DB-----
    //include DB constants
    include __DIR__ . '/db_core.php';
    //open connection to DB
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    // Return connection error
    if ($mysqli->connect_errno) {
      // PROD
      //$json['error'] = $mysqli->connect_errno;
      // DEBUGGING
      $json['error'] = $mysqli->connect_error;
      exit(json_encode($json));
    }

    // -----BUILD QUERY-----
    if(search) $query = 'SELECT symName, symExchange FROM symbols WHERE symExchange LIKE {$term} OR symName LIKE {$term}';
    else {
      //type is history
      //$query = 'SELECT symName, symExchange FROM symbols WHERE symExchange LIKE {$term} OR symName LIKE {$term}';
      //type is quote
    }


    // -----QUERY DB-----
    if ($result = $mysqli->query($query)){

      // Parse response and build JSON
      $json['data'] = array();

      while ($row = $result->fetch_row()) {
        array_push($json['data'], array($row[0] => $row[1]))
      }

      /* free result set */
      $result->close();
    }
  }
  mysqli->close();
  exit(json_encode($json));
?>
