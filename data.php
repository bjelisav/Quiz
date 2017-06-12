<?php
include('connection.php');
$sql = "SELECT * FROM questions";
$query = mysqli_query($db,$sql);
$arr = array();
while ($row=mysqli_fetch_assoc($query)) {
  $id = $row['id'];
  $question = $row['question'];
  $options = [$row['option1'],$row['option2'],$row['option3'],$row['option4']];
  $answer = $row['answer'];
  $category = $row['category'];
  $points = $row['points'];
  $arr[] = ['id'=>$id,'question'=>$question,'options'=>$options,'answer'=>$answer,'category'=>$category, 'points'=>$points];

}
$jsonformat = json_encode($arr);
echo $jsonformat;
