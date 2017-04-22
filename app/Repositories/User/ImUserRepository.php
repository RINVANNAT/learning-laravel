<?php
namespace App\Repositories\User;
/**
 * Created by PhpStorm.
 * User: vannat_gic
 * Date: 4/22/17
 * Time: 11:42 AM
 */

use App\Models\User;
use Carbon\Carbon;
class ImUserRepository implements IUserRepository
{

    public function findUser($id)
    {

        // TODO: Implement findUser() method.

        $user = User::find($id);
        if($user) {
            return $user;
        } else{
            return 'Not Found';
        }

    }
    public function getAllUsers()
    {
        // TODO: Implement getAllUsers() method.

        $users = User::all();
        return $users;
    }

    /*
     * $input = ['name' => 'Dara', 'email' => 'dara@me.com',....]
     *
     * */
    public function create($input)
    {
        // TODO: Implement create() method.

        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = $input['password'];
        $user->created_at = Carbon::now();
        $user->save();
        if($user->save()) {
            return true;
        }
    }

    public function update($id, $input)
    {
        // TODO: Implement update() method.

        $user = $this->findUser($id);
        $user->name = isset($input['name'])?$input['name']:$user->name;
        $user->email = isset($input['email'])?$input['email']:$user->email;
        $user->password = isset($input['password'])?$input['password']:$user->password;
        $user->updated_at = Carbon::now();
        $user->save();
        if($user->save()) {
            return true;
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $user = $this->findUser($id);
        $user->delete();
        if($user->delete()) {
            return true;
        }
    }

}