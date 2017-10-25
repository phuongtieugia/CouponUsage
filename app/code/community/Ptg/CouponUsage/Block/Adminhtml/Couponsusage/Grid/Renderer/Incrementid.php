<?php

/**
 * Order increment id link renderer
 */
class Ptg_CouponUsage_Block_Adminhtml_Couponsusage_Grid_Renderer_IncrementId
    extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{

    public function render(Varien_Object $row)
    {
        $order_id = $row->getEntityId();
        $increment_id = $row->getIncrementId();

        $order_url = $this->getUrl('adminhtml/sales_order/view', array('order_id' => $order_id));
        return sprintf('<a href="%s">%s</a>', $order_url, $increment_id);
    }

}
