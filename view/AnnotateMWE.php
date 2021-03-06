<?php
/**
 * Created by PhpStorm.
 * User: habibih
 * Date: 6/10/2020

 */

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<?php
$now = new DateTime();
echo '<link rel="stylesheet" href="../css/MainContent.css?' . $now->format('His') . '">';
echo '<script src="../js/MultiWordExpression.js?' . $now->format('His') . '"></script>';
echo '<script src="../SharedModules/ShowLoading/ShowLoading.js?' . $now->format('His') . '"></script>';

require_once '../Config.php';

if(!isset($_GET["contentID"]))
{
    echo '<script>showMessage("Not Valid Information!",-1, 300000);</script>';
}
else
{
    $contentID = $_GET["contentID"];
    $currentPage = isset($_GET["page"]) ? $_GET["page"] : '1';
    $checkOnSubmit = false;
    $editMode = (isset($_REQUEST["mode"])) ? $_REQUEST["mode"] : "editable";

    echo '<script>goToMultiWordPage(' . $currentPage . ',' . $checkOnSubmit . ');</script>';
}

?>
<div class="dataAnnotation" id="dataAnnotationDiv">
    <form method="POST" id="MultiWordAnnotationForm" enctype='multipart/form-data'>
        <input type="hidden" id="ContentID" name="ContentID" value="<?php echo $contentID; ?>">
        <input type="hidden" id="EditMode" name="EditMode" value="<?php echo $editMode; ?>">
        <input type="hidden" id="task" name="task" value="loadMultiWordPage">
        <table width="700" id = "tableInfo">
        </table>
    </form>
</div>