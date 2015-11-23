<?php

$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

            if(
                preg_match("/\.googlebot\.com$/", $hostname) ||
                preg_match("/search\.msn\.com$/", $hostname) 
                
                ) {
$host= "search";
} else {
$host = "notsearch";
}
?>