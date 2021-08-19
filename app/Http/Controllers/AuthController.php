<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreAuthRequest;
use App\Interfaces\Services\Auth\AuthServiceInterface;

class AuthController extends Controller
{
    private $authInterface;
    
    /**
     * Create controller instance
     * 
     */
    public function __construct(AuthServiceInterface $authInterface) {
        $this->authInterface = $authInterface;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\StoreAuthRequest  $request
     * @return redirect
     */
    public function storeUser(StoreAuthRequest $request)
    {
        $this->authInterface->storeUser($request);
        return redirect()->route('user#register')
            ->with('success', 'User registered successfully.');
    }

    /**
     * Login into the system
     *
     * @param  App\Http\Requests\StoreAuthRequest  $request
     * @return redirect
     */
    public function authenticateUser(StoreAuthRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if ($this->authInterface->authenticateUser($credentials, $request)) {
            return redirect()->intended('products');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    /**
     * logout the system
     *
     * @return redirect
     */
    public function logoutUser(Request $request)
    {
        $this->authInterface->logoutUser($request);
        return redirect()->route('user#login');
    }
}
