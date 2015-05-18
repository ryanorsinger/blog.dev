<?php

class AuthController extends \BaseController
{

	/**
	 * Request the login page.
	 * GET /auth/login
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('auth.login');
	}

	/**
	 * Attempt login with the credentials contained in POST request
	 * POST /auth/
	 *
	 * @return Response
	 */
	public function postLogin()
	{
		//
	}

	/**
	 * Perform logout and return request for logout page.
	 * GET /auth/logout
	 *
	 * @return Response
	 */
	public function getLogout()
	{
		return View::make('auth.logout');
	}

}
