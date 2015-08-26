<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;


class AuditTrail extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'bedezign\yii2\audit\AuditTrailBehavior'
        ];
    }
}
