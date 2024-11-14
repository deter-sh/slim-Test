<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class HomepageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {

        $I->amOnPage('/');
        $I->seeResponseCodeIs(200);
    }
}
