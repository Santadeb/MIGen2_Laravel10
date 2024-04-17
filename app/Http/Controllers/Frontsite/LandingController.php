<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Models\User;
use App\Models\Operational\Doctor;
use App\Models\MasterData\Specialist;
use GuzzleHttp\Psr7\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('pages.frontsite.landing-page.index');
    }

    public function create()
    {
        return abort(404);
    }

    public function store(Request $request)
    {
        return abort(404);
    }

    public function show($id)
    {
        return abort(404);
    }

    public function edit($id)
    {
        return abort(404);
    }

    public function update(Request $request, $id)
    {
        return abort(404);
    }

    public function destroy($id)
    {
        return abort(404);
    }
    
    // Custom functions here
}