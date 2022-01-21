<?php
session_start();
if(isset($_SESSION['Logged'])){
	header("Location: profile.php");
	exit();
}
if (isset($_POST['login']) && isset($_POST['password'])) {
  echo "123";
  
}
if(isset($_POST['login']) || isset($_POST['password'])){
$_SESSION['e_log'] = TRUE;
echo "HASZAWAIM";
}




 ?>





<html>

<head>

  <meta charset="UTF-8"/>

  <title>WEBSITE</title>

  <link rel="stylesheet" href="../styles/style1.css"/>


  <link rel="stylesheet" href="../styles/nav.css">
  <link rel="stylesheet" href="../styles/form.css">
</head>

<body>


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

  <section class="form1">
		<h1> Zaloguj się </h1>
		<form class="form_log" method="post" action="login.php">
		Login: <input type="text" placeholder="Login" name="login"><br>
		Login: <input type="password" placeholder="haslo" name="password"><br>
		<input type="submit">
    <?php
    if(isset($_SESSION['e_log'])){
    echo '<span style="color:red">Nieprawidłowy login lub hasło</span>';
    unset($_SESSION['e_log']);
}
  ?>
		</form>
  </section>

  </section>
</body>
</html>
