<?php
class Ptg_CouponUsage_Block_Adminhtml_Couponsusage extends Mage_Adminhtml_Block_Widget_Grid_Container
{

    public function __construct()
    {
        $this->_controller = 'adminhtml_couponsusage';
        $this->_blockGroup = 'ptg_couponusage';
        $this->_headerText = Mage::helper('ptg_couponusage')->__('Coupons Usage');

        parent::__construct();
        $this->removeButton('add');
    }

}