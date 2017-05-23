<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IngredientesRecetasFixture
 *
 */
class IngredientesRecetasFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ingredientes_recetas';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'ingrediente_id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'receta_id' => ['type' => 'integer', 'length' => 255, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'ingrediente_id' => ['type' => 'index', 'columns' => ['ingrediente_id'], 'length' => []],
            'receta_id' => ['type' => 'index', 'columns' => ['receta_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ingredientes_recetas_ibfk_1' => ['type' => 'foreign', 'columns' => ['ingrediente_id'], 'references' => ['ingredientes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'ingredientes_recetas_ibfk_2' => ['type' => 'foreign', 'columns' => ['receta_id'], 'references' => ['recetas', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'ingrediente_id' => 1,
            'receta_id' => 1
        ],
    ];
}
