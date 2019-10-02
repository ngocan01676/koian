<?php

namespace Koian\OwlCarousel\Controller\Index;

class Example extends \Magento\Framework\App\Action\Action
{

	protected $title;

	public function execute()
	{
		echo $this->setTitle('Welcome');
		echo $this->getTitle();
	}

	public function setTitle($title)
	{
	   $this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}
}