<?php

namespace Koian\OwlCarousel\Plugin;

class ExamplePlugin
{

	public function beforeSetTitle(\Koian\OwlCarousel\Controller\Index\Example $subject, $title)
	{  


		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}


	public function afterGetTitle(\Koian\OwlCarousel\Controller\Index\Example $subject, $result)
	{

		echo __METHOD__ . "</br>";


		return '<h1>'. $result . 'Mageplaza.com' .'</h1>';

	}


	public function aroundGetTitle(\Koian\OwlCarousel\Controller\Index\Example $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		 $result = $proceed();
		 echo $result."<br>";
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
	}

}