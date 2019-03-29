<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SupportForm\Model;

//use Magento\SupportForm\Api\SupportInterface;

/**
 * Support interface.
 * @api
 * @since 0.0.1
 */
class SupportApi
{
  /**
     * Post Support Message
     *
     * @return obj
     */
  public function postMessage(string $customerEmail, string $message, string $subject) {
   return "Your message " . $message;
  }
}