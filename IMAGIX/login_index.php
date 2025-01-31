<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="login.css">

</head>

<body>

     <form action="login.php" method="post">
        
        <h1 id="title"><span id="l1">I</span><span id="l2">M</span><span id="l3">A</span><span id="l4">G</span><span id="l5">I</span><span id="l6">X</span><h1>
        <h2>Login</h2>
        <hr>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>Email<span id="ast">*</span></label>

        <input type="email" name="email" placeholder="Email" required><br>

        <label>Password<span id="ast">*</span></label>

        <input type="password" name="password" placeholder="Password" required><br> 

        <p>Don't have an account? <a href="register.php"><span id="signup">Sign up</span></a></p>
        

        <button type="submit">Login</button>

     </form>

</body>

</html>