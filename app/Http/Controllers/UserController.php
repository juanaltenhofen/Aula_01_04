<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Index.
     */
    public function index(): View
    {
        return view('user.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Create.
     */
    public function create(): View
    {
        return view('user.create');
    }

    /**
     * Store.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...
 
        $user = new User;
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = '.';
 
        $user->save();
 
        return redirect('/users');
    }

    /**
     * Update.
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        // Validate the request...
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
 
        return redirect('/users');
    }

    /**
     * Delete.
     */
    public function delete(User $user): RedirectResponse
    {
        $user->delete();
 
        return redirect('/users');
    }

    /**
     * Show the profile for a given user.
     */
    public function details(string $id): View
    {
        return view('user.details', [
            'user' => User::findOrFail($id)
        ]);
    }
}
