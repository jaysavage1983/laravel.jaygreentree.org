<?php


namespace App\Http\Controllers;
use App\Models\Post; // Assuming your Post model is in App\Models
use Illuminate\Http\Request;

class HomeController extends Controller 
{
    public function index() 
    {
        $Posts = Post::latest()->take(3)->get(); // Fetch the 3 latest posts
            return view('pages.home', compact('Posts')); // Pass data to the 'home' view
        }
}