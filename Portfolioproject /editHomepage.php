<?php require "displayData.php";
?>
<form action="phpformsfunctions/phpAddFunction.php" method="post">
    <input type="hidden" name="content_name" value="homepage">
   <br>
    Edit Content:<br>
    <textarea name="text_content"> <?php echo selectHomepageData(); ?> </textarea>
    <input type="submit" value="Submit">
</form>
