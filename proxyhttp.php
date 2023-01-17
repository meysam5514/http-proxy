<?php
error_reporting(false);
header('Content-type: application/json;');

$get = file_get_contents('https://free-proxy-list.net/');
preg_match_all("#<tr><td>(.*?)</td><td>(.*?)</td><td>(.*?)</td><td class='hm'>(.*?)</td><td>(.*?)</td><td class='hm'>(.*?)</td><td class='hx'>(.*?)</td><td class='hm'>(.*?)</td></tr>#", $get, $proxy);

for($i=0; $i<count($proxy[1]); $i++){
    
$da =['IP Address'=>$proxy[1][$i],'Port'=>$proxy[2][$i],'Code'=>$proxy[3][$i],'Country'=>$proxy[4][$i],'Anonymity'=>$proxy[5][$i],'Google'=>$proxy[6][$i],'Https'=>$proxy[7][$i],'Last Checked'=>$proxy[8][$i]];
$prox[]=$da;
}    
//========================================================= 
echo json_encode(['ok' => true, 'channel' => '@SIDEPATH','writer' => '@meysam_s71',  'Results' =>$prox], 448);
//========================================================= 



