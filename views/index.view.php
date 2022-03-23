<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
    <style>
        header {
            background: #e3e3e3;
            padding: 3em;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <h1>Task for the Day</h1>
</header>
<div>
    <ul>
        <?php foreach($tasks as $task) : ?>
            <li><strong>Description: </strong>
                <?php if($task->completed) : ?>
                    <strike><?= $task->description ?></strike>
                <?php else : ?>
                    <?= $task->description ?>
                <?php endif; ?>
            <strong>Status: </strong> <?= $task->completed ? '&#9989;' : '&#10060;'; ?></li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>
