<?php
namespace App\Interfaces\Dao\Auth;

interface AuthDaoInterface
{
    /**
     * Alpha version
     * Store user data to table
     * @param $request
     * @return object
     */
    public function storeUser($request);

    /**
     * Alpha version
     * authenticate user
     * @param $credentials
     * @return boolean
     */
    public function authenticateUser($credentials);
}
