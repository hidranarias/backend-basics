<?php

namespace Pyz\Zed\Training;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class TrainingConfig extends AbstractBundleConfig
{
    public function getMyDefaultName()
    {
        return $this->getConfig()->get('hidran-name');
    }
}
