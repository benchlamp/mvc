<!-- templates/show.php -->
<?php $title = $survey["Question"] ?>
<?php ob_start() ?>
    <h1><?= $survey["Question"] ?></h1>
    
    <div class="body">
        <?= $survey["OptionA"] ?>
        <?= $survey["OptionB"] ?>
        <?= $survey["OptionC"] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>