<?php
/**
 * Gravatar plugin for Craft CMS 4.x and above
 *
 * Adds gravatar support
 *
 * @link      https://github.com/DickyMacias
 * @copyright Copyright (c) 2025 Dicky Macias | Forked from Noxify
 */

namespace dickymacias\gravatar\variables;

use Craft;
use craft\helpers\Template;
use dickymacias\gravatar\Gravatar;

/**
 * @author    Dicky Macias
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
    public function url(string $email, array $criteria = []): string
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
    public function img(string $email, array $criteria = [], array $attributes = []): string
    {
        return Template::raw(Gravatar::$plugin->img->get($email, $criteria, $attributes));
    }
}
