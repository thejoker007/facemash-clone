<?php


require_once('init.php');

if (isset($_POST['done']))
{
    $folder = 'photos/';
    $ext = '.jpg';
    $name = $mysqli->real_escape_string($_POST['name']);
    $mysqli->query('
    INSERT INTO photos
    SET token = "' . md5($name . 'FacemashLouistiti') . '",
        name = "' . $name . '",
        path = "' . $folder . strtolower($name) . $ext . '"');

    header ('Location: add.php');
    exit;
}
?>

<form action="" method="post">
    <input type="text" name="name" placeholder="Picture name" />
    <button type="submit" name="done">Add</button>
</form>
