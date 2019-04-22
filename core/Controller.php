<?php
class Controller extends Exception {
	protected $db;
	public function __construct() {
		global $config;
	}
	 public function loadView($viewName, $viewData = array()) {
	 	extract($viewData);
	 	include 'views/'.$viewName.'.php';
	 }
	 public function loadTemplate($viewName, $viewData = array()) {
	 	include 'views/template.php';
	 }
	 public function loadTemplateAdmin($viewName, $viewData = array()) {
	 	include 'views/templateAdmin.php';
	 }
	 public function loadViewInTemplate($viewName, $viewData) {
	 	extract($viewData);
	 	include 'views/'.$viewName.'.php';
	 }
}