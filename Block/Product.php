<?php
/**
 * GiaPhuGroup Co., Ltd.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GiaPhuGroup.com license that is
 * available through the world-wide-web at this URL:
 * https://www.giaphugroup.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    PHPCuong
 * @package     PHPCuong_ProductQuickView
 * @copyright   Copyright (c) 2020-2021 GiaPhuGroup Co., Ltd. All rights reserved. (http://www.giaphugroup.com/)
 * @license     https://www.giaphugroup.com/LICENSE.txt
 */

namespace PHPCuong\ProductQuickView\Block;

class Product extends \Magento\Catalog\Block\Product\AbstractProduct
{
    /**
     * @var \PHPCuong\ProductQuickView\Helper\Data
     */
    protected $helperData;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \PHPCuong\ProductQuickView\Helper\Data $helperData
     * @param array $data
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \PHPCuong\ProductQuickView\Helper\Data $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;
        parent::__construct($context, $data);
    }

    /**
     * Display the quick view content
     *
     * @return boolean
     */
    public function displayQuickView()
    {
        if ($this->helperData->productQuickViewEnabled()) {
            return true;
        }
        return false;
    }
}
