<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\StockOpname;
 
use Session;
 
use App\Exports\StockOpnameExport;
use App\Imports\StockOpnameImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class StockOpnameController extends Controller
{
	public function index()
	{
		$stockopname = StockOpname::all();
		return view('stockopname',['stockopname'=>$stockopname]);
	}
 
	public function export_excel()
	{
		return Excel::download(new StockOpnameExport, 'stock.xlsx');
	}
 
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_stockopname di dalam folder public
		$file->move('file_stockopname',$nama_file);
 
		// import data
		Excel::import(new StockOpnameImport, public_path('/file_stockopname/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Stock Opname Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/stockopname');
	}
}