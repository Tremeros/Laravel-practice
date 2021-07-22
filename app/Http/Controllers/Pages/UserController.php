<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {
    public function show(int $id) {
           $user = User::find($id);
           return view('user', compact(['user']));
    }
}


?>
