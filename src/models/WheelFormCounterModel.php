<?php
/**
 * WheelFormCounter plugin for Craft CMS 3.x
 *
 * Count for wheel form plugin entries
 *
 * @link      https://github.com/xsinisa
 * @copyright Copyright (c) 2018 Sinisa Randic
 */

namespace qsoftware\wheelformcounter\models;

use qsoftware\wheelformcounter\WheelFormCounter;

use Craft;
use craft\base\Model;

/**
 * @author    Sinisa Randic
 * @package   WheelFormCounter
 * @since     1.0.0
 */
class WheelFormCounterModel extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
}
