<?php 

include('dataconnection.php');

$connection=mysqli_connect($server,$user,$password);
if(!$connection){
	echo "Failed to connect to MySQL";
	return;
}

$seleccionaBD=mysqli_select_db($connection,$BD) or die();
if(!$seleccionaBD){
	echo "Database not found";
	return; 
}
		$response=mysqli_query($connection,"select * from acid_event");
		//The var $response takes the value: true/false 

		$vector=mysqli_fetch_row($response);

		do{
		echo "id: $vector[0]-nombre: $vector[1]- Domicilio: $vector[2]-Telefono: $vector[3],";
		$vector=mysqli_fetch_row($response);

		}while($vector);


/*if the switch is ENABLED
select sig_name from acid_event;
*/

/*if the switch is DISBLED 
	select * from acid_event;
*/

 ?>
