<?php require('partials/head.php'); ?>
<div>
    <h1>Tasks for the Day</h1>
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
<div>
    <form action="/tasks" method="post">
        <h1>Enter a new task</h1>

        <input name="description" type="text">

        <button type="submit">Save</button>
    </form>
</div>
<?php require('partials/footer.php');
