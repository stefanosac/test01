<?php

namespace App01\Service\SubSub;

use App01\Service\Serv1;

class MoltoSotto
{
	function getId()
	{
		$msg = '<br/>il mio nome: MoltoSotto prj02';
		$se1 = new Serv1();
		$msg .= $se1->getId();

		$dev1 = 1;
		$dev2 = 2;

		$dev4 = 4;
		$confl = 'dev';
		
		return $msg; 
	}
}
?>