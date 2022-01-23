<?php
$listNews = file_get_contents('news2.txt');
$arrList = unserialize($listNews);
foreach ($arrList as $key => $item) {

}
$content = $arrList['content'];
echo 'Название: ', $arrList['name'], "<br>", 'Краткое содержание: ', "<a href='listNews2.php'>$content</a>", "<br>" , $arrList['date'], "<br>";

echo "<img src =/home/vycheslav/palmo-docker/src/uploads/image.jpg>";

