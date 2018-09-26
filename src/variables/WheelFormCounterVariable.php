<?php
/**
 * WheelFormCounter plugin for Craft CMS 3.x
 *
 * Count for wheel form plugin entries
 *
 * @link      https://github.com/xsinisa
 * @copyright Copyright (c) 2018 Sinisa Randic
 */

namespace qsoftware\wheelformcounter\variables;

use qsoftware\wheelformcounter\WheelFormCounter;

use Craft;

/**
 * @author    Sinisa Randic
 * @package   WheelFormCounter
 * @since     1.0.0
 */
class WheelFormCounterVariable
{
    // Public Methods
    // =========================================================================

    /**
     * @param null $optional
     * @return string
     */
    public function exampleVariable($optional = null)
    {
        $result = "And away we go to the Twig template...";
        if ($optional) {
            $result = "I'm feeling optional today...";
        }
        return $result;
    }
}
