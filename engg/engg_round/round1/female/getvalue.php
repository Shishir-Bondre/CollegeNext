<?php
require_once('config.php');
$qry = 'SELECT * FROM `branch` WHERE college_id='.$_POST['id'];
print_r($qry);
$sql = mysql_query($qry);
while($row = mysql_fetch_array($sql)){
?>
	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
<?php } ?>