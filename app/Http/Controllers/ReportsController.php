<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvoiceLine;
use App\Models\InvoiceHeader;
use App\Models\Location;
use DB;


class ReportsController extends Controller
{
    private $dbName = 'kitchen_cut';

    protected function index ()
    {
        return view('index');
    }

    // List invoices
    public function invoice_index()
    {

        $sql = "SELECT l.name AS location_name, ih.date, ih.status, il.value";
        $sql .= " FROM `" . $this->dbName . "`.invoice_headers ih";
        $sql .= " JOIN `" . $this->dbName . "`.locations l ON ih.location_id = l.id";
        $sql .= " JOIN `" . $this->dbName . "`.invoice_lines il ON ih.id = il.invoice_header_id";

        $invoices = DB::select( DB::raw($sql));


        return view('invoices_index')->with(['invoices' => $invoices]);
    }


    // List locations
    public function location_index()
    {
        $sql ="SELECT ANY_VALUE(l.id) AS location_id, SUM(il.value) AS il_sum";
        $sql .= " FROM `" . $this->dbName . "`.locations l";
        $sql .= " JOIN `" . $this->dbName . "`.invoice_headers ih ON ih.location_id = l.id";
        $sql .= " JOIN `" . $this->dbName . "`.invoice_lines il ON ih.id = il.invoice_header_id";
        $sql .= " GROUP BY ih.status";

        $locations = DB::select( DB::raw($sql));

        return view('locations_index')->with(['locations' => $locations]);
    }


}
