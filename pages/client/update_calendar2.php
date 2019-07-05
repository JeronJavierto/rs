<?php


$connect = new PDO('mysql:host=localhost;dbname=itproject', 'root', '');

if(isset($_POST["id"]))
{
//  $query = "
//  UPDATE reservation 
//  SET title=:title, start_event=:start_event, end_event=:end_event 
//  WHERE resID=:id
//  ";
 $updateQuery = "UPDATE reservation 
                SET title='$title', Venue='$facility', Participants='$participants'
                WHERE resID=:id";

 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':Venue'  => $_POST['facility'],
   ':Participants'  => $_POST['participants'],
   ':id'   => $_POST['id']
  )
 );
}
?>