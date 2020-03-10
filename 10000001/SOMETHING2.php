<?php
include_once 'readfromfile.php';

ReadFromFile::createLinks();

if (isset($_GET['id']))
{
	ReadFromFile::InfoByID($_GET['id']);
}
?>