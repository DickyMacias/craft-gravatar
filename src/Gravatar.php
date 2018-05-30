<?php
/**
 * Gravatar plugin for Craft CMS 3.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/noxify
 * @copyright Copyright (c) 2018 Marcus Reinhardt
 */

namespace noxify\gravatar;

use noxify\gravatar\services\Url as UrlService;
use noxify\gravatar\services\Img as ImgService;
use noxify\gravatar\variables\GravatarVariable;
use noxify\gravatar\models\Settings;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class Gravatar
 *
 * @author    Marcus Reinhardt
 * @package   Gravatar
 * @since     1.0.0
 *
 * @property  UrlService $url
 * @property  ImgService $img
 */
class Gravatar extends Plugin
{
    // Static Properties
    // =========================================================================

    /**
     * @var Gravatar
     */
    public static $plugin;

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $schemaVersion = '1.0.0';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        self::$plugin = $this;

        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                $variable->set('gravatar', GravatarVariable::class);
            }
        );

        Event::on(
            Plugins::class,
            Plugins::EVENT_AFTER_INSTALL_PLUGIN,
            function (PluginEvent $event) {
                if ($event->plugin === $this) {
                }
            }
        );

        Craft::info(
            Craft::t(
                'gravatar',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    // Protected Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    protected function createSettingsModel()
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): string
    {
        return Craft::$app->view->renderTemplate(
            'gravatar/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
