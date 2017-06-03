<?php
require_once"vendor/autoload.php";
$data = new App\Classes\Main;
//search, order column, order dir
$data->initQuery(
  (isset($_POST['search']['value']) ? $_POST['search']['value'] : null),
  (isset($_POST['order']['0']['column']) ? $_POST['order']['0']['column'] : null),
  (isset($_POST['order']['0']['dir']) ? $_POST['order']['0']['dir'] : null)
);

$filterdata = $data->get_filtered_data();
$fetchdata = $data->make_datatables($_POST['length'],$_POST['start']);
$getalldata = $data->get_all_data();
$data = array();
foreach ($fetchdata as $key => $value) {
  $sub_data = array();
  $sub_data[] = $value->nama;
  $sub_data[] = $value->email;
  $sub_data[] = $value->alamat;
  $data[] = $sub_data;
}

$output = array(
  "draw"=>intval($_POST['draw']),
  "recordsTotal" => $getalldata,
  "recordsFiltered"=> $filterdata,
  "data"=>$data
);
header('Content-Type: application/json');
echo json_encode($output);

 ?>
