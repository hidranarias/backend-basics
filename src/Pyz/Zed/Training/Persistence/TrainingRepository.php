<?php

namespace Pyz\Zed\Training\Persistence;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method TrainingPersistenceFactory getFactory()
 */
class TrainingRepository extends AbstractRepository implements TrainingRepositoryInterface
{
    public function findAntelope(AntelopeCriteriaTransfer $antelopeCriteria): ?AntelopeTransfer
    {
        $antelopeQuery = $this->getFactory()
            ->createAntelopeQuery();

        if ($antelopeCriteria->getIdAntelope() !== null) {
            $antelopeQuery = $antelopeQuery->filterByIdAntelope($antelopeCriteria->getIdAntelope());
        } elseif ($antelopeCriteria->getName() !== null) {
            $antelopeQuery = $antelopeQuery->filterByName($antelopeCriteria->getName());
        } else {
            return null;
        }

        $antelopeEntity = $antelopeQuery->findOne();

        return (new AntelopeTransfer())->fromArray($antelopeEntity->toArray(), true);
    }
}
