<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Scorings
 * @property \Cake\ORM\Association\HasMany $Sources
 * @property \Cake\ORM\Association\HasMany $TranslationRequests
 * @property \Cake\ORM\Association\HasMany $Translations
 * @property \Cake\ORM\Association\BelongsToMany $Languages
 * @property \Cake\ORM\Association\BelongsToMany $UserAttributes
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Scorings', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Sources', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('TranslationRequests', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Translations', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsToMany('Languages', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'language_id',
            'joinTable' => 'languages_users'
        ]);
        $this->belongsToMany('UserAttributes', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'user_attribute_id',
            'joinTable' => 'users_user_attributes'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('description');

        $validator
            ->add('vacation', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('vacation');

        $validator
            ->add('active', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('active');

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
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
