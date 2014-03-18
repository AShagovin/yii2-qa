<?php

namespace artkost\qa;

use Yii;

/**
 * This is the main module class for the QA module.
 *
 * To use QA, include it as a module in the application configuration like the following:
 *
 * ~~~
 * return [
 *     ......
 *     'modules' => [
 *         'qa' => ['class' => 'artkost\qa\Module'],
 *     ],
 * ]
 * ~~~
 *
 * With the above configuration, you will be able to access QA Module in your browser using
 * the URL `http://localhost/path/to/index.php?r=qa`
 *
 * If your application enables [[UrlManager::enablePrettyUrl|pretty URLs]] and you have defined
 * custom URL rules or enabled [[UrlManager::enableStrictParsing], you may need to add
 * the following URL rules at the beginning of your URL rule set in your application configuration
 * in order to access QA:
 *
 * ~~~
 * 'rules' => [
 *     'qa' => 'qa',
 *     'qa/<controller>' => 'qa/<controller>',
 *     'qa/<controller>/<action>' => 'qa/<controller>/<action>',
 *     ...
 * ],
 * ~~~
 *
 * You can then access Qa via URL: `http://localhost/path/to/index.php/gii`
 *
 * @author Nikolay Kostyurin <nikolay@artkost.ru>
 * @since 2.0
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = '\artkost\qa\controllers';

    /**
     * User model class
     * @var string
     */
    public $userClass = '\app\models\User';

    /**
     * Function name in user model, or callable function
     * @var string|callable
     */
    public $userName = 'getId';

    public function init()
    {
        parent::init();

        $i18n = Yii::$app->i18n;

        if (!isset($i18n->translations['artkost\qa'])) {
            $i18n->translations['artkost\qa'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en',
                'basePath' => '@artkost/qa/messages',
            ];
        }
    }

    public function getUserName()
    {

    }
}