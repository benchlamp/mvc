<!-- templates/show.php -->
<?php $title = $survey["Question"] ?>

<?php ob_start() ?>
    <h1><?= $survey["Question"] ?></h1>
    
    <table class="table table-bordered table-responsive">
    	<tr><td><?= $survey["OptionA"] ?></td><td><?= $survey["VoteA"] ?></td></tr>
        <tr><td><?= $survey["OptionB"] ?></td><td><?= $survey["VoteB"] ?></td></tr>
        <tr><td><?= $survey["OptionC"] ?></td><td><?= $survey["VoteC"] ?></td></tr>
    </table>

    <div class="chart-container"></div>

    <script src="templates/test.js"></script>

<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>