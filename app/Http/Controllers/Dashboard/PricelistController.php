<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Pricing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        $image = Pricing::all();

        return view('pages.admin.pricelist.index', compact('image'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) : RedirectResponse
    {
        DB::beginTransaction();

        try {
            $this->validate($request, [
                'pricelist' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);

            $image    = $request->file('pricelist');
            $name     = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $name);

            Image::make($image)->save($location);

            Pricing::updateOrCreate([
                'id' => 1,
            ], [
                'pricelist' => $name,
            ]);

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            return redirect()->route('admin.pricelist.index')->with('message', $error->getMessage());
        }

        return redirect()->route('admin.pricelist.index')->with([
            'message' => 'Biaya Pendidikan Berhasil Diupdate',
            'status'  => 'success',
        ]);
    }
}
