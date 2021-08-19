<?php

namespace App\Interfaces\Services\Auth;

interface AuthServiceInterface
{
    /**
     * Alpha version
     * Store user data to table
     *
     * @return object
     */
    public function storeUser($request);

    /**
     * Alpha version
     * Store user data to table
     * @param $credentials, $request
     * @return boolean
     */
    public function authenticateUser($credentials, $request);

    /**
     * Alpha version
     * Store user data to table
     * @param $request
     * @void
     */
    public function logoutUser($request);
}
