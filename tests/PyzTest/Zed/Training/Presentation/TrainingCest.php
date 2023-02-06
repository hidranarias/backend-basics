<?php


namespace PyzTest\Zed\Training\Presentation;

use PyzTest\Zed\Training\TrainingPresentationTester;

class TrainingCest
{
    protected const URL = '/training/hello';

    public function _before(TrainingPresentationTester $I)
    {
    }

    // tests
    public function tryToTest(TrainingPresentationTester $i)
    {
        $i->amLoggedInUser();
        $i->amOnPage(static::URL);
        $i->see('hello');
    }
}
