<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
		$users = DB::table('user')->get();
		return view('read', ['users' => $users]);
    }

    public function create()
    {
    	if(isset($_POST)){
	        $user = new User;
			$user->nama = $_POST['nama'];
			$user->departemen = $_POST['departemen'];
			$user->tgl_lahir = $_POST['tgl'];
			$user->anak_ke = $_POST['anakke'];
			$user->save();
    	}
		return redirect('/');
    }

    public function delete($id){
    	User::where('id', $id)->delete();
    	return redirect('/');
    }
	
	public function get($id){
    	$users = \DB::table('user')
            ->where('id','=',$id)
            ->get();
    	return view('update', ['users' => $users]);
    }

    public function update(){
    	if(isset($_POST)){
    		$user = User::find($_POST['id']);
			$user->nama = $_POST['nama'];
			$user->departemen = $_POST['departemen'];
			$user->tgl_lahir = $_POST['tgl'];
			$user->anak_ke = $_POST['anakke'];
			$user->save();	
    	}
		
		return redirect('/');
    }
		
}