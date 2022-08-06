<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey('user_id');

        $this->belongsToMany('Products', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'product_id',
            'joinTable' => 'users_products',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('user_id')
            ->allowEmptyString('user_id', null, 'create');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->maxLength('email', 50,'This email is not possible.')
            ->notEmptyString('email', "An email is required.");

        $validator
            ->scalar('password')
            ->maxLength('password',255, 'This password is not possible.')
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'Password is required.');

        $validator
            ->scalar('mobile_number')
            ->maxLength('mobile_number', 10,'The mobile number should only have 10 characters.')
            ->minLength('mobile_number',10,'The mobile number should only have 10 characters.')
            ->requirePresence('mobile_number', 'create')
            ->notEmptyString('mobile_number', 'The mobile number is required.');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50,'This first name is not possible.')
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name', 'A first name is required.');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50,'This last name is not possible.')
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name', 'A last name is required.');

        $validator
            ->scalar('profile_fields');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
