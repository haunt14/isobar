<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 07/09/2017
 * Time: 11:17
 */
namespace Isobarh\Slider\Controller\Slider;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;
    public function __construct(\Magento\Framework\App\Action\Context $data, \Magento\Framework\View\Result\PageFactory $resultPageFactory)
    {
        $this->_resultPageFactory = $resultPageFactory;
        return parent::__construct($data);
    }
    public function execute()
    {
        $resultPage = $this->_resultPageFactory->create();
        return $resultPage;
    }
}