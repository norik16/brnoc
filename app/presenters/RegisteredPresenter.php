<?php
/**
 * Created by PhpStorm.
 * User: norik
 * Date: 25.12.15
 * Time: 2:22
 */

namespace App\Presenters;

use Nette,
	App\Model;



class RegisteredPresenter extends Nette\Application\UI\Presenter
{
	/** @var  @var Nette\Databe\Context */
	private $database;

	public function __construct(Nette\Database\Context $database)
	{
		$this->database = $database;
	}

	public function renderDefault()
	{
		$this->template->users = $this->database->table('user')
			->order('created DESC')
			->limit(5);
	}

	public function renderAdmin()
	{
		$this->template->users = $this->database->table('user')
			->order('created DESC')
			->limit(5);
	}
}