<?php
/**
 * Gravatar plugin for Craft CMS 3.x
 *
 * Adds gravatar support
 *
 * @link      https://github.com/noxify
 * @copyright Copyright (c) 2018 Marcus Reinhardt
 */

namespace noxify\gravatar\models;

use noxify\gravatar\Gravatar;

use Craft;
use craft\base\Model;

/**
 * @author    Marcus Reinhardt
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
    public $url = '//www.gravatar.com/avatar/';

    /**
     * @var string
     */
    public $size = '80';

    /**
     * @var string
     */
    public $rating = 'g';

    /**
     * @var string
     */
    public $default = 'mp';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['url', 'string'],
            ['size', 'string'],
            ['rating', 'string'],
            ['default', 'string'],
        ];
    }
}
