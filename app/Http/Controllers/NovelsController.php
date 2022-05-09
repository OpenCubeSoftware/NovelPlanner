<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as RequestFacade;
use Inertia\Inertia;

class NovelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        return redirect()->to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('create', [Novel::class]);
        $title = RequestFacade::input('title');
        $novel = Novel::create(['title' => $title, 'user_id' => Auth::user()->id]);
        return Inertia::location(route('novels.edit', ['novel' => $novel->id]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Inertia\Response
     */
    public function show(Novel $novel)
    {
        $this->authorize('view', [$novel]);
        return Inertia::render('Novels/Show', [
            'novel' => $novel,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Inertia\Response
     */
    public function edit(Novel $novel)
    {
        $this->authorize('update', $novel);
        return Inertia::render('Novels/Edit', [
            'novel' => $novel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Novel $novel)
    {
        $this->authorize('update', $novel);
        $rules = Novel::getRules();
        $validated = $request->validate($rules);
        $novel->fill($validated);
        $novel->save();

        return redirect()->route('novels.show', ['novel' => $novel->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
