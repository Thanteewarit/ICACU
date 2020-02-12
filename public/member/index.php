<!DOCTYPE html>
<html>
<head>
  <title>IACUC Login</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

    <main class="login">
        <img class="img-fluid mb-2" src="./img/logo_tu_320.svg" />
        <h1 class="site-title">
            <span class="line mr-3"></span>
            <span>IACUC SYSTEM</span>
            <span class="line ml-3"></span>
        </h1>
        <input type="text" placeholder="Username" />
        <input type="password" placeholder="Password" />
        <button class="btn btn-block btn-danger py-2 mb-4 mt-3" onclick="location.href='protocol-list.php';">LOGIN</button>
        <div class="row w-100">
            <button class="btn col-5 mr-auto btn-warning" onclick="location.href='register.php';">Registeration</button>
            <button class="btn col-5 ml-auto btn-secondary" onclick="location.href='forget-pass.php';">Forget Password</button>
        </div>
    </main>

    <!-- Site JS -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Site JS -->
    
</body>
</html>