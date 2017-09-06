<?php
/**
 * Created by PhpStorm.
 * User: haunt
 * Date: 8/16/2017
 * Time: 11:50 AM
 */

namespace Hello\Isobar\Controller\Isobar;

class World extends \Magento\Framework\App\Action\Action
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