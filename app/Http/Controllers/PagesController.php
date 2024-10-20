<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
     return view('index');
    }

    public function about()
    {
        // For demonstration purposes, we're using static data
        $user = [
            'name' => 'Rachael Adebisi',
            'image' => 'Image (27).png',  // Image path (ensure this image exists in the public folder)
            'description' => 'A passionate web developer with expertise in Laravel, Vue.js, and modern web technologies.',
            'skills' => ['Laravel', 'Vue.js', 'JavaScript', 'HTML', 'CSS', 'MySQL', 'typescript', "next.js"],
            'experience' => [
                'Web Developer at ABC Corp (2020 - Present)',
                'Intern at XYZ Ltd. (2019 - 2020)'
            ],
            'education' => [
                'Bachelor of Science in Computer Science, University of XYZ (2016 - 2020)'
            ]
        ];

        // Pass the user data to the about view
        return view('about', compact('user'));
    }
};
