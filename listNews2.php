<?php
$listNews = file_get_contents('news2.txt');
$arrList = unserialize($listNews);
foreach ($arrList as $key => $item) {

}
echo $arrList['textNews'];

