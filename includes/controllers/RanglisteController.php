<?php

/**
 * @author Daniel Hoover <https://github.com/danielhoover>
 * @author Sabrina Mitternöckler
 */
class RanglisteController extends Controller
{
	protected $viewFileName = "rangliste"; //this will be the View that gets the data...
	protected $loginRequired = false;


	public function run()
	{
		$this->view->title = "Rangliste";
		//$this->view->username = $this->user->username;

		//$this->view->addresses = AddressModel::getAddressesByUserId($this->user->id);

        //TODO Rangliste aus Datenbank über Model holen...
        //var_dump(WinnerModel::getWinners());

        $this->view->winners = WinnerModel::getWinners();

	}

}