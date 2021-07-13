<?php

require_once(dirname(__FILE__) . '/../config.php');
require "../blocks/moodleblock.class.php";
require "../blocks/iped/block_iped.php";

$td = new block_iped();
$PAGE->set_url('/courses/class.php');

echo '<style>
body {
    margin: 0;
}
    </style>';
    
    if($td->get_iframe($USER)){
    echo "<iframe width='100%' height='100%' frameborder='0'  src=".$td->get_iframe($USER)."/>";
    }else{
        header("Location: /");
    }

?>
