<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request) {
        $users = User::paginate(10);

        return response()->json([
            'users' =>( new UserCollection($users))->additional([
                'total' =>  1,
                'page' =>  1,
            ]),
        ], 200);
    }

    public function store(Request $request) {
        $user  = new User();

        $user->name = $request->name;
        $user->age  = $request->age;
        $user->save();

        return response()->json([
            'user' => $user->refresh()
        ], 200);
    }

    public function update(Request $request, User $user) {

        $user->name = $request->name;
        $user->age  = $request->age;
        $user->save();

        return response()->json([
            'user' => $user->refresh()
        ], 200);
    }

    public function destroy(Request $request, User $user) {

        $user->delete();

        return response()->json([
            'message' => 'deleted'
        ], 200);
    }
    public function show(Request $request, User $user) {

        return response()->json([
            'user' => new UserResource($user->refresh()),
        ], 200);
    }
}
