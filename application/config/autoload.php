<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
$autoload['packages'] = array();
$autoload['libraries'] = array('database','session','form_validation','email','xmlrpc','cart');
$autoload['drivers'] = array();
$autoload['helper'] = array('url', 'file');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array();
