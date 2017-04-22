<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Repositories\User\IUserRepository;

class UserController extends Controller
{

    protected $users;

    public function __construct(IUserRepository $userRepo)
    {
        $this->users = $userRepo;

    }

    public function index1() {

        $users = User::get();
        return view('admin.user.index', compact('users'));
    }



    public function index() {

        $input = [
            'name' => 'Daney',
            'email' => 'd@ney.com',
            'password' => bcrypt('123')
        ];
        $user = $this->users->create($input);

        dd($user);


    }
}
