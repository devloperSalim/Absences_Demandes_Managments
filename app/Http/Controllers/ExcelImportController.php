<?php

namespace App\Http\Controllers;

use Carbon\Traits\Date;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelImportController extends Controller
{
    public function importGroup(Request $request)
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

        // Iterate through rows and columns to read data
        $data = [];


        // Iterate through rows and columns to read data
        for ($row = 2; $row <= $highestRow; $row++) {
            $dateINt = $worksheet->getCell('A' . $row)->getValue();
            $dateValue = Date::excelToDateTimeObject($dateINt);
            $formattedDate = $dateValue->format('m/d/Y');
            $rowData = [
                'date' => $formattedDate,
                'region' => $worksheet->getCell('B' . $row)->getValue(),
                'salesman' => $worksheet->getCell('C' . $row)->getValue(),
                'product' => $worksheet->getCell('D' . $row)->getValue(),
                'quantity' => $worksheet->getCell('E' . $row)->getValue(),
                'price' => $worksheet->getCell('F' . $row)->getValue(),
            ];

            // Add row data to the array
            $data[] = $rowData;

        }

        // Insert the data into the database
        // SalesData::insert($data);

        // Optionally, you can return the data or process it further
        return response()->json($data);
    }
    public function importStagiaire(Request $request)
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

        // Iterate through rows and columns to read data
        $data = [];


        // Iterate through rows and columns to read data
        for ($row = 2; $row <= $highestRow; $row++) {
            $dateINt = $worksheet->getCell('A' . $row)->getValue();
            $dateValue = Date::excelToDateTimeObject($dateINt);
            $formattedDate = $dateValue->format('m/d/Y');
            $rowData = [
                'date' => $formattedDate,
                'region' => $worksheet->getCell('B' . $row)->getValue(),
                'salesman' => $worksheet->getCell('C' . $row)->getValue(),
                'product' => $worksheet->getCell('D' . $row)->getValue(),
                'quantity' => $worksheet->getCell('E' . $row)->getValue(),
                'price' => $worksheet->getCell('F' . $row)->getValue(),
            ];

            // Add row data to the array
            $data[] = $rowData;

        }

        // Insert the data into the database
        // SalesData::insert($data);

        // Optionally, you can return the data or process it further
        return response()->json($data);
    }


    public function importModule(Request $request)
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

        // Iterate through rows and columns to read data
        $data = [];


        // Iterate through rows and columns to read data
        for ($row = 2; $row <= $highestRow; $row++) {
            $dateINt = $worksheet->getCell('A' . $row)->getValue();
            $dateValue = Date::excelToDateTimeObject($dateINt);
            $formattedDate = $dateValue->format('m/d/Y');
            $rowData = [
                'date' => $formattedDate,
                'region' => $worksheet->getCell('B' . $row)->getValue(),
                'salesman' => $worksheet->getCell('C' . $row)->getValue(),
                'product' => $worksheet->getCell('D' . $row)->getValue(),
                'quantity' => $worksheet->getCell('E' . $row)->getValue(),
                'price' => $worksheet->getCell('F' . $row)->getValue(),
            ];

            // Add row data to the array
            $data[] = $rowData;

        }

        // Insert the data into the database
        // SalesData::insert($data);

        // Optionally, you can return the data or process it further
        return response()->json($data);
    }




    public function avancement(Request $request)
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

        // Iterate through rows and columns to read data
        $data = [];


        // Iterate through rows and columns to read data
        for ($row = 2; $row <= $highestRow; $row++) {
            $dateINt = $worksheet->getCell('A' . $row)->getValue();
            $dateValue = Date::excelToDateTimeObject($dateINt);
            $formattedDate = $dateValue->format('m/d/Y');
            $rowData = [
                'date' => $formattedDate,
                'region' => $worksheet->getCell('B' . $row)->getValue(),
                'salesman' => $worksheet->getCell('C' . $row)->getValue(),
                'product' => $worksheet->getCell('D' . $row)->getValue(),
                'quantity' => $worksheet->getCell('E' . $row)->getValue(),
                'price' => $worksheet->getCell('F' . $row)->getValue(),
            ];

            // Add row data to the array
            $data[] = $rowData;

        }

        // Insert the data into the database
        // SalesData::insert($data);

        // Optionally, you can return the data or process it further
        return response()->json($data);
    }
}
