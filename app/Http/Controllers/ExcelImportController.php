<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelImportController extends Controller
{
    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('excel_file');

        // Load the Excel file
        $spreadsheet = IOFactory::load($file); 

        // Get the first worksheet
        $worksheet = $spreadsheet->getActiveSheet();

        // Get the highest column and row numbers
        $highestRow = $worksheet->getHighestDataRow(); // e.g., 10
        $highestColumn = $worksheet->getHighestDataColumn(); // e.g., 'F'

        // Iterate through rows and columns to read data
        $data = [];
        for ($row = 1; $row <= $highestRow; $row++) {
            for ($col = 'A'; $col <= $highestColumn; $col++) {
                // Use iconv to handle incomplete multibyte characters
                $cellValue = iconv('UTF-8', 'UTF-8//IGNORE', $worksheet->getCell($col . $row)->getValue());

                // Process cell value as needed
                $data[$row][$col] = $cellValue;
            }
        }

        // Optionally, you can return the data or process it further
        return response()->json($data);
    }
}
