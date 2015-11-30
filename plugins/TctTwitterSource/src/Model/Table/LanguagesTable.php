<?php
namespace TctTwitterSource\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use TctTwitterSource\Model\Entity\Language;

/**
 * Languages Model
 *
 * @property \Cake\ORM\Association\HasMany $Sources
 * @property \Cake\ORM\Association\HasMany $TranslationRequests
 * @property \Cake\ORM\Association\HasMany $Translations
 * @property \Cake\ORM\Association\BelongsToMany $Users
 */
class LanguagesTable extends Table
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

        $this->table('languages');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Sources', [
            'foreignKey' => 'language_id',
            'className' => 'TctTwitterSource.Sources'
        ]);
        $this->hasMany('TranslationRequests', [
            'foreignKey' => 'language_id',
            'className' => 'TctTwitterSource.TranslationRequests'
        ]);
        $this->hasMany('Translations', [
            'foreignKey' => 'language_id',
            'className' => 'TctTwitterSource.Translations'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'language_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'languages_users',
            'className' => 'TctTwitterSource.Users'
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
            ->requirePresence('iso6392B', 'create')
            ->notEmpty('iso6392B')
            ->add('iso6392B', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('bcp47');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->allowEmpty('description');

        return $validator;
    }
}
