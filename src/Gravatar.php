<?php
/**
 * Gravatar plugin for Craft CMS 4.x and above
 *
 * Adds gravatar support
 *
 * @link      https://github.com/DickyMacias
 * @copyright Copyright (c) 2025 Dicky Macias | Forked from Noxify
 */

namespace dickymacias\gravatar;

use dickymacias\gravatar\services\Url as UrlService;
use dickymacias\gravatar\services\Img as ImgService;
use dickymacias\gravatar\variables\GravatarVariable;
use dickymacias\gravatar\models\Settings;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use craft\events\PluginEvent;
use craft\web\twig\variables\CraftVariable;

use yii\base\Event;

/**
 * Class Gravatar
 *
 * @author    Dicky Macias
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
    public string $schemaVersion = '1.0.0';

    /**
     * @var bool
     */
    public bool $hasCpSettings = true;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init(): void
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
    protected function createSettingsModel(): ?\craft\base\Model
    {
        return new Settings();
    }

    /**
     * @inheritdoc
     */
    protected function settingsHtml(): ?string
    {
        return \Craft::$app->getView()->renderTemplate(
            'gravatar/settings',
            [
                'settings' => $this->getSettings()
            ]
        );
    }
}
