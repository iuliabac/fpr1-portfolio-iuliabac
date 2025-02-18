<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq', [
            'faq' => Faq::all()
        ]);
    }

    public function create()
    {
        return view('faq.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq = Faq::create($validated);

        return redirect('/faq');
    }

    public function show(Faq $faq)
    {
        return view('faq.show', [
            'faq' => $faq
        ]);
    }

    public function edit(Faq $faq)
    {
        return view('faq.edit', [
            'faq' => $faq
        ]);
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq -> update($validated);

        return redirect('/faq', $faq)
            ->with('success', 'Faq updated successfully');
    }

    public function delete(Faq $faq)
    {
        return view('faq.delete', [
            'faq' => $faq
        ]);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect('/faq')
            ->with('success', 'Faq deleted successfully');
    }
}
