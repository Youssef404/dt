<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @property \App\Model\Table\EstablishmentsTable|\Cake\ORM\Association\BelongsTo $Establishments
 * @property \App\Model\Table\MajorsTable|\Cake\ORM\Association\BelongsTo $Majors
 *
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, callable $callback = null, $options = [])
 */
class StudentsTable extends Table
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

        $this->setTable('students');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Establishments', [
            'foreignKey' => 'establishment_id'
        ]);
        $this->belongsTo('Majors', [
            'foreignKey' => 'major_id',
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 255)
            ->requirePresence('first_name', 'create')
            ->allowEmptyString('first_name', false,'Ce champ ne peut pas etre vide !!!');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 255)
            ->requirePresence('last_name', 'create')
            ->allowEmptyString('last_name', false);

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 10)
            ->allowEmptyString('phone_number');

        $validator
            ->scalar('tutor_first_name')
            ->maxLength('tutor_first_name', 255)
            ->allowEmptyString('tutor_first_name');

        $validator
            ->scalar('tutor_last_name')
            ->maxLength('tutor_last_name', 255)
            ->allowEmptyString('tutor_last_name');

        $validator
            ->scalar('tutor_job')
            ->maxLength('tutor_job', 255)
            ->allowEmptyString('tutor_job');

        $validator
            ->scalar('tutor_phone_number')
            ->maxLength('tutor_phone_number', 255)
            ->allowEmptyString('tutor_phone_number');

        $validator
            ->scalar('scolarship')
            ->maxLength('scolarship', 3)
            ->requirePresence('scolarship', 'create')
            ->allowEmptyString('scolarship', false);

        $validator
            ->scalar('level')
            ->maxLength('level', 255)
            ->requirePresence('level', 'create')
            ->allowEmptyString('level', false);

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
        $rules->add($rules->existsIn(['establishment_id'], 'Establishments'));
        $rules->add($rules->existsIn(['major_id'], 'Majors'));

        return $rules;
    }
}
