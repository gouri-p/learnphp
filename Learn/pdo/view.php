<?php
session_start();
?>
<?php

require_once "pdo.php";
$failure = false;
$success = false;

if (!isset($_SESSION['name']))
{
    die("Not logged in");
}
elseif (isset($_POST['logout']) && $_POST['logout'] == 'Logout')
{
    header('Location: logout.php');
}

$stmt = $pdo->query("SELECT make, year, mileage FROM autos");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <?php require_once "bootstrap.php"; ?>
    <title>GOURI PATTAR</title>
</head>
<body>
<div class="container">
    <h1>Tracking Autos for <?php echo $_SESSION['name']; ?></h1>
    <?php
    if (isset($_SESSION['success']))
    {
        // Look closely at the use of single and double quotes
        echo('<p style="color: green;">' . htmlentities($_SESSION['success']) . "</p>\n");
        unset($_SESSION['success']);
    }
    ?>
    <h2>Automobiles</h2>
    <ul>

        <?php
        foreach ($rows as $row)
        {
            echo '<li>';
            echo htmlentities($row['make']) . ' ' . $row['year'] . ' / ' . $row['mileage'];
        };
        echo '</li><br/>';
        ?>
    </ul>

</div>
<div>
  <p> <a href="add.php">   Add New | </a><a href="logout.php">Logout</a></p>
</body>
