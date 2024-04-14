<?php
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';

    if (!empty($name) && !empty($email)) {
        $data = "Name: $name\nEmail: $email\n\n";
        file_put_contents('../views/data/comments.txt', $data, FILE_APPEND);
    }

    header('Location: ../index.php');
?>
