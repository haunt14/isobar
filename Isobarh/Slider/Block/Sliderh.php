<?php
/**
 * Created by PhpStorm.
 * User: administrator
 * Date: 07/09/2017
 * Time: 11:36
 */

namespace Isobarh\Slider\Block;
use Magento\Framework\View\Element\Template;
class Sliderh extends \Magento\Framework\View\Element\Template
{


    public function __construct(Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }
    protected function _prepareLayout(){

    }
    public function getSliderTxt()
    {
        return 'Slider Isobar';
    }
}