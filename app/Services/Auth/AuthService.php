<?php

namespace App\Services\Auth;

use App\Interfaces\Services\Auth\AuthServiceInterface;
use App\Interfaces\Dao\Auth\AuthDaoInterface;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{
    private $authDao;

    /**
     * Alpha version
     * Class Constructor
     * 
     * @param AuthDaoInterface $productDao
     */
    public function __construct(AuthDaoInterface $authDao)
    {
        $this->authDao = $authDao;
    }

    /**
     * Alpha version
     * Store user data to table
     *
     * @return object
     */
    public function storeUser($request)
    {
        $result = $this->authDao->storeUser($request);
        
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Alpha version
     * Store user data to table
     * @param $credentials, $request
     * @return boolean
     */
    public function authenticateUser($credentials, $request)
    {
        $result = $this->authDao->authenticateUser($credentials);
        
        if ($result) {
            $request->session()->regenerate();
            return true;
        } else {
            return false;
        }
    }

    /**
     * Alpha version
     * Store user data to table
     * @void
     */
    public function logoutUser($request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
}
