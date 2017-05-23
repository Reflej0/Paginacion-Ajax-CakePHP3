<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\IngredientesRecetasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\IngredientesRecetasTable Test Case
 */
class IngredientesRecetasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\IngredientesRecetasTable
     */
    public $IngredientesRecetas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ingredientes_recetas',
        'app.ingredientes',
        'app.recetas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('IngredientesRecetas') ? [] : ['className' => 'App\Model\Table\IngredientesRecetasTable'];
        $this->IngredientesRecetas = TableRegistry::get('IngredientesRecetas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->IngredientesRecetas);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
