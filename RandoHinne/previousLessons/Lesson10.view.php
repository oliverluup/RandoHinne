<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    </style>
</head>
<body>
    <h1>Task for the day</h1>


    <ul>
        <?php /*foreach ($task as $heading => $value) : ?>
           
            <li>
                <strong><?= ucwords($heading); ?>: </strong> <?= $value; ?>
            </li>

        <?php endforeach; */?>
    </ul>

    <ul>
           
        <li>
            <strong>Name: </strong> <?= $task['title']; ?>
        </li>

        <li>
            <strong>Due date: </strong> <?= $task['due']; ?>
        </li>

        <li>
            <strong>Person responsible: </strong> <?= $task['assigned_to']; ?>
        </li>

            <?php /* 
            
            //If true then do something if not then do something else
            true ? 'do something' : 'do something else' 
            
            //Longform
            if ($condition){
                ...
            }else {
                ...
            }
            
            */ ?>
        <li>
            <strong>Status: </strong>

            <?php
            
            /*
            if ($task['completed']) {

                echo '&#9989';

            } else {

                echo 'Incomplete';

            }
            */
            ?>


            <?php if ($task['completed']) : ?> 

                <span class="icon">&#9989;</span>

            <?php else : ?>

                <span class="icon">Incomplete</span>

            <?php endif; ?>

        </li>

    </ul>

</body>
</html>