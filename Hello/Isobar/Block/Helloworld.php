<?php
/**
 * Created by PhpStorm.
 * User: haunt
 * Date: 8/16/2017
 * Time: 12:51 PM
 */

namespace Hello\Isobar\Block;
use Magento\Framework\View\Element\Template;
class Helloworld extends \Magento\Framework\View\Element\Template
{
    public $danhsach;

    public function __construct(Template\Context $context, array $data = [])
    {
        $this->danhsach = date("Y-m-d H:i:s");
        parent::__construct($context, $data);
    }
    protected function _prepareLayout(){

    }
    public function getHelloWorldTxt()
    {
        return 'Hello Isobar company';
    }
}