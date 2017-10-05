<?php

namespace App\Http\Controllers;



use App\Models\Employee;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\App;

/**
 * Class PdfController
 * @package App\Http\Controllers
 */
class PdfController extends Controller
{
	/**
	 * @return mixed
	 */
	public function generatePdf()
	{
		$employee = Employee::find(1);

		$data = [
			'employee'	=> $employee
		];

		/**
		 * @var PDF $pdf
		 */
		$pdf = App::make('dompdf.wrapper');

		$pdf->setOptions([
			'defaultFont' => 'Open Sans',
			'isPhpEnabled' => true
		]);

		$pdf->loadView('pdf.cv', $data);

		return $pdf->stream();


	}

	public function test()
	{
		dd('test passed');
	}
}
