<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::all();
        return view('applications.index', compact('applications'));
    }

    public function create()
    {
        return view('applications.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'applicant_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'application_date' => 'required|date',
        ]);

        // Menyimpan data lamaran baru
        JobApplication::create($request->only('applicant_name', 'company_name', 'job_title', 'application_date'));

        return redirect()->route('applications.index')->with('success', 'Lamaran berhasil disimpan');
    }

    public function edit($id)
    {
        $application = JobApplication::findOrFail($id);
        return view('applications.edit', compact('application'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'applicant_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'application_date' => 'required|date',
        ]);

        // Mencari aplikasi berdasarkan ID
        $application = JobApplication::findOrFail($id);

        // Memperbarui aplikasi dengan data baru
        $application->update($request->only('applicant_name', 'company_name', 'job_title', 'application_date'));

        return redirect()->route('applications.index')->with('success', 'Lamaran berhasil diperbarui');
    }

    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);
        $application->delete();

        return redirect()->route('applications.index')->with('success', 'Lamaran berhasil dihapus');
    }
}
