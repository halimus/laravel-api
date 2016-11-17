<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dingo\Api\Routing\Helpers;
use App\User;



class UserController extends Controller {

    use Helpers;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $users = User::all();
        
        return response()->json(['results' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $user = User::find($id);

        if (!$user) {
            //return response()->json(['error' => ['message' => 'Joke does not exist', 'status_code'=> '404']], 404);
            //return response()->json(['message' => 'User not found', 'status_code'=> '404'], 404);
            
            //Using Dingo Helpers
            //return $this->response->errorNotFound();
            return $this->response->error('User not found', 404);
        }
        
        return response()->json(['result' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        
        $user = User::find($id);
        
        if (!$user) {
            return $this->response->error('User not found', 404);
        }
        
        $user->delete();
        return $this->response->success('Article has been deleted', 200);

        
    }

}
