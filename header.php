<!-- views/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Открой мир</title>
    <style>
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        header h1 {
            margin: 0;
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
        }

        header nav ul li {
            display: inline;
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Открой мир</h1>
        <nav>
            <ul>
                <li><a href="/">Главная</a></li>
                <li><a href="/about.php">Направления</a></li>
                <li><a href="/contact.php">Контакты</a></li>
            </ul>
        </nav>
    </header>
