<?php
/**
 * Gravatar plugin for Craft CMS 4.x and above
 *
 * Adds gravatar support
 *
 * @link      https://github.com/DickyMacias
 * @copyright Copyright (c) 2025 Dicky Macias | Forked from Noxify
 */

namespace dickymacias\gravatar\models;

use dickymacias\gravatar\Gravatar;

use Craft;
use craft\base\Model;

/**
 * @author    Dicky Macias
 * @package   Gravatar
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public string $url = '//www.gravatar.com/avatar/';

    /**
     * @var string
     */
    public string $size = '80';

    /**
     * @var string
     */
    public string $rating = 'g';

    /**
     * @var string
     */
    public string $default = 'mp';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            ['url', 'string'],
            ['size', 'string'],
            ['rating', 'string'],
            ['default', 'string'],
        ];
    }
}
