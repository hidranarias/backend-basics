<?php

namespace Pyz\Zed\Training\Business\Writer;

use Generated\Shared\Transfer\AntelopeTransfer;
use Pyz\Zed\Training\Persistence\TrainingEntityManagerInterface;

class AntelopeWriter
{


    public function __construct(protected TrainingEntityManagerInterface $trainingEntityManager)
    {
    }

    public function create(AntelopeTransfer $antelopeTransfer): AntelopeTransfer
    {
        return $this->trainingEntityManager->createAntelope($antelopeTransfer);
    }
}
