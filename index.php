<html>
<head>
  <meta charset="UTF-8"/>
  <title>WEBSITE</title>
  <link rel="stylesheet" href="styles/style1.css"/>
  <link rel="stylesheet" href="styles/nav.css">
  <link rel="stylesheet" href="styles/form.css">
</head>
<body>
<?php
require_once "connect.php";
$db_conn = mysqli_connect($host, $user, $password, $db_name);
$query = "SELECT * FROM user";
$wyniki = mysqli_query($db_conn, $query);

while($row = mysqli_fetch_array($wyniki)) {
  echo $row['nick'];
}
?>
<header class="header">
  <h1>Chrzescijanstwo.prv.pl</h1>
  <h2>Strona poświęcona dla rozwoju w wierze</h2>
</header>

<nav class="nav">
      <ol>
        <li>
          #####
          <ul>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
          </ul>
        </li>
        <li>

          #####

          <ul>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
          </ul>
        </li>
        <li>

          #####

          <ul>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
          </ul>
        </li>
        <li>

          #####

          <ul>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
            <li>#####</li>
          </ul>
        </li>
        <li>

          <a href="profile/profile.php">Profil</a>

          <ul>

            <li><a href="profile/login.php">Zaloguj się!</a></li>
            <li><a href="profile/register.php">Zarejestruj sie</a></li>
          </ul>
        </li>


      </ol>
    </nav>


  <section class="content">

  <section class="logform">
    123
  </section>

  </section>
</body>
</html>
