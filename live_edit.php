<?php

include_once("db_connect.php");

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
    $update_field='';

    if(isset($input['column1'])) {
        $update_field.= "column1='".$input['column1']."'";
    }
    else if(isset($input['column2'])) {
        $update_field.= "column2='".$input['column2']."'";
    }
    if($update_field && $input['Record']) {
        $query = "UPDATE main SET $update_field WHERE Record='" . $input['Record'] . "'";
        mysqli_query($conn, $query) or die("database error:". mysqli_error($conn));
}
}

?>
