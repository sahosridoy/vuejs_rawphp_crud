<?php
// require_once 'db.php';
$action = "read";
$db_connect = mysqli_connect('localhost', 'root', '', 'vue_php_crud');


$data = [];


if ($action == "read") {
   $usersData = array();

   $query = "SELECT * FROM users";

   $data_form_db = mysqli_query($db_connect, $query);
   foreach ($data_form_db as $single_data) {
      array_push($usersData, $single_data);
   }
   $data['error'] = 1;
   $data['users'] = $usersData;
}

header("content-type: application/json");
echo json_encode($data);
