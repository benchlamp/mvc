<?php

require_once "model.php";
$question = get_survey_by_id($_GET["id"]);



require "templates/show.php";

?>