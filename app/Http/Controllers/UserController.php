<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\activity_log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view('admin.permit.user',[
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'firstname' => 'nullable|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255',
            'password' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users',
            'contactno' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255'
        ]);
    
        $createUser = User::create($validateData);
    
        // Set a flash message for successful user creation
        session()->flash('success', 'User created successfully!');
    
        // Redirect to the desired page
        return redirect()->route('admin.permit.user');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to dashboard or desired route

            // Assign values to both variables and the array
            $validateData['firstname'] = Auth::user()->firstname; 
            $validateData['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $validateData['user_activity'] = 'has <span class="badge badge-info text-dark p-2">logged in</span>';

            $log = activity_log::create($validateData);
            
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed, redirect back with error message
            return redirect()->route('login')->with('error', 'Invalid username or password.');
        }
    }

    public function logout(Request $request)
    {
        // dd('this is custom logout');
        // Get the currently authenticated user
        $user = Auth::user();

        // Log the logout activity
        if ($request->input('action') == 'logout') {

            $logout['firstname'] = Auth::user()->firstname; 
            $logout['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $logout['user_activity'] = 'has <span class="badge badge-secondary text-white p-2">logged out</span>';

        $logout = activity_log::create($logout);

        } 

        // Perform logout
        Auth::logout();

        // Redirect to the login page or any desired route
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }

}
