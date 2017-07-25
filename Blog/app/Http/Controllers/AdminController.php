<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;

class AdminController extends Controller {

	public function __construct()
  {
    $this->middleware('auth');
  }

  public function desktop()
  {
    $posts = \DB::table('posts')->orderBy('id', 'desc')->paginate(3);
    return view('desktop')->with('posts', $posts);
  }

  public function logout()
  {
    \Auth::logout();
    return \Redirect::route('home');
  }

  public function edit($id)
  {
    $posts = Post::find($id);
    return view('edit')->with('posts', $posts);
  }

  public function refresh($id)
  {
    $p = Post::find($id);
    $p->title = \Input::get('title');
    $p->content = \Input::get('content');
    $p->tags = \Input::get('tags');
    $p->photo = \Input::get('photo');
    $p->resluggify();
    $p->save();

    return \Redirect::route('adminsite')->with('alert2', 'Publicación actualizada correctamente');
  }

	public function nuevo()
	{
		return view('nuevo');
	}

	public function crear()
	{
		$p = new Post;
    $p->title = \Input::get('title');
    $p->content = \Input::get('content');
    $p->tags = \Input::get('tags');
    $p->photo = \Input::get('photo');
    $p->save();

		return \Redirect::route('adminsite')->with('alert', 'Publicación creada correctamente');
	}

	public function delete($id)
	{
		$post = Post::find($id)->delete();

		return \Redirect::route('adminsite')->with('alert_delete', 'Publicación eliminada');
	}

}
