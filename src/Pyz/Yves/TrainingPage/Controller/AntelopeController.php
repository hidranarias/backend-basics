<?php

namespace Pyz\Yves\TrainingPage\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Pyz\Yves\TrainingPage\TrainingPageFactory;
use Spryker\Yves\Kernel\View\View;
use SprykerShop\Yves\ShopApplication\Controller\AbstractController;

/**
 * @method TrainingPageFactory getFactory()
 */
class AntelopeController extends AbstractController
{
    public function getAction(string $name): View
    {
        $antelopeCriteriaTransfer = new AntelopeCriteriaTransfer();
        $antelopeCriteriaTransfer->setName($name);

        $antelopeResponseTransfer = $this->getFactory()
            ->getTrainingClient()
            ->findAntelope($antelopeCriteriaTransfer);
        $currentStore = $this->getFactory()
            ->getStoreClient()
            ->getCurrentStore();
        return $this->view(
            [
                'antelope' => $antelopeResponseTransfer->getAntelope(),
                'store' => $currentStore
            ],
            [],
            '@TrainingPage/views/antelope/get.twig'
        );
    }
}
