<?php namespace Sigesadmin\Http\Controllers\Admin;

//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Sigesadmin\Http\Controllers\Controller;
use Sigesadmin\Http\Requests\CreateUserRequest;
use Sigesadmin\Http\Requests\EditUserRequest;
use Sigesadmin\User;

class UserController extends Controller {
    protected $user;

    /**
     * Display a listing of the resource.
     *
     * @param Request $request -> sirve para recibir la peticion que
     * se necesita para filtrar un usuario y es http/request
     *
     * @return Response
     */
	public function index(Request $request)
	{

        //name()-> hacer referencia al metodo scopeName en la clase User
		$users = User::name($request->get('name'))->paginate();
		//dd($users);
		return view('admin.users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('admin.users.create');
	}

    /**
     * @param Request $request
     */
   public function store(CreateUserRequest $request)
    {
        $users = $request->all();


        User::create($request->all());

        return redirect('admin/users');
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
        $user = User::findOrFail($id);

        return view('admin.users.edit',compact('user'));

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id,EditUserRequest $request)
	{

		$user = User::findOrFail($id);
        $user->fill($request->all());
        $user->save();

        return redirect()->back();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Request $request)
	{
        $user = User::findOrFail($id);
        $user->delete();

        $message = 'El usuario: '.$user->full_name.' fue eliminado de los registros';

        if($request->ajax())
        {
            //return $message;
            return response()->json([
                'message'   => $message,
                'id'        => $user->id,
            ]);
        }

        \Session::flash('message',$message);

        //Redireccion a la lista de usuarios
        return redirect()->route('admin.users.index');

	}

}
