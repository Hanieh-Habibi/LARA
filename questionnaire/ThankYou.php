<!DOCTYPE html>
<html lang="en">
<head>
  <title>LARA Evaluation Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="questionnaire.js"></script>
</head>
<body>
<div class="container">
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Thanks for your participation.</p>
  <p>If you want to be sure that your results were logged, you can check <a href="EuroCallReport.php" target="_blank">this page</a>.</p>
    <?php if(isset($_REQUEST["q0"])){ ?>
      <hr>
      <p class="mb-0">If you have any comments, please let us know.</p>
        <form method="post" name="UserCommentsForm" id="UserCommentsForm">
            <input type='hidden' name='UserName' id='UserName' value='<?php echo $_REQUEST["q0"];?>'>
            <input type='hidden' name='QuestionnaireID' id='QuestionnaireID' value='<?php echo $_REQUEST["q1"];?>'>
            <input type='hidden' name='task' value='SaveUserComments'>
            <div class="form-group row">
                <div class="col-sm-10">
                    <textarea class="form-control" id="UserComments" name="UserComments" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Submit comments</button>
                </div>
            </div>
        </form>
    <?php } ?>
</div>
</div>
</body>
</html>