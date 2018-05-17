<?php
/*
Plugin Name: Bot Counter IV
Plugin URI: http://wpadverts.com/bot-plugin/
Description: Plugin is counting bots visits
Author: Greg Winiarski : built by 29A
Version: 1.0.3
Author URI: http://wpadverts.com/
*/

/* 
Tutorial: https://wpadverts.com/blog/how-to-create-wordpress-plugin-from-a-scratch/

add_action($predefined_plugin_hook, $our_function_name); <- command. 

Predefined plugin hook is one of the actions, while “function name” 
is a function which we wrote, or which we will write in our case.
*/

//Create a new table called bot_counter
//Create 4 columns; id, bot_name, bot_mark, bot_visits 
function bot_install()
{
    global $wpdb;
    $table = $wpdb->prefix."bot_counter";
    $structure = "CREATE TABLE $table (
        id INT(9) NOT NULL AUTO_INCREMENT,
        bot_name VARCHAR(80) NOT NULL,
        bot_mark VARCHAR(20) NOT NULL,
        bot_visits INT(9) DEFAULT 0,
	UNIQUE KEY id (id)
    );";
    $wpdb->query($structure);
 
    // Populate table
    $wpdb->query("INSERT INTO $table(bot_name, bot_mark)
        VALUES('Google Bot', 'googlebot')");
    $wpdb->query("INSERT INTO $table(bot_name, bot_mark)
        VALUES('Yahoo Slurp', 'yahoo')");
}
          //WP Hook_ // Relative Path // function name (assigned by developer)
add_action('activate_bot/bots.php', 'bot_install');

//Identifies the type of browser visiting the site
//Pulls results from the bot_counter table
//Updates the bot_mark for the corresponding browser
function bot()
{
    global $wpdb;
    $browser_name = $_SERVER['HTTP_USER_AGENT'];
    $bots = $wpdb->get_results("SELECT * FROM ".
        $wpdb->prefix."bot_counter");
 
    foreach($bots as $bot)
    {
        if(eregi($bot->bot_mark, $browser_name))
        {
            $wpdb->query("UPDATE ".$wp->prefix."bot_counter 
                SET bot_visits = bot_visits+1 WHERE id = ".$bot->id);
 
            break;
        }
    }
}
			//WP Hook  //function name (assigned by developer)
add_action('wp_footer', 'bot');

//Registers Global Variable $wpdb
//Registers additional file as inlcude
function bot_menu()
{
    global $wpdb;
    include 'bot-admin.php';
	
}

//Adds an Admin Page for the plugin
function bot_admin_actions()
{
    add_options_page("Bot Counter", "Bot Counter", 1,
"Bot-Counter", "bot_menu");
}

			//WP Hook  //function name (assigned by developer) 
add_action('admin_menu', 'bot_admin_actions');

?>