<?php
include_once 'categoria.php';

class ReadFromFile
{
	public static function readtxt()
	{
		$allcat=array();
		$file=file('andmed.txt');
			foreach($file as $line)
			{
				$info=explode('|',$line);
				$allcat[]=new Categoria($info[0],$info[1],$info[2]);
			}
	return $allcat;
	}
	
	public static function createLinks()
	{
		//
		$cats=self::readtxt();
		foreach ($cats as $c)
		
		{
			echo '<a href="index.php?id='.$c->getId().'">'.$c->getNimetus().'</a><br>';
		}
	}
	
	public static function InfoByID($id)
	{
		$cats=self::readtxt();
		foreach ($cats as $c)
		{
			if ($c->getId()==$id)
				echo '<p >'.$c->getKirjendus().'</p> ';
		}
	}
}
?>