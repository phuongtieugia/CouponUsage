<?php
class Ptg_CouponUsage_Block_Adminhtml_Couponsusageview extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_couponsusageview';
        $this->_blockGroup = 'ptg_couponusage';
        $this->_headerText = Mage::helper('ptg_couponusage')->__('Coupons Usage View Detail');

        parent::__construct();
        $this->removeButton('add');
    }

}