<?php

//controllers.php
function list_action() {
    $surveys = get_all_surveys();
    require "templates/list.php";
}

function show_action($id) {
    $survey = get_survey_by_id($id);
    require "show.php";
}

?>