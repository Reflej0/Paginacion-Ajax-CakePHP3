<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ingredientes Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Recetas
 *
 * @method \App\Model\Entity\Ingrediente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ingrediente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ingrediente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ingrediente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ingrediente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ingrediente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ingrediente findOrCreate($search, callable $callback = null, $options = [])
 */
class IngredientesTable extends Table
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

        $this->setTable('ingredientes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Recetas', [
            'foreignKey' => 'ingrediente_id',
            'targetForeignKey' => 'receta_id',
            'joinTable' => 'ingredientes_recetas'
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

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        return $validator;
    }
    public function buscarRecetas(){
        $recetas= $this->Recetas->find('list', ['limit' => 200,
                                                           'keyField' => 'id',
                                                           'valueField' => 'nombre'])
                                                    ->toArray();
        return $recetas;
    }
}
