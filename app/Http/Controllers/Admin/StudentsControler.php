<?php

namespace App\Http\Controllers\Admin;

use App\Student;
use function compact;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function view;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')
            ->orderBy('name', 'asc')
            ->paginate(20);

        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validate($request);
        Student::create($request->all());
        return response()->redirectToRoute('alunos.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findorFail($id);
        return view('admin.students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findorFail($id);
        return view('admin.students.edit', compact('student'));
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
        $student = Student::findOrFail($id);
        $this->_validate($request);
        $student->update($request->all());
        return response()->redirectToRoute('alunos.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return response()->redirectToRoute('alunos.index');
    }

    protected function _validate(Request $request)
    {
        $maritalStatus = implode(',', array_keys(Student::MARITAL_STATUS));
        return $this->validate($request,[
            'name' => 'required|min:3|max:255',
            'cpf' => 'required|cpf',
            'email' => 'required|email',
            'phone' => 'required',
            'date_birth' => 'required|date',
            'marital_status' => "required|in:$maritalStatus",
            'sex' => 'required|in:m,f',
        ]);
    }
}
