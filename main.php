<?php
session_start();

if (isset($_COOKIE['token'])) {
    // 如果存在Token，将Login和SignUp按钮替换为UserInfo按钮
    $userInfoButton = '<li class="nav-item active">
                          <a class="nav-link text-white" href="#">UserInfo <span class="sr-only">(current)</span></a></li>';
} else {
    // 如果不存在Token，保留Login和SignUp按钮
    $userInfoButton = '
      <li class="nav-item active">
        <a class="nav-link text-white" href="./login.php">Login<span class="sr-only">(current)</span></a></li>
      <li class="nav-item active">
        <a class="nav-link text-white" href="#">SignUp <span class="sr-only">(current)</span></a></li>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Main</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <a class="navbar-brand text-white " href="#"><h3>LoginSystem</h3></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-flex" id="navbarNav">
          <ul class="navbar-nav bg-dark ml-auto">
            <?php echo $userInfoButton; // 根据Token的存在与否来渲染按钮 ?>
          </ul>
        </div>

      </nav>
</body>
</html>