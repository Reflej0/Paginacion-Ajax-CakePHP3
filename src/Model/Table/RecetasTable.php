<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recetas Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Ingredientes
 *
 * @method \App\Model\Entity\Receta get($primaryKey, $options = [])
 * @method \App\Model\Entity\Receta newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Receta[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Receta|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Receta patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Receta[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Receta findOrCreate($search, callable $callback = null, $options = [])
 */
class RecetasTable extends Table
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

        $this->setTable('recetas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Ingredientes', [
            'foreignKey' => 'receta_id',
            'targetForeignKey' => 'ingrediente_id',
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
    public function buscarIngredientes(){
        $ingredientes = $this->Ingredientes->find('list', ['limit' => 200,
                                                           'keyField' => 'id',
                                                           'valueField' => 'nombre'])
                                                    ->toArray();
        return $ingredientes;
    }
}
