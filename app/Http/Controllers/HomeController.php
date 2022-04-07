<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index controller
    public function index()
    {
        return view('index');
    }

    // about us controller
    public function aboutUs()
    {
        return view('templates.about-us');
    }

    // all jobs controller
    public function allJobs()
    {
        return view('templates.all-jobs');
    }

    // contact-us controller
    public function contactUs()
    {
        return view('templates.contact-us');
    }

    // dashboard controller
    public function dashboard()
    {
        return view('templates.dashboard');
    }

    // experience controller
    public function experience()
    {
        return view('templates.experience');
    }

    // job controller
    public function job()
    {
        return view('templates.job');
    }

    // experience controller
    public function login()
    {
        return view('templates.experience');
    }

    // partners controller
    public function partners()
    {
        return view('templates.partners');
    }

    // profile controller
    public function profile()
    {
        return view('templates.profile');
    }

    // qualification controller
    public function qualification()
    {
        return view('templates.qualification');
    }

    // services controller
    public function services()
    {
        return view('templates.services');
    }

    // signup controller
    public function signup()
    {
        return view('templates.signup');
    }

    // skills controller
    public function skills()
    {
        return view('templates.skills');
    }

    // sidebar controller
    public function sidebar()
    {
        return view('layout.master');
    }

    // admin dashboard controller
    public function admin()
    {
        return view('templates.admin');
    }
}