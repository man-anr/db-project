<?php  
//action.php
include('../database/config.php');

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
$update_field='';
if(isset($input['name'])) {
$update_field.= "name='".$input['name']."'";
} else if(isset($input['password'])) {
$update_field.= "password='".$input['password']."'";
}
if($update_field && $input['id']) {
$sql_query = "UPDATE admin SET $update_field WHERE id='" . $input['id'] . "'";
mysqli_query($con, $sql_query) or die("database error:". mysqli_error($con));
}
}
?>