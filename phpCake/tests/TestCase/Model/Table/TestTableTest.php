<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TestTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TestTable Test Case
 */
class TestTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TestTable
     */
    protected $Test;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Test',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Test') ? [] : ['className' => TestTable::class];
        $this->Test = $this->getTableLocator()->get('Test', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Test);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TestTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
