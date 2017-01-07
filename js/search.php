<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'arplataf_sistema');
define('DB_PASSWORD', '2T;oG)RL@vJ!');
define('DB_NAME', 'arplataf_sistema');


if (isset($_GET['Dir2']))
{
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $stmt = $conn->prepare('SELECT Dir FROM Cambios WHERE Cedula LIKE :term');
	    $stmt->execute(array('term' => '%'.$_GET['term'].'%'));
	    
	    while($row = $stmt->fetch()) 
		{
	        $return_arr[] =  $row['Dir'];
	    }

	} 
	catch(PDOException $e) 
	{
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>