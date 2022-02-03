<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $say = htmlspecialchars($_POST['fname']);
  $to  = htmlspecialchars($_POST['thoughts']);

  echo  $fname, ' ', $thoughts;
?>
<?php


if($_POST["message"]) {


mail("your@email.address", "Here is the subject line",


$_POST["insert your message here"]. "From: an@email.address");


}


?>
<form action="https://topfrop.netlify.app/responses.php" method="post">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="thoughts">Thoughts:</label><br>
  <input type="text" id="thoughts" name="thoughts" value=""><br><br>
  <input type="submit" value="Submit">
</form>
