<?php

namespace App\Http\Controllers;

use App\Category;
use App\User;
use Illuminate\Http\Request;
use App\Link;
use Illuminate\Support\Facades\DB;

class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::orderBy('id', 'desc')->get();
//        $user_id = auth()->user('id');
//        $user = User::find($user_id);
//        return view('home')->with('user', $user->links);
        return view('pages.favlist')->with('links', $links);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
           'url' => 'required',
           'category' => 'required',
        ]);

//         Create Fav
        // If no user is authentified, set the user id to 0
        if(auth()->user() != null) {
            Link::create([
                'title'       => $request->input('title'),
                'url'         => $request->input('url'),
                'category_id' => $request->input('category'),
                'user_id' => auth()->user()->id,
            ]);
        } else {
            Link::create([
                'title'       => $request->input('title'),
                'url'         => $request->input('url'),
                'category_id' => $request->input('category'),
                'user_id' => 0,
            ]);
        }

        return redirect(route('links.index'))->with('success', 'Favorite create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link = Link::find($id);
        return view('pages.show', compact('link'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $link = Link::find($id);
        $data = [
            'link' => $link,
            'categories' => $categories
        ];
        return view('pages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'url' => 'required',
            'category' => 'required',
        ]);

//         Modify fav
        $thatLink = Link::find($id);
        $thatLink->update([
            'title'       => $request->input('title'),
            'url'         => $request->input('url'),
            'category_id' => $request->input('category')
        ]);

        return redirect(route('links.index'))->with('success', 'Favorite updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete fav
        $thatLink = Link::find($id);
        $thatLink->delete();

        return redirect(route('links.index'))->with('success', 'Favorite delete');
    }
}
