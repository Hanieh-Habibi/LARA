<!DOCTYPE html>
<html lang="en">
<head>
  <title>LARA Evaluation Report</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="questionnaire.js"></script>
</head>

<?php
require_once 'Questionnaire.data.php';
$report = Report();
?>

<body>
<div class="container">
    <h2>EuroCall summary report</h2>
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Questionnaire language</th>
                <th>Gender</th>
                <th>Birth year</th>
                <th>Language expertise</th>
                <th>Teaching expertise</th>
                <th>Segment evaluation?</th>
                <th>Overall opinion?</th>
                <th>Comment?</th>
                <th>Register time</th>
                <th>Exit time</th>
            </tr>
            </thead>
            <tbody>
            <?php for($i = 0 ; $i < count($report) ; $i++) { ?>
            <tr>
                <td><?php echo $i+1 ;?></td>
                <td><?php echo $report[$i]["NameByUser"];?></td>
                <td><?php echo $report[$i]["QuestionnaireLanguage"];?></td>
                <td><?php echo $report[$i]["UserGender"];?></td>
                <td><?php echo $report[$i]["UserBirthYear"];?></td>
                <td><?php echo $report[$i]["LanguageExpertise"];?></td>
                <td><?php echo $report[$i]["TeachingExperience"];?></td>
                <td><?php echo (isset($report[$i]["segEval"]) && !empty($report[$i]["segEval"])) ? "yes" : "no";?></td>
                <td><?php echo ((isset($report[$i]["OverallV1"]) || isset($report[$i]["OverallV2"])) &&
                    (!empty($report[$i]["OverallV1"]) || !empty($report[$i]["OverallV2"]))) ? "yes" : "no"; ?></td>
                <td><?php echo (isset($report[$i]["comments"]) && !empty($report[$i]["comments"])) ? "yes" : "no";?></td>
                <td><?php echo $report[$i]["RegisterTime"];?></td>
                <td><?php echo $report[$i]["ExitTime"];?></td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>