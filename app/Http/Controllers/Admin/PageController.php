<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index() {
        echo "index";
    }

    public function create() {
        echo "create";
    }

    public function edit() {
        echo "edit";
    }

    public function store(Request $request) {
        echo "store";
    }

    public function update(Request $request, $id) {
        echo 'update';
     }

    public function show($id) {
        echo "show";
    }

    public function destroy($id) {
        echo 'destroy';
    }
}
