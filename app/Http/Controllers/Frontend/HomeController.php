<?php

// app/Http/Controllers/Frontend/HomeController.php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Blog;
use App\Models\ClientReview;
use App\Models\FunFact;
use App\Models\Service;
use App\Models\About; // Add this line

class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        $blogs = Blog::latest()->take(4)->get();
        $reviews = ClientReview::all();
        $funFacts = FunFact::all();
        $services = Service::all();
        $about = About::first(); // Retrieve the first about record

        return view('Frontend.index', compact('contact', 'blogs', 'reviews', 'funFacts', 'services', 'about'));
    }
}
