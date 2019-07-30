<?php

namespace App01;

use App01\Talking\Talk1;
use App01\Talking\Talk2;
use App01\Logger\Log1;
use App01\Service\SubSub\MoltoSotto;

class Rootto
{
	function getId()
	{
		$msg = '<br/> Rootto <br/>';

		$tk1 = new Talk1();
		$msg .= $tk1->getId();

		$tk2 = new Talk2();
		$msg .= $tk2->getId();

		$lg1 = new Log1();
		$msg .= $lg1->getId();

		$ms1 = new MoltoSotto();
		$msg .= $ms1->getId();

		return $msg; 
	}
}
?>