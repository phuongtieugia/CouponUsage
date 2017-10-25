<?php
/**
 * Coupon usage admin controller
 */
class Ptg_CouponUsage_Adminhtml_CouponsusageviewController extends Mage_Adminhtml_Controller_Action
{

    /**
     * Check ACL rules
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return Mage::getSingleton('admin/session')
                        ->isAllowed('promo/ptg_couponusage');
    }

    /**
     * Set page title
     *
     * @return Ptg_CouponsUsage_Adminhtml_CouponsUsageController
     */
    protected function _initAction()
    {
        $this->loadLayout()
                ->_setActiveMenu('promo/ptg_couponusage')
                ->_addBreadcrumb(Mage::helper('adminhtml')->__('Promotions'), Mage::helper('ptg_couponusage')->__('Coupons Usage'))
                ->_title(Mage::helper('ptg_couponusage')->__('Coupons Usage View Detail'));
        return $this;
    }

    /**
     * Display grid
     */
    public function indexAction()
    {
        $this->_initAction();
        $this->renderLayout();
    }


    /**
     * Export coupons grid to CSV format
     */
    public function exportCsvAction()
    {
        $fileName = 'CouponUsageview.csv';
        $content = $this->getLayout()->createBlock('ptg_couponusage/adminhtml_couponsusageview_grid');
        $this->_prepareDownloadResponse($fileName, $content->getCsvFile());
    }

    /**
     * Export coupons grid to XML format
     */
    public function exportXmlAction()
    {
        $fileName = 'CouponUsageview.xml';
        $content = $this->getLayout()->createBlock('ptg_couponusage/adminhtml_couponsusageview_grid');

        $this->_prepareDownloadResponse($fileName, $content->getExcelFile());
    }

}