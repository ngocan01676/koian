<?php

namespace Koian\OwlCarousel\Controller\Result;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;

class Result extends \Magento\Framework\App\Action\Action
{

     /**
     * @var Magento\Framework\View\Result\PageFactory
     */
    protected $resultPageFactory;

    protected $resultJsonFactory; 

    /**
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory,
        JsonFactory $resultJsonFactory
        )
    {

        $this->resultPageFactory = $resultPageFactory;
        $this->resultJsonFactory = $resultJsonFactory; 
        return parent::__construct($context);
    }


    public function execute()
    {
        $height = $this->getRequest()->getParam('height');
        $weight = $this->getRequest()->getParam('weight');
        $output=$height+$weight;
        $result = $this->resultJsonFactory->create();
        $resultPage = $this->resultPageFactory->create();

        $block = $resultPage->getLayout()
                ->createBlock('Koian\OwlCarousel\Block\Ajaxform')
                ->setTemplate('Koian_OwlCarousel::result.phtml')
                ->setData('height',$height)
                ->setData('weight',$weight)
                ->toHtml();

        $result->setData(['output' => $output]);
        return $result;
    } 
}