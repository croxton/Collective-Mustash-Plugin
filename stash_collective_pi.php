<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Collective Mustash plugin
 *
 * @package Stash_collective_pi
 * @author TJ Draper <tj@buzzingpixel.com>
 * @link https://buzzingpixel.com/ee-add-ons/collective
 * @copyright Copyright (c) 2015, BuzzingPixel
 */
class Stash_collective_pi extends Mustash_plugin
{
	public $name = 'Collective';
	public $version = '1.0.0';
	public $priority = '10';
	protected $hooks = array(
		'collective_updated',
	);

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * This function is required to be present,
	 * but Collective sends no arguements so we don't need to do anything
	 *
	 * @access protected
	 * @return void
	 */
	protected function set_groups()
	{
	}

	/**
	 * Hook: collective_updated
	 *
	 * @access public
	 * @return void
	 */
	public function collective_updated()
	{
		$this->flush_cache(__FUNCTION__);
	}
}