<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "site_text".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $create_at
 * @property string|null $update_at
 */
class SiteText extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_text';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string'],
            [['create_at', 'update_at'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
        ];
    }

    public function beforeSave($insert){
        if($insert){

            $this->create_at = date('Y-m-d H:i:s');
        }else{

            $this->update_at = date('Y-m-d H:i:s');
        }
        return parent::beforeSave($insert);
    }
}
