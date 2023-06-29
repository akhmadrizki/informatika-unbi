<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index() : View
    {
        $students = Student::latest()->get();

        return view('pages.admin.student.index', compact('students'));
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
            $field = [
                'name'     => $request->name,
                'email'    => $request->email,
                'whatsapp' => $request->whatsapp,
                'school'   => $request->school,
            ];

            Student::create($field);

            DB::commit();
        } catch (\Exception $error) {
            DB::rollBack();

            return redirect()->route('daftar')->with('message', $error->getMessage());
        }

        return redirect()->route('daftar')->with([
            'message' => 'Terimakasih telah mendaftar, silahkan tunggu konfirmasi dari admin.',
            'status'  => 'success',
        ]);

    }
}
