<?php

/**
 * @copyright EveryWorkflow. All rights reserved.
 */

declare(strict_types=1);

namespace EveryWorkflow\PimBundle;

use EveryWorkflow\PimBundle\DependencyInjection\PimExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EveryWorkflowPimBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new PimExtension();
    }
}
