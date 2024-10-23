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
        // Validate input data
        $validateData = $request->validate([
            'firstname' => 'required|string|max:255',
            'middlename' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8', // Password should be at least 8 characters
            'email' => 'required|email|unique:users,email',
            'contactno' => 'nullable|string|max:255',
            'role' => 'required|string|max:255',
        ]);
    
        // Hash the password before saving
        $validateData['password'] = bcrypt($validateData['password']);
    
        // Create the user
        $createUser = User::create($validateData);
    
        // Set a flash message for successful user creation
        session()->flash('success', 'User created successfully!');
    
        // Redirect back to the desired page (replace route as needed)
        return redirect()->route('admin.permit.user');
    }
    

    public function getUser($id)
    {
        $user = User::find($id); // Fetch the user by ID
    
        if ($user) {
            return response()->json($user); // Return the user data as JSON
        }
    
        return response()->json(['error' => 'User not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
        if ($user) {
            // Update the user's data
            $user->update($request->all());
    
            // Store success message in session
            session()->flash('success', 'User updated successfully.');
    
            // Return JSON response
            return response()->json(['success' => true, 'message' => 'User updated successfully.']);
        }
    
        // If user not found, return error JSON response
        return response()->json(['success' => false, 'message' => 'User not found.'], 404);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
    
        if ($user) {
            $user->delete(); // Delete the user
            return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
        }
    
        return response()->json(['success' => false, 'message' => 'User not found.'], 404);
    }
    

    public function authenticate(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
    
        // Retrieve credentials from the request
        $credentials = $request->only('username', 'password');
    
        // Attempt authentication with the provided credentials
        if (Auth::attempt($credentials)) {
            // Authentication successful
    
            // Assign values to both variables and the array for activity logging
            $validateData['firstname'] = Auth::user()->firstname; 
            $validateData['time'] = now()->setTimezone('Asia/Manila')->toDateTimeString();
            $validateData['user_activity'] = 'has <span class="badge badge-info text-dark p-2">logged in</span>';
    
            // Log the activity
            try {
                activity_log::create($validateData);
            } catch (\Exception $e) {
                // Log the exception and return a user-friendly error message
                \Log::error('Activity log failed: ' . $e->getMessage());
                return redirect()->intended('/dashboard')->with('error', 'Login successful, but activity logging failed.');
            }
            
            // Redirect to the intended dashboard after successful authentication and logging
            return redirect()->intended('/dashboard');
        } else {
            // Authentication failed
    
            // Optional: Log the failed attempt with user input (excluding password)
            \Log::warning('Login failed for username: ' . $request->username);
    
            // Redirect back to the login page with an error message
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
