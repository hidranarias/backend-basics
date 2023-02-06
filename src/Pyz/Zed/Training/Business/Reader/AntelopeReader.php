<?php

namespace Pyz\Zed\Training\Business\Reader;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeResponseTransfer;
use Pyz\Zed\Training\Persistence\TrainingRepositoryInterface;

class AntelopeReader
{


    public function __construct(protected TrainingRepositoryInterface $trainingRepository)
    {
    }

    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): AntelopeResponseTransfer
    {
        $antelopeTransfer = $this->trainingRepository
            ->findAntelope($antelopeCriteria);

        $antelopeResponseTransfer = new AntelopeResponseTransfer();
        $antelopeResponseTransfer
            ->setIsSuccessful(false);

        if ($antelopeTransfer) {
            $antelopeResponseTransfer
                ->setAntelope($antelopeTransfer)
                ->setIsSuccessful(true);
        }

        return $antelopeResponseTransfer;
    }
}
