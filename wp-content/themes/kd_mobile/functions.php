<?php
DEFINE('PATH_TO_IMG', get_template_directory_uri().'/images');

function connect_db(){
    require_once 'EasyMySQLi.inc.php'; 
    $db = new EasyMySQLi('localhost', 'root', '', 'wp_inoffsethcm'); 
    $db->set_charset("utf8");
    return $db;
}

$db = connect_db();
//var_dump($db);

function detect_click_tac($ip){
    $db = connect_db();    
    $yesterday = strtotime('-3 day', time());
    $result = $db->queryAllRows('SELECT url FROM k_visit WHERE IP=? AND time > ? AND google_ad=1', $ip, $yesterday);     
    $tmp = array();
    foreach($result as $item){
        $tmp[]=$item['url'];
    }    
    $result = array_count_values($tmp);
    if(count($result)>3){
        $db->queryNoResult('UPDATE k_visit SET click_tac=1 WHERE IP=?', $ip);
    }   
}

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );


function myphpinformation_scripts() {    


    if( !is_admin()){
     wp_deregister_script('jquery');
     wp_register_script('jquery', get_stylesheet_directory_uri() . '/js/jquery.min.js', false);
     wp_enqueue_script('jquery');
    }
}

add_action( 'wp_enqueue_scripts', 'myphpinformation_scripts' );