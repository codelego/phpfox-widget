<?php

namespace Phpfox\Widget;

use Phpfox\Service\FactoryInterface;
use Phpfox\Service\ServiceManager;

/**
 * Class StandardWidgetFactory
 *
 * @package Phpfox\Widget
 */
class StandardWidgetFactory implements FactoryInterface
{
    public function factory(
        ServiceManager $serviceManager,
        $name,
        $options = []
    ) {
        return new $name($options);
    }

    public function shouldCache()
    {
        return true;
    }
}