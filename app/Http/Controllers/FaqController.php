<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{

    public function index()
    {
        // Render a list of resources

        $faqs = Faq::latest()->get();

        return view('faqs.index', [
            'faqs' => $faqs
        ]);
    }

    public function show($url)
    {
        // Show a single resource
        /*
        $faq = faq::where('url', $url)->firstOrFail();

        return view('faqs.show', [
            'faq' => $faq
        ]);
        */
    }

    public function create()
    {
        // Show a view to create a new resource
    }

    public function store()
    {
        // Persist the resource
    }

    public function edit()
    {
        // Show a view to edit an existing resource
    }

    public function update()
    {
        // Persist the edited resource
    }

    public function destroy()
    {
        // Destroy the resource
    }


}
