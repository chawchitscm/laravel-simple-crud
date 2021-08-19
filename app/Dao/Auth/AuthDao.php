<?php

namespace App\Dao\Auth;

use App\Interfaces\Dao\Auth\AuthDaoInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthDao implements AuthDaoInterface
{
    
    /**
     * Alpha version
     * Store user data to table
     * @param  $request
     * @return object
     */
    public function storeUser($request)
    {
        $result = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        return $result;
    }

    /**
     * Alpha version
     * authenticate user
     * @param  $credentials
     * @return boolean
     */
    public function authenticateUser($credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        } else {
            return false;
        }
    }
}
