<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * IngredientesRecetas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Ingredientes
 * @property \Cake\ORM\Association\BelongsTo $Recetas
 *
 * @method \App\Model\Entity\IngredientesReceta get($primaryKey, $options = [])
 * @method \App\Model\Entity\IngredientesReceta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\IngredientesReceta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\IngredientesReceta findOrCreate($search, callable $callback = null, $options = [])
 */
class IngredientesRecetasTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('ingredientes_recetas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Ingredientes', [
            'foreignKey' => 'ingrediente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Recetas', [
            'foreignKey' => 'receta_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['ingrediente_id'], 'Ingredientes'));
        $rules->add($rules->existsIn(['receta_id'], 'Recetas'));

        return $rules;
    }
}
