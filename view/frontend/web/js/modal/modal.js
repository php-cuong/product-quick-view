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
define([
  'jquery',
  'Magento_Ui/js/modal/modal',
  'Magento_Customer/js/customer-data'
], function($, modal, customerData) {

  "use strict";

  $.widget('phpcuong_product_quickview.customModal', $.mage.modal, {
    closeModal: function () {
      var sections = ['cart'];
      customerData.invalidate(sections);
      customerData.reload(sections, true);
      $('[data-block="minicart"]').trigger('contentUpdated');
      $('#phpcuong-quickview-container').find('.quickview-content').html('');
      return this._super();
    },
  });
  return $.phpcuong_product_quickview.customModal;
});
