<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    public function index(){

        $roles = DB::table('roles')->orderBy('id','desc')->get();

        return view('roles.index', array(
            'roles' => $roles
        ));

    }

    public function detail( $id ){

        $role = DB::table('roles')->where('id', '=', $id)->first();

        return view('roles.detail',[
            'role' => $role
        ]);

    }

    public function create(){
        return view('roles.create');
    }

    public function save( Request $request ){

        $role = DB::table('roles')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'active' => 1
        ]);

        return redirect()->action('RolesController@index')->with('status', 'Rol creado');
    }

    public function delete( $id ){
        $role = DB::table('roles')->where('id', '=', $id)->delete();
        return redirect()->action('RolesController@index')->with('status', 'Rol borrado');
    }

    public function update( $id ){

        $role = DB::table('roles')->where('id', '=', $id)->first();

        return view('roles.update', [
            'role' => $role
        ]);

    }

    public function update2( Request $request){

        $role = DB::table('roles')->where('id', '=', $request->input('id'))->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        return redirect()->action('RolesController@detail', [ 'id' => $request->input('id') ])->with('status', 'Fruta actualizada');
    }
}
