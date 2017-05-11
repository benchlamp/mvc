console.log("linked d3pie.js file in show.php is running");

$("*").css("color", "lightgray");

console.log(survey);

console.log(survey.Question);

    var dataObj = [
      {[survey.OptionA] : survey.VoteA},
      {[survey.OptionB] : survey.VoteB},
      {[survey.OptionC] : survey.VoteC}
    ]

console.log(dataObj);