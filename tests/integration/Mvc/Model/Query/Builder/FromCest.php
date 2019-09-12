<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Model\Query\Builder;

use IntegrationTester;
use Phalcon\Test\Models\RobotsParts;

/**
 * Class FromCest
 */
class FromCest
{
    /**
     * Tests Phalcon\Mvc\Model\Query\Builder :: from()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelQueryBuilderFrom(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model\Query\Builder - from()');
        $builder = new Phalcon\Mvc\Model\Query\Builder();
        $builder->addFrom(RobotsParts::class);

        $expectedQuery = "SELECT [".RobotsParts::class."].* FROM [".RobotsParts::class."]";
        $I->assertEquals($expectedQuery, $builder->getQuery());
    }
}
