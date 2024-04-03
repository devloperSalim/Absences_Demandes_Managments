<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Stagiaire;
use Carbon\Carbon;
use Illuminate\Http\Request; 
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Shared\Date; 


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
            // Initialize an array to keep track of unique code_group values
            $uniqueCodeGroups = [];

        // Iterate through rows and columns to read data
        for ($row = 2; $row <= $highestRow; $row++) { 
            $rowData = [ 
                'code_group' => $worksheet->getCell('A' . $row)->getValue(),
                'nom_ilière' => $worksheet->getCell('B' . $row)->getValue(), 
            ];
                // Check if the code_group value is already present in the uniqueCodeGroups array
            if (in_array($rowData['code_group'], $uniqueCodeGroups)) {
                // Handle duplicate entry here (e.g., log, skip, or throw an exception)
                continue; // Skip this row and move to the next one
            }

            // Add the code_group value to the uniqueCodeGroups array
            $uniqueCodeGroups[] = $rowData['code_group'];


            // Add row data to the array
            $data[] = $rowData; 

        }
          
        // dd($data);

        // Insert the data into the database
        Group::insert($data);

        // Optionally, you can return the data or process it further
        return to_route('groups.index');
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
        // $spreadsheet = IOFactory::load($file);
        
        // Load the Excel file with caching enabled
        $reader = new Xlsx();
        $reader->setReadDataOnly(true); // Read only data, not formatting
        // $reader->setLoadSheetsOnly(['Sheet1']); // Specify sheets to load if known
        $reader->setReadEmptyCells(false); // Skip empty cells
        // $reader->setReadFilter(new MyReadFilter()); // Set your own read filter if needed
        // $reader->setReadCacheEnabled(true); // Enable caching
        // dd($file->getPathname());
        $spreadsheet = $reader->load($file->getPathname());
        
                // Get the first worksheet
                $worksheet = $spreadsheet->getActiveSheet();
        
                // Get the highest column and row numbers
                $highestRow = $worksheet->getHighestDataRow(); // e.g., 10
        // Iterate through rows and columns to read data
        $data = [];
 

        // Iterate through rows and columns to read data
        for ($row = 2; $row <= $highestRow; $row++) { 
            
            $date = $worksheet->getCell('F' . $row)->getValue();
            
 
            if($worksheet->getCell('E' . $row)->getValue()=="Oui"){
                $Stagiare_en_fomation = 1;
            }else{
                $Stagiare_en_fomation = 0;
            }
            if($worksheet->getCell('D' . $row)->getValue() === null){
                $email_etu = "ofppt@ofppt-edu.ma";
            }else{
                $email_etu = $worksheet->getCell('D'. $row)->getValue() ;
            }
            // Get password value
                $password = $worksheet->getCell('H' . $row)->getValue();

                // Check if password is null
                if ($password === null) {
                    $password = "123445678"; // Set default password
                }
            $rowData = [ 
                'nom' => $worksheet->getCell('A' . $row)->getValue(),
                'prenom' => $worksheet->getCell('B' . $row)->getValue(),
                'nationalite' => $worksheet->getCell('C' . $row)->getValue(),
                'email_etu' => $email_etu,
                'stagaire_en_formation' => $Stagiare_en_fomation,
                'date_pv' => $date,
                'code_group' => $worksheet->getCell('G' . $row)->getValue(),
                'password' =>$password,
            ];
            $rowData['code_group'] = trim($rowData['code_group']); // Trim whitespace

            // Check if the code_group exists in the groups table
            $group = Group::where('code_group', $rowData['code_group'])->first();
            if($group) {
                // Add row data to the array
                $data[] = $rowData;
            }else{
                // Handle missing code_group here (e.g., log, skip, or throw an exception)
                continue; // Skip this row and move to the next one
            } 
             
            } 
            
            // Insert the data into the database 
            Stagiaire::insert($data);


        // Get all groups
    $groups = Group::all();

    foreach ($groups as $group) {
        // Count the number of stagiaires for each group
        $count = Stagiaire::where('code_group', $group->code_group)->count();

        // Update the nbr_stagiaires field in the groups table
        $group->update(['nbr_stagiaires' => $count]);
    }
        // Optionally, you can return the data or process it further
        return to_route('groups.index');;
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
            // $dateINt = $worksheet->getCell('A' . $row)->getValue();
            // $dateValue = Date::excelToDateTimeObject($dateINt);
            // $formattedDate = $dateValue->format('m/d/Y');
            $rowData = [
                // 'date' => $formattedDate,
                'Code_module' => $worksheet->getCell('A' . $row)->getValue(),
                'Nom_module' => $worksheet->getCell('B' . $row)->getValue(),
                'Régional' => $worksheet->getCell('C' . $row)->getValue(),
                'MH_Totale' => $worksheet->getCell('D' . $row)->getValue(),
                'MHP_Totale' => $worksheet->getCell('E' . $row)->getValue(),
                'MHSYN_Totale' => $worksheet->getCell('F' . $row)->getValue(),
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
            $dateINt = $worksheet->getCell('F' . $row)->getValue();
            $dateValue = Date::excelToDateTimeObject($dateINt);
            $formattedDate = $dateValue->format('m/d/Y');
            $rowData = [
                'nom' => $worksheet->getCell('A' . $row)->getValue(),
                'prenom' => $worksheet->getCell('B' . $row)->getValue(),
                'nationalite' => $worksheet->getCell('C' . $row)->getValue(),
                'email_etu' => $worksheet->getCell('D' . $row)->getValue(),
                'isStagiaire' => $worksheet->getCell('E' . $row)->getValue(), 
                'date_pv' => $formattedDate,
                'password'=>$worksheet->getCell('G' . $row)->getValue(),
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
