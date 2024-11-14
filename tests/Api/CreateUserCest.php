<?php


namespace Tests\Api;

use Tests\Support\ApiTester;

class CreateUserCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPost('/users', [
            'name' => 'davert',
            'email' => 'davert@codeception.com'
        ]);
    }
}
