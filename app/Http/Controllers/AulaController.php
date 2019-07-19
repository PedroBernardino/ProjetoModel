<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
	
class AulaController extends Controller
{
	public function createStudent(Request $request)
	{
		$aluno = new Student;
		$aluno->name = $request->name;
		$aluno->registration = $request->registration;
		$aluno->email = $request->email;
		$aluno->phone = $request->phone;
		$aluno->save();
		return response()->json([$aluno]);
	}
	public function listStudent()
	{
		return Student::all();
	}
	public function findStudent($id)
	{
		$aluno = Student::find($id);
		if($aluno){
			return response()->success($aluno);
		}else{
			$data = "Aluno não Encontrado, verifique o id";
			return response()->error($data,400);
		}
	}
	public function updateStudent(Request $request, $id)
	{
		$aluno = Student::find($id);
		if($request->name)
		{
			$aluno->name = $request->name;
		}
		if($request->registration)
		{
			$aluno->registration = $request->registration;
		}
		if($request->email)
		{
			$aluno->email = $request->email;
		}
		if($request->phone)
		{
			$aluno->phone = $request->phone;
		}
		$aluno->save();
		
		if($aluno){
			return response()->success($aluno);
		}else{
			$data = "Aluno não Encontrado, verifique o id";
			return response()->error($data,400);
		}
	}
	public function deleteStudent($id)
	{
		if(Student::destroy($id)){
			return response()->json(['Estudante deletado']);
		}else{
			return response()->json(['Aluno não encontrado, verifique o id']);
			
	}
}
