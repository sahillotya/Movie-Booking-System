<?php

//fetch.php

include('dataBase.php');

$column = array("m_id", "f_name", "l_name");

$query = "SELECT * FROM user ";

if(isset($_POST["search"]["value"]))
{
	$query .= '
	WHERE fname LIKE "%'.$_POST["search"]["value"].'%" 
	OR lname LIKE "%'.$_POST["search"]["value"].'%" 
	';
}

if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY user_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
	$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$result = $connect->query($query . $query1);

$data = array();

foreach($result as $row)
{
	$sub_array = array();
	$sub_array[] = $row['user_id'];
	$sub_array[] = $row['fname'];
	$sub_array[] = $row['lname'];
	$data[] = $sub_array;
}

function count_all_data($connect)
{
	$query = "SELECT * FROM user";

	$statement = $connect->prepare($query);

	$statement->execute();

	return $statement->rowCount();
}

$output = array(
	'draw'		=>	intval($_POST['draw']),
	'recordsTotal'	=>	count_all_data($connect),
	'recordsFiltered'	=>	$number_filter_row,
	'data'		=>	$data
);

echo json_encode($output);

?>