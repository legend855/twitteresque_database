<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Query 7</title>
</head>


<body>
  <?php
  // after log in, we retain user's details


  require('../utils/login.php');
  if($validUser){
  $tweetBody =  $_POST['tweet_body'];

  $queryTweet = "INSERT into twitts values(null,'$yourUid', '$tweetBody', NOW())";

  $resultTweet = mysqli_query($con, $queryTweet)
  or die('Query failed: '. mysqli_error($con));

  mysqli_free_result($result);
  mysqli_close($con);

}
else{
  echo $fmsg;
}
  
  session_destroy();
  
  echo "<br>";
  echo "<a href=../utils/logout.php><button> Logout</button></a>";

?>



</body>
</html>
