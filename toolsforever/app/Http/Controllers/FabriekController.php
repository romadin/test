<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Routing;
use Illuminate\Http\Request;
use App\Fabriek;
use App\Mail\RegisterMail;

/**
 * Controller for handeling the registers.
 *
 */
Class FabriekController extends Controller
{
	/**
	 * View the register fabriek page. 
	 * 
	 * @return view
	 */
	public function addFabrieken()
	{
		return view('addFabriek');
	}

	/**
	 * Handle the post Fabriek request when an Fabriek has registerd.
	 *
	 * @param  Request  $request
	 * @return redirect view
	 */
	public function saveFabriek(Request $request)
	{
		$fabriek = new Fabriek;

		$fabriek->fabriek 	= $request->input('fabriekNaam');
		$fabriek->telefoon 	= $request->input('telefoonNummer');
 
		$fabriek->save();

		return redirect()->action('FabriekController@showFabrieken');
	}

	/**
	 * Show all the employes.
	 * 
	 * @return view
	 */
	public function showFabrieken()
	{	
		$fabrieken = \App\Fabriek::all();

		return view('fabrieken', ['fabrieken' => $fabrieken]); 
	}

	/**
	 * Edit an Fabriek page.
	 *
	 * @param  int  $id
	 * @return void
	 */
	public function editFabriek($id)
	{
		$fabriek = \App\Fabriek::find($id);

		return view('fabriek', ['fabriek' => $fabriek]);
	}

	/**
	 * Update an Fabriek if there are changes
	 * 
	 * @param  Request $request
	 * @param  int  $id
	 * @return redirct
	 */
	public function updateFabriek(Request $request, $id)
	{
		$fabriek = \App\fabriek::find($id);

		$fabriek->fabriek		= $request->input('fabriekNaam');
		$fabriek->telefoon 		= $request->input('telefoon');

		$fabriek->save();

		return redirect()->action('FabriekController@showFabrieken');
	}

	/**
	 * Delete an Fabriek
	 * 
	 * @param  int $id
	 * @return redirect
	 */
	public function deleteFabriek($id)
	{
		$fabriek = \App\fabriek::find($id);

		$fabriek->delete();

		return redirect()->action('FabriekController@showFabrieken');
	}

	/**
	 * Show the contact page.
	 * 
	 * @return view
	 */
	public function showContact()
	{
		return view('contact');
	}
}