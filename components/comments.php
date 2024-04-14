<!-- views/components/comments.php -->
<?php
    $comments = file_get_contents('C:/OSPanel/domains/views/data/comments.txt');
    echo nl2br($comments);
?>
