<?php namespace Sigesadmin\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Sigesadmin\Article;
use Sigesadmin\Http\Requests;
use Sigesadmin\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Sigesadmin\Http\Requests\CreateArticleRequest;

class PublicationController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$articles = Article::oldest()->Published()->get();
		return view('publication.index',compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('publication.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *Asignando un usuario al articulo el user
	 * logado
	 * @return Response
	 */
	public function store(CreateArticleRequest $request)
	{
		$article = new Article($request->all());
		//aqui es donde se le asigna el usuario al articulo
		//articles se entuentra en User
		Auth::user()->articles()->save($article);

		return redirect('publicaciones');
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
		$article = Article::findOrFail($id);
		return view('publication.edit',compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id , CreateArticleRequest $request)
	{
		$article = Article::findOrFail($id);
		$article->update($request->all());
		return redirect('publicaciones');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Request $request)
	{
		$article = Article::findOrFail($id);
		$article->delete();

		$message = 'El Articulo: '.$article->title.' fue eliminado de los registros';

		if($request->ajax())
		{
			//return $message;
			return response()->json([
				'message'   => $message,
			]);
		}

		\Session::flash('message',$message);

		//Redireccion a la lista de usuarios
		return redirect()->route('publicaciones.index');
	}

}
