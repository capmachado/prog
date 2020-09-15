<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property int $ID
 * @property string $nome
 * @property string $categoria
 * @property string $un
 * @property float $preco
 */
class ProdutosModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'categoria', 'un', 'preco'], 'required'],
            [['preco'], 'number'],
            [['nome'], 'string', 'max' => 255],
            [['categoria'], 'string', 'max' => 50],
            [['un'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'nome' => 'Nome',
            'categoria' => 'Categoria',
            'un' => 'Un',
            'preco' => 'Preco',
        ];
    }
}
