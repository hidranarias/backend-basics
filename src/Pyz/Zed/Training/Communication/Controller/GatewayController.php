<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Pyz\Zed\Training\Business\TrainingFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method TrainingFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    public function findAntelopeAction(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        return $this->getFacade()
            ->findAntelope($antelopeCriteria);
    }
}
