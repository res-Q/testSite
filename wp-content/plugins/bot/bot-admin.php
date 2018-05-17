<?php $wpdb->query("UPDATE ".$wp->prefix."bot_counter SET bot_visits = 0");?>

<div id="message" class="updated fade">
 
Bot Counter Stats Reset Page</div>
<div class="wrap">
<h2>Bot Counter Admin</h2>
<?php
	$results = $wpdb->get_results(
		$wpdb->prepare("SELECT * FROM ".$wpdb->prefix."bot_counter",'void'));
	foreach($results as $result)
	{
    	echo $result->bot_name.": ";
    	echo $result->bot_visits." | ";
	}
?>
 
<a href="?page=<?php echo $_GET['page']; ?>&bot-counter=reset">
    Reset Stats
</a>
</div>