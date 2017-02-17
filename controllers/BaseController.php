<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use app\traits\RequestTrait;
use app\traits\DataTrait;
use app\traits\ModelTrait;
use app\traits\HierarchyTrait;

class BaseController extends Controller
{
    use RequestTrait, ModelTrait, DataTrait, HierarchyTrait;

    public $msgMap = [
        'home'                   => 'home',
    ];

    public $cookieLanguage = 'zh-CN';

    public $viewData = [];

    // 防范攻击
    public $enableCsrfValidation = false;

    public function init() {
        $this->setLayout();
    }

    /**
     * 获取 js 文件 i18n file msgs
     */
    public function loadJSMsgs($categories=[]) {
        $lang = $this->getDefaultLanguage();
        $i18nMsgs = [];
        foreach ($categories as $category) {
            $file = $this->getFrontendMessageFilePath($category, $lang); 
            if ($file) {
                $i18nMsgs = array_merge($i18nMsgs, $this->loadMessagesFromFile($file));
            }
        }
        $common = $this->getFrontendMessageFilePath('common', $lang); 
        $common = $this->loadMessagesFromFile($common);
        $i18nMsgs = array_merge($i18nMsgs, $common);
        if ($i18nMsgs) return json_encode($i18nMsgs, JSON_UNESCAPED_UNICODE);
        return '';
    }

    protected function getDefaultLanguage() {
        $lang = $this->cookie('language');
        !$lang && $lang = \Yii::$app->language;
        return $lang;
    }

    public function setLayout() {
        $lang = $this->getDefaultLanguage();
        $category = $this->getMsgCategory();
        $msg = [];
        $msgFile = $this->getMessageFilePath($category, $lang);
        $msgs = $this->loadMessagesFromFile($msgFile);
        $this->msgMap = json_encode($msgs, JSON_UNESCAPED_UNICODE);
        !$msgs && $this->msgMap = "";
        $this->cookieLanguage = $lang;
        $this->setLangConfig($lang); 
    }

    public function getMsgCategory() {
        $controller = $this->id;
        $ids = explode('/', $controller); 
        $id = array_pop($ids);
        if (in_array($id, array_keys($this->msgMap))) {
            return $this->msgMap[$id];
        }
        return '';
    }

	/**
	 * smarty assign 
	 */
	public function assign($key, $value='') {
		if (!$value) $value = $key;
		Yii::app()->smarty->assign($key, $value);
	}

	/**
	 * smarty display
	 */
	public function display($view) {
		Yii::app()->smarty->display($view);
	}

    protected function plainOut($response) {
        exit($response);
    }

    public function __set($property, $value) {
        $this->viewData[$property] = $value;
        //parent::__set($property, $value);
    }

    /**
     * get controller $this->attribute like params only
     */
    private function filteControllerParams() {
        $vars = get_object_vars($this);
        unset($vars['module']);
        unset($vars['action']);
        unset($vars['layout']);
        unset($vars['enableCsrfValidation']);
        unset($vars['id']);
        unset($vars['defaultAction']);
        unset($vars['actionParams']);
        return $vars;
    }

    protected function show($view='', $data=[], $isAjax=false) {
        $view = $this->getViewFullName($view);
        $vars = $this->filteControllerParams();
        $params = array_merge($this->viewData, $data, $vars);
        if (!$isAjax) return $this->render($view, $params);
        return $this->renderAjax($view, $params);
    }

    protected function showAjax($view='', $data=[]) {
        return $this->show($view, $data, true);
    }

    protected function out($data=[]) {
        $params = array_merge($this->viewData, $data); 
        $this->jsonReturn($params);
    }

    public function orPjax($pjaxView='', $view='', $data=[]) {
        if ($this->isPjax()) $view = $pjaxView;
        return $this->show($view, $data, $this->isPjax());
    }

    protected function getViewFullName($view) {
        if (!$view) {
            $view = $this->action->id;
            $fullView = $this->getViewNamePath($view);
            if (!file_exists($fullView)) {
                $view = explode('-', $view);
                $view = array_map('ucfirst', $view);
                $view = lcfirst(implode('', $view));
            }
        }
        return $view;
    }

    protected function getViewNamePath($view) {
        return $fullView = $this->getViewPath().'/'.$view.'.php';
    }
}// end of BaseController
