<!-- templates/list.php -->
<?php $title = "List of Surveys!" ?>

<?php ob_start() ?>
   <h2>Surveys</h2>
<form action='index.php/show' method='get'>
   <ul class="list-group">
        <?php
            foreach ($surveys as $outer) {
                echo "<li class='list-group-item'><button class='btn btn-default btn-block survey-link' type='submit' name='survey' value=" . $outer["ID"] . ">" . $outer["Question"] . "</button></li>";
            } 
        ?>
</ul>
</form>
<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>