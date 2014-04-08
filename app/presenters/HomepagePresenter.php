<?php

namespace App\Presenters;

use Nette,
	App\Model;


/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
		require $this->context->parameters['wwwDir'] . DIRECTORY_SEPARATOR . 'url.php';
	
		$template = $this->template;
		$template->url = $url;
		
		try
		{
			$client = new \SoapClient($url,array(
			   'exceptions' => TRUE,
			));
			
			$template->output = 'OK';
		}
		catch ( \SoapFault $e )
		{
			$template->output = $e->getMessage();
		}
	}
}
