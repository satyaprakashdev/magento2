<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\PageCache\Plugin;

use Magento\Framework\App\PageCache\FormKey as CacheFormKey;
use Magento\Framework\Escaper;
use Magento\Framework\Data\Form\FormKey;
use Magento\Framework\Stdlib\Cookie\CookieMetadataFactory;
use Magento\Framework\Session\Config\ConfigInterface;

/**
 * Allow for registration of a form key through cookies.
 */
class RegisterFormKeyFromCookie
{


    /**
     * @var FormKey
     */
    private $formKey;


    /**
     * @param FormKey $formKey
     */
    public function __construct(
        FormKey $formKey
    ) {
        $this->formKey = $formKey;
    }

    /**
     * Set form key from the cookie.
     *
     * @return void
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function beforeDispatch(): void
    {
        $this->formKey->getFormKey();
    }

}
