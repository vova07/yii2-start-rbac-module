<?php

namespace vova07\rbac;

use yii\base\BootstrapInterface;

/**
 * Blogs module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // Add module I18N category.
        if (!isset($app->i18n->translations['vova07/rbac']) && !isset($app->i18n->translations['vova07/*'])) {
            $app->i18n->translations['vova07/rbac'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@vova07/rbac/messages',
                'forceTranslation' => true,
                'fileMap' => [
                    'vova07/rbac' => 'rbac.php',
                ]
            ];
        }
    }
}
