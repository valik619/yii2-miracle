<?php

namespace modules\users\components;

use Yii;
use common\helpers\Time;

/**
 * Class User
 * @package modules\users\components
 */
class User extends \yii\web\User
{

    public function beforeLogin($identity, $cookieBased, $duration)
    {
        return parent::beforeLogin($identity, $cookieBased, $duration);
    }

    public function afterLogin($identity, $cookieBased, $duration)
    {
        $identity->time_login = Time::real();
        $identity->ip = Yii::$app->request->getUserIP();
        $identity->ua = Yii::$app->request->getUserAgent();
        $identity->save(0);
        parent::afterLogin($identity, $cookieBased, $duration);
    }

}