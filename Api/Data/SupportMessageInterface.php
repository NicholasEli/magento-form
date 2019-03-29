<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\SupportForm\Api\Data;

/**
 * Support interface.
 * @api
 * @since 0.0.1
 */
interface SupportMessageInterface
{
    /**
     * Post Support Message
     *
     * @return obj
     */
    public function postMessage(string $customerEmail, string $message, string $subject);
}