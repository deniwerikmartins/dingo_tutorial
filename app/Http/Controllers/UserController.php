<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Transformers\UserTransformer;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Cache;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        $users = User::all();

        return $this->response->collection($users, new UserTransformer());
    }*/
    public function index()
    {

        $key = "laravel::User";

        $time = 30;

        $usersCache = Cache::remember($key,$time, function (){
            $users = User::get();
           return $users;
        });

        return $usersCache;

        /*$users = User::paginate(10);
        return $this->response->paginator($users, new UserTransformer());*/

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = $this->userService->create($request->all());

        return $this->response->item($user, new UserTransformer());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userService->find($id);

        return $this->response->item($user, new UserTransformer());
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        try {
            $user = $this->userService->find($id);
            $user = $this->userService->update($user, $request->all());
        } catch (ModelNotFoundException $exception) {
            $this->response->errorNotFound();
        }


        return $this->response->item($user, new UserTransformer());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->userService->find($id);
        $this->userService->delete($user);

        return $this->success();
    }
}
