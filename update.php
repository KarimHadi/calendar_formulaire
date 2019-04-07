<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=fullcalendarevents', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE events 
 SET title=:title, event_date=:event_date, observation=:observation, client=:client, animal=:animal 
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':event_date' => $_POST['event_date'],
   ':observation' => $_POST['observation'],
   ':id'   => $_POST['id'],
   ':client' => $_POST['client'],
   ':animal' => $_POST['animal'],      
  )
 );
}

?>