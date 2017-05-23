<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecetasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecetasTable Test Case
 */
class RecetasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecetasTable
     */
    public $Recetas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recetas',
        'app.ingredientes',
        'app.ingredientes_recetas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recetas') ? [] : ['className' => 'App\Model\Table\RecetasTable'];
        $this->Recetas = TableRegistry::get('Recetas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recetas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
