<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\VouchersTable|\Cake\ORM\Association\HasMany $Vouchers
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Vouchers', [
            'foreignKey' => 'employee_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false);

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->date('birth_date')
            ->allowEmptyDate('birth_date');

        $validator
            ->date('hire_date')
            ->allowEmptyDate('hire_date');

        $validator
            ->scalar('role')
            ->maxLength('role', 20)
            ->requirePresence('role', 'create')
            ->allowEmptyString('role', false);

        return $validator;
    }
}
