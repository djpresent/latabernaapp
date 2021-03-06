<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pedido".
 *
 * @property integer $idPedido
 * @property string $email
 * @property integer $idCarrito
 * @property string $fecha
 * @property integer $idDireccion
 * @property double $costoEnvio
 * @property integer $idFormapago
 * @property integer $idSucursal
 *
 * @property Carrito $idCarrito0
 * @property Direccion $idDireccion0
 * @property Formapago $idFormapago0
 * @property Sucursal $idSucursal0
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idPedido', 'email', 'idCarrito', 'idDireccion', 'costoEnvio', 'idFormapago', 'idSucursal'], 'required'],
            [['idPedido', 'idCarrito', 'idDireccion', 'idFormapago', 'idSucursal'], 'integer'],
            [['fecha'], 'safe'],
            [['costoEnvio'], 'number'],
            [['email'], 'string', 'max' => 45],
            [['idCarrito'], 'exist', 'skipOnError' => true, 'targetClass' => Carrito::className(), 'targetAttribute' => ['idCarrito' => 'idCarrito']],
            [['idDireccion', 'email'], 'exist', 'skipOnError' => true, 'targetClass' => Direccion::className(), 'targetAttribute' => ['idDireccion' => 'idDireccion', 'email' => 'email']],
            [['idFormapago'], 'exist', 'skipOnError' => true, 'targetClass' => Formapago::className(), 'targetAttribute' => ['idFormapago' => 'idFormapago']],
            [['idSucursal'], 'exist', 'skipOnError' => true, 'targetClass' => Sucursal::className(), 'targetAttribute' => ['idSucursal' => 'idSucursal']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idPedido' => 'Id Pedido',
            'email' => 'Email',
            'idCarrito' => 'Id Carrito',
            'fecha' => 'Fecha',
            'idDireccion' => 'Id Direccion',
            'costoEnvio' => 'Costo Envio',
            'idFormapago' => 'Id Formapago',
            'idSucursal' => 'Id Sucursal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCarrito0()
    {
        return $this->hasOne(Carrito::className(), ['idCarrito' => 'idCarrito']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDireccion0()
    {
        return $this->hasOne(Direccion::className(), ['idDireccion' => 'idDireccion', 'email' => 'email']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFormapago0()
    {
        return $this->hasOne(Formapago::className(), ['idFormapago' => 'idFormapago']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSucursal0()
    {
        return $this->hasOne(Sucursal::className(), ['idSucursal' => 'idSucursal']);
    }
}
