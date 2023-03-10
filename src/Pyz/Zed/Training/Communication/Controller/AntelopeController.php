<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Business\TrainingFacadeInterface;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method TrainingFacadeInterface getFacade()
 */
class AntelopeController extends AbstractController
{
    public function addAction(Request $request): array
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName($request->query->get('name') ?? 'Oskar');

        $antelopeResponseTransfer = $this->getFacade()
            ->findAntelope((new AntelopeCriteriaTransfer())->setName($antelopeTransfer->getName()));

        if (!$antelopeResponseTransfer->getAntelope()) {
            $antelopeTransfer = $this->getFacade()
                ->createAntelope($antelopeTransfer);
        }

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
        ]);
    }
}
