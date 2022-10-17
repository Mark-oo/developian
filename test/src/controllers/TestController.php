<?php
/**
 * craft-developian-test plugin for Craft CMS 3.x
 *
 * description
 *
 * @link      https://github.com/Mark-oo
 * @copyright Copyright (c) 2022 marko knezevic
 */

namespace marko\craftdevelopiantest\controllers;

use marko\craftdevelopiantest\Craftdevelopiantest;

use Craft;
use craft\web\Controller;
use craft\web\View;


/**
 * @author    marko knezevic
 * @package   Craftdevelopiantest
 * @since     1
 */
class TestController extends Controller
{

 // Protected Properties
    // =========================================================================

    /**
     * @var    bool|array Allows anonymous access to this controller's actions.
     *         The actions must be in 'kebab-case'
     * @access protected
     */
    protected $allowAnonymous = ['index'];

    // Public Methods
    // =========================================================================

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $data = file_get_contents("https://wizard-world-api.herokuapp.com/Houses");
        $data = json_decode($data);
        return $this->renderTemplate(
            'craft-developian-test/test.twig',
            ['data' => $data],
            View::TEMPLATE_MODE_CP
        );

    }
}
