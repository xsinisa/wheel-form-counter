<?php
/**
 * WheelFormCounter plugin for Craft CMS 3.x
 *
 * Count for wheel form plugin entries
 *
 * @link      https://github.com/xsinisa
 * @copyright Copyright (c) 2018 Sinisa Randic
 */

namespace qsoftware\wheelformcounter\controllers;

use qsoftware\wheelformcounter\WheelFormCounter;

use Craft;
use craft\web\Controller;

/**
 * @author    Sinisa Randic
 * @package   WheelFormCounter
 * @since     1.0.0
 */
class FormCounterController extends Controller
{

    // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index', 'do-something'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $result = 'Welcome to the FormCounterController actionIndex() method';

        return $result;
    }

    /**
     * @return mixed
     */
    public function actionDoSomething()
    {
        $result = 'Welcome to the FormCounterController actionDoSomething() method';

        return $result;
    }
}
