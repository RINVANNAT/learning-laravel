<?php
namespace App\Repositories\User;
/**
 * Created by PhpStorm.
 * User: vannat_gic
 * Date: 4/22/17
 * Time: 11:37 AM
 */
interface IUserRepository
{

    public function findUser($id);

    public function getAllUsers();

    public function create($input);

    public function update($id, $input);

    public function destroy($id);

}