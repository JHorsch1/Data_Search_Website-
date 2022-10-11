<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Creating-A-Live-Editable-Table-with-jQuery-Tabledit/jquery.tabledit.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

</head>
<body>

<?php
$record = @$_POST['search'];
include_once("db_connect.php");
?>

<div class="p-3 text-center bg-light">
    <img src="images/logo.svg" alt="Absolute Labs logo" class="img-logo">
</div>

<form action="index.php" method="post">
    <div class="form-group">
        <input type="number" class="form_control" name="search" id="record_search" placeholder="Enter Record#">
        <button tpye="submit" class="btn btn-primary btn-sm">Submit</button>
</div>

<div class="table-holder">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-sm" id="data_table">
<thead class="thead-dark">
<tr>
  <th scope="col">column1</th>
  <th scope="col">column2</th>
  <th scope="col">column3</th>
  <th scope="col">column4</th>
  <th scope="col">column5</th>
  <th scope="col">column6</th>
  <th scope="col">column7</th>
  <th scope="col">column8</th>
  <th scope="col">column9</th>
  <th scope="col">column10</th>
  <th scope="col">column11</th>
  <th scope="col">column12</th>
  <th scope="col">column13</th>
  <th scope="col">column14</th>
  <th scope="col">column15</th>
  <th scope="col">column16</th>
  <th scope="col">column17</th>
  <th scope="col">column18</th>
  <th scope="col">column19</th>
  <th scope="col">column20</th>
  <th scope="col">column21</th>
  <th scope="col">column22</th>
  <th scope="col">column23</th>
  <th scope="col">column24</th>
</tr>
</thead>
<?php

$query = mysqli_query($conn, "SELECT * FROM main WHERE Record = $record")
   or die (mysqli_error($conn));

while ($row = mysqli_fetch_array($query)) {
  echo
   "<tbody>
    <tr>
    <td>{$row['column1']}</td>
    <td>{$row['column2']}</td>
    <td>{$row['column3']}</td>
    <td>{$row['column4']}</td>
    <td>{$row['column5']}</td>
    <td>{$row['column6']}</td>
    <td>{$row['column7']}</td>
    <td>{$row['column8']}</td>
    <td>{$row['column9']}</td>
    <td>{$row['column10']}</td>
    <td>{$row['column11']}</td>
    <td>{$row['column12']}</td>
    <td>{$row['column13']}</td>
    <td>{$row['column14']}</td>
    <td>{$row['column15']}</td>
    <td>{$row['column16']}</td>
    <td>{$row['column17']}</td>
    <td>{$row['column18']}</td>
    <td>{$row['column19']}</td>
    <td>{$row['column20']}</td>
    <td>{$row['column21']}</td>
    <td>{$row['column22']}</td>
    <td>{$row['column23']}</td>
    <td>{$row['column24']}</td>
   </tr>
   </tbody>\n";
}
?>

</table>
</div>
</div>
<script type="text/javascript" src="custom_table_edit.js"></script>
</body>
</html>

