<!-- templates/list.php -->
<?php $title = "List of Surveys!" ?>

<?php ob_start() ?>
   <h2>Surveys</h2>
   <ul>
        <?php
            foreach ($surveys as $outer) {
                echo "<li>" . $outer["ID"] . " " . $outer["Question"] . "</li>";
            } 
        ?>
    </ul>
<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>