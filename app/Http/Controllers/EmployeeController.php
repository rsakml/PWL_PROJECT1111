<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //fungsi eloquent menampilkan data menggunakan paginaon
        $employee = Employee::orderBy('id', 'asc')->paginate(5);
        return view('employee.index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('gambar')){
            $gambar1=$request->file('gambar')->store('img','public');
        }
        
            Employee::create([
                'id' => $request->id,
                'nama' => $request->nama,
                'gambar' => $gambar1,
                'jenisKelamin' => $request->jenisKelamin,
                'jabatan' => $request->jabatan,
                'nohp' => $request->nohp
            ]);

        //jika data berhasil ditambahkan, akan kembali ke halaman utama 
        return redirect()->route('employee.index')
        ->with('success', 'Employee Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan detail data dengan menemukan/berdasarkan id Employee
        $employee = Employee::find($id);
        return view('employee.detail', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //menampilkan detail data dengan menemukan berdasarkan id Employee untuk diedit
        $employee = Employee::find($id);
        return view('employee.edit', compact('employee'));
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
        //melakukan validasi data
        $request->validate([ 'id' => 'required', 'nama' => 'required', 'gambar' => 'required',
        'jenisKelamin' => 'required', 'jabatan' => 'required','nohp' => 'required',
        ]);

        //fungsi eloquent untuk mengupdate data inputan kita 
        Employee::find($id)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama 
        return redirect()->route('employee.index')
        ->with('success', 'Employee Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //fungsi eloquent untuk menghapus data 
        Employee::find($id)->delete();
        return redirect()->route('employee.index')
        -> with('success', 'Employee Berhasil Dihapus');
    }
}
