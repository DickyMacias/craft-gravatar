<?php
/**
 * Gravatar plugin for Craft CMS 4.x and above
 *
 * Adds gravatar support
 *
 * @link      https://github.com/DickyMacias
 * @copyright Copyright (c) 2025 Dicky Macias | Forked from Noxify
 */

namespace dickymacias\gravatar\services;

use Craft;
use yii\helpers\BaseHtml;
use craft\base\Component;
use craft\helpers\UrlHelper;
use dickymacias\gravatar\Gravatar;

/**
 * @author    Dicky Macias
 * @package   Gravatar
 * @since     1.0.0
 */
class Img extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * Get either a Gravatar URL or complete image tag for a specified email address.
     *
     * @param string $email
     * @param array $criteria
     * @param array $attributes
     * @return string
     */
    public function get(string $email, array $criteria = [], array $attributes = []): string
    {
        $email_hash = md5(strtolower(trim($email)));
        $url = Gravatar::$plugin->getSettings()->url.$email_hash;
        
        $params = [];
        
        // Add size if specified or use default
        if (isset($criteria['s'])) {
            $params['s'] = $criteria['s'];
        } else {
            $params['s'] = Gravatar::$plugin->getSettings()->size;
        }
        
        // Add rating if specified or use default
        if (isset($criteria['r'])) {
            $params['r'] = $criteria['r'];
        } else {
            $params['r'] = Gravatar::$plugin->getSettings()->rating;
        }
        
        // Add default if specified or use default
        if (isset($criteria['d'])) {
            $params['d'] = $criteria['d'];
        } else {
            $params['d'] = Gravatar::$plugin->getSettings()->default;
        }

        $gravatar_url = UrlHelper::urlWithParams($url, $params);

        return BaseHtml::img($gravatar_url, $attributes);
    }
}
