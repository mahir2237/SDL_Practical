<?php
// Database connection code
$con = mysqli_connect('127.0.0.1:3307', 'root', '', 'contact1');
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
exit();
}
$txtfname = $_POST['txtfname'];
$txtmname = $_POST['txtmname'];
$txtlname = $_POST['txtlname'];
$txtpwd = $_POST['txtpwd'];
// Find the maximum ID in the table
$sql_max_id = "SELECT MAX(id) AS max_id FROM registration";
$result = mysqli_query($con, $sql_max_id);
$row = mysqli_fetch_assoc($result);
$max_id = $row['max_id'];
// Increment the max ID to get a unique value for the new record
$new_id = ($max_id !== null) ? $max_id + 1 : 1;
// Database insert SQL code
$sql = "INSERT INTO `registration` (`id`, `fname`, `mname`, `lname`, `pwd`) VALUES
('$new_id', '$txtfname', '$txtmname', '$txtlname', '$txtpwd')";
// Insert into database
$rs = mysqli_query($con, $sql);
if ($rs) {
echo "Contact Record Inserted <br> <br>";
} else {
echo "Error inserting record: " . mysqli_error($con) . "<br><br>";
}
// Select and display all records from registration table
$sql_select = 'SELECT * FROM registration';
$retval = mysqli_query($con, $sql_select);
if (!$retval) {
echo "Error fetching data: " . mysqli_error($con);
exit();
}
echo "Fetched data successfully:<br><br>";
while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
echo "EMP ID: {$row['id']}<br>" .
"EMP First NAME: {$row['fname']}<br>" .
"EMP middle name: {$row['mname']}<br>" .
"EMP Last name: {$row['lname']}<br>" .
"--------------------------------<br>";
}
// Close the connection
mysqli_close($con);
?>