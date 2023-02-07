<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;
use TrainingCommunicationFactory;


/**
 * @method  TrainingCommunicationFactory getFactory()
 */
class HelloController extends AbstractController
{
    public function indexAction()
    {
        $antelopeTransfer = new AntelopeTransfer();


        $antelopeTransfer->setName('Oskar');

        return $this->viewResponse([
            'antelope' => $antelopeTransfer,
            'name' => $this->getFactory()->getConfig()->getMyDefaultName()
        ]);
    }
}
