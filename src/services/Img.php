<?php
/**
 * Gravatar plugin for Craft CMS 3.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/noxify
 * @copyright Copyright (c) 2018 Marcus Reinhardt
 */

namespace noxify\gravatar\services;

use Craft;
use yii\helpers\BaseHtml;
use craft\base\Component;
use craft\helpers\UrlHelper;
use noxify\gravatar\Gravatar;

/**
 * @author    Marcus Reinhardt
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
     * @param boolean $asImage
     * @return string
     */
    public function get($email, $criteria = array(), $attributes = array())
    {
        $email_hash = md5( strtolower( trim( $email ) ) );
        $url = Gravatar::$plugin->getSettings()->url.$email_hash;
        $default = ($criteria['d']) ?? Gravatar::$plugin->getSettings()->default;
        $size = ($criteria['s']) ?? Gravatar::$plugin->getSettings()->size;
        $rating = ($criteria['r']) ?? Gravatar::$plugin->getSettings()->rating;

        $gravatar_url = UrlHelper::urlWithParams($url, ['s' => $size, 'r' => $rating, 'd' => $default]);

        return BaseHtml::img($gravatar_url, $attributes);
    }
}
