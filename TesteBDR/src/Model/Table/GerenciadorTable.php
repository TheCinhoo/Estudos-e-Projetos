<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gerenciador Model
 *
 * @method \App\Model\Entity\Gerenciador get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gerenciador newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gerenciador[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gerenciador|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gerenciador patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gerenciador[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gerenciador findOrCreate($search, callable $callback = null, $options = [])
 */
class GerenciadorTable extends Table
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

        $this->setTable('gerenciador');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->requirePresence('titulo', 'create')
            ->notEmpty('titulo');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        return $validator;
    }
}
