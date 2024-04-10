<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUser = User::where('id',session('LoggedUser'))->first(); // Get the authenticated user
        $age =  $currentUser->profile->age;
        $threads = Thread::join('users', 'threads.user_id', '=', 'users.id')
        ->join('profiles', 'users.id', '=', 'profiles.user_id')
        ->whereBetween('profiles.age', [$age - 5, $age + 5]) // age -5 and age +5 representing the user's age range
        ->where('profiles.language', $currentUser->profile->language)
        ->where('profiles.city', $currentUser->profile->city)
        ->where('profiles.country',$currentUser->profile->country)
        ->orderBy('profiles.followers_count', 'desc')
        ->orderBy('threads.likes_count', 'desc')
        ->orderBy('threads.created_at', 'desc')
        ->paginate(10);

        return view('thread', compact('threads'));
    }
}
