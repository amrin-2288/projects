<?php
 include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
 <meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
 <link rel="stylesheet" href="style.css" />
 <title>IMAGIX-USER</title>
</head>
<body>
<nav>
  <ul>
    <div id="title">
   <li id="l1">I</li>
   <li id="l2">M</li>
   <li id="l3">A</li>
   <li id="l4">G</li>
   <li id="l5">I</li>
   <li id="l6">X</li>
   <li id="usname"><?php echo $loggedin_session;?></li>
   <li id="logout"><a href="logout.php">LogOut</a></li>
</div>
</ul>
 </nav>
 <p>You are now logged in.<p>

 

 <div class="container">
    <div class="box">box1</div>
    <div class="box">box2</div>
    <div class="box">box3</div>
    <div class="box">box4</div>
    <div class="box">box5</div>
    <div class="box">box6</div>
    <div class="box">box7</div>
    <div class="box">box8</div>
    <div class="box">box9</div>
    <div class="box">box10</div>
    <div class="box">box11</div>
    <div class="box">box12</div>
    <div class="box">box13</div>
    <div class="box">box14</div>
    <div class="box">box15</div>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="imageToUpload" id="imageToUpload" required>
      <input type="text" placeholder="Title of Image" name="Title" class="title" required>
      <input type="text" placeholder="Description of Image" name="Desc" class="desc" maxlength="100">
      <input type="submit" value="Upload Image" name="submit" class="form-submit-button">
    </form>
<footer><p> Copyright &copy; 2023 Mahima R-BhavyaTara-Haveela </p></footer>
</body>
</html>