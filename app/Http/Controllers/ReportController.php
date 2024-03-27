<?php

namespace App\Http\Controllers;

use App\Models\Initiating_ProjectDefinition;
use App\Models\planning_risk;
use Illuminate\Http\Request;
use App\Models\ProjectDefinition;
use App\Models\Risk;
use Illuminate\Support\Facades\DB;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        if (Auth()->User()->roles == 'superadmin') {
            $projectDefinition = Initiating_ProjectDefinition::all();
            // Ganti ini jika Anda memiliki cara lain untuk mendapatkan data nama proyek
            // $nameProjects = $this->getNameProjects(); // Anda perlu mengganti ini dengan cara untuk mendapatkan data nama proyek
            return view('home.report')->with(['projectDefinition' => $projectDefinition, 'projectDefinition' => Initiating_ProjectDefinition::latest()->filter(request(['search']))->get()]);
        } else {
            return redirect('/login')->with('error', 'Username dan Password yang Anda Masukan salah');
        }
    }

    public function filter()
    {
        return view('home.report', ['projectDefinition' => Initiating_ProjectDefinition::latest()->filter(request(['search']))->get()]);
    }

    public function getDataFromURL()
    {
        // Mengekstrak parameter dari URL
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
        parse_str($url, $query);
        $searchValue = str_replace('%20', ' ', $query['search']);


        // Membuat kueri berdasarkan parameter yang diterima
        $query = Initiating_ProjectDefinition::query();
        $query2 = planning_risk::query();

        if ($url) {
            $query->where('name_project', 'like', '%' . $searchValue . '%');
        }
        if ($url) {
            $query2->where('name_project', 'like', '%' . $searchValue . '%');
        }

        // Eksekusi kueri
        $filteredData = $query->get();
        $filteredData2 = $query2->get();

        // Lakukan sesuatu dengan data yang difilter
        $html = view('home.report-pdf', compact('filteredData', 'filteredData2'))->render();
        $pdf = PDF::loadHTML($html);

        // Return atau unduh PDF
        return $pdf->stream('report.pdf');
    }

    public function printPDF(Request $request)
    {
        // Ambil data yang diperlukan
        $projectDefinition = Initiating_ProjectDefinition::all();

        // Render view ke dalam HTML
        $html = view('home.report-pdf', compact('projectDefinition'))->render();

        // Buat PDF dengan Dompdf
        $pdf = PDF::loadHTML($html);

        // Return atau unduh PDF
        return $pdf->stream('report.pdf');
    }


    // public function getNameProjects()
    // {
    //     $nameProjects = DB::table('project_definitions')->distinct()->pluck('name_project')->toArray();
    //     return $nameProjects;
    // }
}
