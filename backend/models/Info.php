<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string $type
 * @property int $status
 * @property string $created_at
 * @property string filepath
 */
class Info extends \yii\db\ActiveRecord
{
    public $file;

    const FOR_INVESTORS = 0;
    const FOR_SHAREHOLDERS = 1;
    const STATEMENT = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['created_at'], 'safe'],
            [['text'], 'string'],
            [['title'], 'string', 'max' => 500],
            [['type'], 'string', 'max' => 255],
            [['filepath'], 'string'],
            [['file'], 'file', 'extensions' => 'doc, pdf, docx'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Текст',
            'type' => 'Тип',
            'status' => 'Статус',
            'created_at' => 'Дата создания',
            'filepath' => 'Путь к файлу',
            'file' => 'Файл',
        ];
    }

    public function afterFind()
    {
        if ($this->type == self::FOR_INVESTORS) {
            $this->type = 'Информация для инвесторов';
        } elseif ($this->type == self::FOR_SHAREHOLDERS) {
            $this->type = 'Информация для акционеров';
        } elseif ($this->type == self::STATEMENT) {
            $this->type = 'Финансовая отчетность';
        }
        $this->created_at = date('d-m-Y', $this->created_at);
        parent::afterFind();
    }

    public function beforeSave($insert)
    {
        $this->created_at = time();
        return parent::beforeSave($insert);
    }

    public function upload()
    {
        $this->filepath = '/uploads/info/' . time() . '.' . $this->file->extension;
        $this->file->saveAs(Yii::getAlias('@frontend') . '/web/' . $this->filepath);
        $this->file = null;
        return true;
    }
}
