<?php


namespace Tests\Functional;

use Tests\Support;
use Tests\Support\FunctionalTester;

class HomePageTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    // tests
    public function homePage(FunctionalTester $I)
    {
        $I->sendGet('/');
        $I->seeResponseCodeIs(200);
        //$I->see('Welcome to Slim');
    }
}
