<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report_card;

class BoletimController extends Controller
{
		public function createReport_card(Request $request)
	{
		$boletim = new Report_card;
		$boletim->portuguese_note = $request->portuguese_note;
		$boletim->english_note = $request->english_note;
		$boletim->science_note = $request->science_note;
		$boletim->math_note = $request->math_note;
		$boletim->save();
		return response()->json([$boletim]);
	}
	public function listReport_card()
	{
		return Report_card::all();
	}
	public function findReport_card($id)
	{
		$boletim = Report_card::find($id);
		if($boletim){
			return response()->success($boletim);
		}else{
			$data = "Boletim não Encontrado, verifique o id";
			return response()->error($data,400);
		}
	}
	public function updateReport_card(Request $request, $id)
	{
		$boletim = Report_card::find($id);
		if($request->portuguese_note)
		{
			$boletim->portuguese_note = $request->portuguese_note;
		}
		if($request->english_note)
		{
			$boletim->english_note = $request->english_note;
		}
		if($request->science_note)
		{
			$boletim->science_note = $request->science_note;
		}
		if($request->math_note)
		{
			$boletim->math_note = $request->math_note;
		}
		$boletim->save();
		
		if($boletim){
			return response()->success($boletim);
		}else{
			$data = "Boletim não Encontrado, verifique o id";
			return response()->error($data,400);
		}
	}
	public function deleteReport_card($id)
	{
		if(Report_card::destroy($id)){
			return response()->json(['Boletim deletado']);
		}else{
			return response()->json(['Boletim não encontrado, verifique o id']);
		}
	}
}
