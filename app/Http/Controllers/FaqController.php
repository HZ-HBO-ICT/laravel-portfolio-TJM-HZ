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

    public function show()
    {
        // Show a single resource
    }

    public function create()
    {
        // Show a view to create a new resource

        return view('faqs.create');
    }

    public function store()
    {
        // Persist the resource
        $faq = new Faq();
        $faq->question = request('question');
        $faq->answer = request('answer');

        $faq->save();

        return redirect('/faq');
    }

    public function edit($id)
    {
        $faq = Faq::find($id);
        // Show a view to edit an existing resource
        return view('faqs.edit', ['faq' => $faq]);
    }

    public function update($id)
    {
        $faq = Faq::find($id);

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->save();

        return redirect('/faq');
        // Persist the edited resource
    }

    public function destroy($id)
    {
        $faq = Faq::find($id);
        $faq->delete();

        return redirect('/faq');
    }
}
