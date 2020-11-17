<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM movie WHERE m_name like '" . $_POST["keyword"] . "%' ORDER BY m_name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="movie-list">
<?php
foreach($result as $movie) {
?>
<li onClick="selectCountry('<?php echo $movie["m_name"]; ?>');"><?php echo $movie["m_name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>