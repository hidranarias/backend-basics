<?php

namespace Pyz\Zed\Training\Communication\Controller;

use Generated\Shared\Transfer\AntelopeTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class HelloController extends AbstractController
{
    public function indexAction()
    {
        $antelopeTransfer = new AntelopeTransfer();
        $antelopeTransfer->setName('Oskar');

        return $this->viewResponse([
            'antelope' => $antelopeTransfer
        ]);
        return $this->viewResponse(['helloWorldText' => 'Hello world']);
    }
}