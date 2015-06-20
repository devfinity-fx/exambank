<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use League\Flysystem\Exception;

class MailController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $params = array('View'=>'Messages', 'Description'=>'Manage your messages here.');

        return view('mail.index', compact('params'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $params = array('View'=>'Compose', 'Description'=>'Create a new message.');
        return view('mail.compose', compact('params'));
	}

    public function view($id)
    {
        $views = array('inbox', 'sent', 'drafts', 'junk', 'trash');

        if(!in_array($id, $views))
        {
            abort(404);
        }

        $message = sprintf('View your %s messages here.', $id);
        $params = array('View'=>$id, 'Description'=>$message);

        return view('mail.view', compact('params'));
    }

    public function label($id)
    {
        $labels = array('important', 'submissions', 'requests');

        if(!in_array($id, $labels))
        {
            abort(404);
        }

        $message = sprintf("View your messages labelled as <em>%s</em>.", $id);
        $params = array('View'=>$id, 'Description'=>$message);
        return view('mail.label', compact('params'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
