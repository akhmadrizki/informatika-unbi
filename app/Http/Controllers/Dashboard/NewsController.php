<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\Models\News;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function index(): View
    {
        $news = News::latest()->get();

        return view('pages.admin.news.index', compact('news'));
    }

    public function create(): View
    {
        return view('pages.admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\NewsStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(NewsStoreRequest $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $news = new News($request->validated());

            $news->user_id = auth()->user()->id;

            if ($request->hasFile('cover')) {
                $image = $request->file('cover');
                $name  = time() . '.' . $image->getClientOriginalExtension();
                $path  = public_path('images/cover/' . $name);
                Image::make($image)->save($path);

                $news->cover = $name;
            }

            $news->save();

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            return redirect()->route('admin.news.create')->with('message', $error->getMessage());
        }

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil ditambahkan.',
            'status'  => 'success',
        ]);
    }

    public function edit(News $news): View
    {
        return view('pages.admin.news.edit', compact('news'));
    }

    public function update(NewsUpdateRequest $request, News $news): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $news->update($request->validated());

            // if user not update cover, then use the old one
            if (!$request->hasFile('cover')) {
                $news->cover = $news->getOriginal('cover');
            } else {
                $image = $request->file('cover');
                $name  = time() . '.' . $image->getClientOriginalExtension();
                $path  = public_path('images/cover/' . $name);
                Image::make($image)->save($path);

                $news->cover = $name;
            }

            $news->save();

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            return redirect()->route('admin.news.edit', $news->id)->with('message', $error->getMessage());
        }

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil diubah.',
            'status'  => 'success',
        ]);
    }

    public function destroy(News $news): RedirectResponse
    {
        DB::beginTransaction();

        try {
            $news->delete();

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            return redirect()->route('admin.news.index')->with('message', $error->getMessage());
        }

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil dihapus.',
            'status'  => 'success',
        ]);
    }
}
