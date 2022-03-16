<?php
/**
 * @author  Tigren Solutions <info@tigren.com>
 * @copyright Copyright (c) $today.year Tigren Solutions <https://www.tigren.com>. All rights reserved.
 * @license  Open Software License (“OSL”) v. 3.0
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Tigren_SimpleBlog',
    __DIR__
);