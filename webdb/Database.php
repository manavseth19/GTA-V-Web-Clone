<?php


function connect(){
    $config = parse_ini_file('db.ini');
    $con = mysqli_connect("localhost",$config['username'],$config['password'],$config['db']);
    if(!$con){
        die("Failed to connect to Database"); 
    }
    //else{
    //	echo("conn successfull");
    //}

    return $con;
}


function getSubCat($ID, $SUBID) {
    $link=connect();

    $sql = "SELECT * FROM eye_subcategories where cat_id=$ID and subcatid=$SUBID";

	if($result = mysqli_query($link, $sql)){
	    if(mysqli_num_rows($result) > 0){
	        while($row = mysqli_fetch_array($result)){
	             $cat_link=$row['SuB_Cat_Link'];
	        }
	        mysqli_free_result($result);
	    } else{
	        echo "No records matching your query were found.";
	    }
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
	return $cat_link;
}
//connect();
?>