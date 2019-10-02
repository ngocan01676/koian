<?php

namespace Koian\AddToCart\Plugin;
use \Magento\Checkout\Model\Cart\CartInterface;
use \Magento\Framework\Message\ManagerInterface as MessageManager; 
class AddToCartmessage{
  
  private $messageManager;

  public function __construct(MessageManager $messageManager)
  {
  	$this->messageManager=$messageManager;

  }

  public function afteraddProduct(\Magento\Checkout\Model\Cart\CartInterface $cart,$result)
  {
       $this->messageManager->addNoticeMessage('Order over $50 get free shipping');
       // or if you are feeling fun
       $this->messageManager->addNoticeMessage('Two Brilling and the slithy toaths did jire and jimble in the wabe');
        return $result;

  }
}