<?php
$sql=mysql_query("SELECT * FROM messages ORDER BY mes_id DESC LIMIT 20");
while($row=mysql_fetch_array($sql))
		{
		$msgID= $row['mes_id'];
		$msg= $row['msg'];

?>
<div id="<?php echo $msgID; ?>"  align="left" class="message_box" >
<span class="number"><?php echo $msgID; ?></span><?php echo $msg; ?> 
</div>

<?php
}
?>
