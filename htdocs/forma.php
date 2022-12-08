<?php

include 'connection.php';

$query = "SELECT * FROM orders";
$result = $pdo->query($query);

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['plants']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $email = $_POST['plants'];
    $query = "INSERT INTO orders(name, email, plants) VALUES ('$name', '$email','$plants')";
    $result = $pdo->query($query);
} echo '<script>alert("Форма успешно отравлена")
window.location="index.php"</script>'


?>