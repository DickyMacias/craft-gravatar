<?php
/**
 * Gravatar plugin for Craft CMS 3.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/noxify
 * @copyright Copyright (c) 2018 Marcus Reinhardt
 */

namespace noxify\gravatar\variables;

use Craft;
use craft\helpers\Template;
use noxify\gravatar\Gravatar;

/**
 * @author    Marcus Reinhardt
 * @package   Gravatar
 * @since     1.0.0
 */
class GravatarVariable
{
    // Public Methods
    // =========================================================================

    /**
     * gets get gravatar as plain url
     *
     * @param string $email
     * @param array $criteria
     * @return string
     */
    public function url($email, $criteria = array())
	{
        return Template::raw(Gravatar::$plugin->url->get($email, $criteria));
    }
    
    /**
     * gets get gravatar with img tag
     *
     * @param string $email
     * @param array $criteria
     * @param array $attributes
     * @return string
     */
    public function img($email, $criteria = array(), $attributes = array())
    {
        return Template::raw(Gravatar::$plugin->img->get($email, $criteria, $attributes));
    }
}
