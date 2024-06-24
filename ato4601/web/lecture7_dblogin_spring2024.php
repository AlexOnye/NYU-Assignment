<?php
//Initialiize our Database Connection

//MASY_NETID | MASY_NETID
$conn = oci_connect($_POST['dbusername'], $_POST['dbpassword'], "localhost/app12cXDB", "AL32UTF8");

//ERROR HANDLING
if (!$conn){
	$e = oci_error();
	trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

//PROCESS THE RAW QUERY
if (!empty($_POST['dbquery'])){
	echo "User-Defined Query Execution";
	$stid = oci_parse($conn, $_POST['dbquery']);
}else{
	echo "Query Field is empty, Executing Default Query";
	$stid = oci_parse($conn, 'SELECT table_name FROM user_tables');
}

//Execute the DB QUERY
oci_execute($stid);

//Output the results of the query in HTML Table
echo "<table border = '1'>\n";

while($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
	echo "<tr>\n";
	foreach($row as $item){
		echo "<td>". ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</td>\n";
	}
	echo "</tr>\n";
}
echo "</table>\n";

echo "<a href = 'lecture7_Alexander_Onyegbula_Protected_Spring2024.php'>New Query/Go Back</a>";

?>