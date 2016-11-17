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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $input = $request->all();
        $input['password'] = bcrypt($request['password']);

        if(User::create($input)){
            return $this->response->created();
        }
        else
           return $this->response->error('could_not_create_user', 500);

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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        
        $user = User::find($id);
        if (!$user) {
            return $this->response->error('User not found', 404);
        }
        
        $input = $request->all();
        
        if(isset($request['password'])){
            $input['password'] = bcrypt($request['password']);
        }
 
        $user->fill($input);
        
        if($user->save()){
            return $this->response->noContent();
        }
        else{
            return $this->response->error('could_not_update_book', 500);
        }
        
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
        
        if($user->delete()){
            return $this->response->noContent();
        }
        else{
           return $this->response->error('could_not_delete_user', 500); 
        }
         
    }

}
