<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use \Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {
        // Render a list of resources

        $faqs = Faq::latest()->get();

        return view('faqs.index', ['faqs' => $faqs]);
    }

    public function show()
    {
        // Show a single resource
    }

    public function create()
    {
        // Show a view to create a new resource

        return view('faq.create');
    }

    public function store(Request $request)
    {
        // Persist the resource
        Faq::create($this->validateFaq($request));

        return redirect(route('faq.index'));
    }

    public function edit(Faq $faq)
    {
        // Show a view to edit an existing resource
        return view('faqs.edit', ['faq' => $faq]);
    }

    public function update(Request $request, $id)
    {
        Faq::where('id', $id)->update($this->validateFaq($request));
        return redirect(route('faq.index'));
    }

    public function destroy(Faq $faq)
    {
        // $faq = Faq::find($id);
        $faq->delete();

        return redirect(route('faq.index'));
    }

    public function validateFaq(Request $request) : array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
            ]);
    }
}
