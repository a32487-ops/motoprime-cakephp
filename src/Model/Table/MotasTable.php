<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class MotasTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // nome da tabela na base de dados
        $this->setTable('motas');

        // chave primária
        $this->setPrimaryKey('id');
    }

    // regras de validação
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('marca', 'A marca é obrigatória');

        $validator
            ->notEmptyString('modelo', 'O modelo é obrigatório');

        $validator
            ->numeric('preco', 'O preço deve ser numérico');

        $validator
            ->numeric('cilindrada', 'A cilindrada deve ser numérica');

        $validator
            ->numeric('ano', 'O ano deve ser numérico');

        return $validator;
    }
}