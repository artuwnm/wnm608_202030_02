<!DOCTYPE html>
<html lang="en">
<head>
  <title>Learning Data</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../lib/css/gridsystem.css" type="text/css">
  <link rel="stylesheet" href="../lib/css/styleguide.css" type="text/css">
  <link rel="stylesheet" href="../css/storetheme.css" type="text/css">
  <script src="index.js"></script>
</head>
<body>
  <header class="navbar">
    <div class="container display-flex">
      <div class="flex-stretch">
        <h1>Admin</h1>
      </div>
      <nav class="nav-flex flex-none">
        <ul>
          <li><a href="users.php">User List</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <?php
include "../lib/php/functions.php";

$USER_DATA_FILE = "../data/users.json";

$users = getData($USER_DATA_FILE);

if (isset($_GET['id'])) {
  $has_update = false;
  $curr_user = $users[$_GET['id']];
  if (isset($_POST["type"]) && !empty($_POST["type"])) {
    if (check_valid_type($_POST["type"])) {
      $curr_user->type = $_POST["type"];
      $has_update = true;
    } else {
      echo "Invalid type: " . $_POST["type"] . ", please try again.";
    }
  }
  if (isset($_POST["email"]) && !empty($_POST["email"])) {
    if (check_valid_email($_POST["email"])) {
      $curr_user->email = $_POST["email"];
      $has_update = true;
    } else {
      echo "Invalid email: " . $_POST["email"] . ", please try again.";
    }
  }
  if (isset($_POST["classes"]) && !empty($_POST["classes"])) {
    if (check_valid_email($_POST["email"])) {
      $curr_user->classes = explode(",", trim($_POST["classes"]));
      $has_update = true;
    } else {
      echo "Invalid classes: " . $_POST["classes"] . ", please try again.";
    }
  }
  if ($has_update) {
    writeData($USER_DATA_FILE, $users);
  }
}



function showUserPage($user, $id) {
  $classes = implode(", ", $user->classes);

echo <<<HTML
<nav class='nav-crumbs'>
  <ul>
    <li><a href='users.php'>Back</a></li>
  </ul>
</nav>
<div>
  <h2>$user->name</h2>
  <div>
    <strong>Type</strong>
    <span>$user->type</span>
    <br>
  </div>
  <div>
    <strong>Email</strong>
    <span>$user->email</span>
  </div>
  <div>
    <strong>Classes</strong>
    <span>$classes</span>
  </div>
</div>
<br>
Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
HTML;
}

?>



  <?php
      
    if (isset($_GET['id'])) {
      showUserPage($users[$_GET['id']], $_GET['id']);
    } else {

echo "
  <div class='container'>
    <div class='card soft'>
     
      <h2>User List</h2>
      <nav class='nav'>
      <ul>
      ";
      foreach($users as $i=>$user) {
        echo "
        <li>
          <a href='users.php?id=$i'>$user->name</a>
        </li>
        ";
      }
echo "
      </ul>
      </nav>
    </div>
  </div>
";

    }
  ?>
  
</body>
</html>