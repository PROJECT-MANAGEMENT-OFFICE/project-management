<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Project Report</title>

    {{-- <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }

        .tittle-box {
            display: flex;
        }
    </style> --}}

    <style>
        .titles {
            width: 100%;
            background-color: #ddd;
            color: #000;
            padding: 10px 0px 10px 2px;
            margin-bottom: 15px
        }
        table.table-project-definition, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            
        }
        td.table-information{
            border:none;
        }
        th {
            background-color: #ddd;
            padding: 5px;
            vertical-align: top; 
        }
        
        td{
            padding: 5px 0px 0px 5px;
        }
    </style>
</head>
<body>
<h3 class="mb-4">Executive Summary of a Project Report</h3>

@if (!@empty($filteredData))
@foreach ($filteredData as $u)
<h4 class="titles">Project Definition</h3>
<table class="mb-5" style="width:100%">
<tr>
    <td class="table-information">Project Title</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->name_project}}</td>
    <td class="table-information">Source of Funds</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->source_ofFunds}}</td>
    </tr>
    <tr>
    <td class="table-information">Project Code</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->code_project}}</td>
    <td class="table-information">Schema Bussines</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->schema_bussines}}</td>
    </tr>
    <tr>
    <td class="table-information">Start Date</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->date}}</td>
    <td class="table-information">Contract Duration</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->contract_duration}}</td>
    </tr>
    <tr>
    <td class="table-information">Contract Value</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->contract_value}}</td>
    <td class="table-information">Business Line</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->bussines_line}}</td>
    </tr>
    <tr>
    <td class="table-information">Status</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->status}}</td>
    <td class="table-information">Warranty Period</td>
    <td class="table-information">:</td>
    <td class="table-information" colspan="5">{{$u->warranty_period}}</td>
</tr>
</table>
@endforeach
@endif

<!-- {{-- project definition table start --}} -->
<h4 class="titles">Risk</h3>
<table class="table-project-definition" style="width:100%">
    <thead>
        <tr>
            <th>Start Date</th>
            <th>Description of Risk</th>
            <th>Submitter</th>
            <th>Name Project</th>
            <th>Probability Factor</th>
            <th>Impact Factor</th>
            <th>Exposure</th>
            <th>Risk Reponse Type</th>
            <th>Risk Reponse Plan</th>
            <th>Assigned To</th>
            <th>Status</th>
            <th>Due Date</th>
        </tr>
    </thead>
    <tbody>
        @if (!@empty($filteredData2))                                        
            @foreach ($filteredData2 as $u)
            <tr class="text-white">
                <td><small>{{$u->start_date}}</small></td>
                <td><small>{{$u->description_ofrisk}}</small></td>
                <td><small>{{$u->submitter}}</small></td>
                <td><small>{{$u->name_project}}</small></td>
                <td><small>{{$u->probability_factor}}</small></td>
                <td><small>{{$u->impact_factor}}</small></td>
                <td><small>{{$u->exposure}}</small></td>
                <td><small>{{$u->Risk_reponse_type}}</small></td>
                <td><small>{{$u->Risk_reponse_plan}}</small></td>
                <td><small>{{$u->impact_description}}</small></td>
                <td><small>{{$u->assigned_to}}</small></td>
                <td><small>{{$u->status}}</small></td>
                <td><small>{{$u->due_date}}</small></td>
            </tr>
            @endforeach
        @else
            @foreach ($risks as $u)
            <tr class="text-white">
                <td><small>{{$u->start_date}}</small></td>
                <td><small>{{$u->description_ofrisk}}</small></td>
                <td><small>{{$u->submitter}}</small></td>
                <td><small>{{$u->name_project}}</small></td>
                <td><small>{{$u->probability_factor}}</small></td>
                <td><small>{{$u->impact_factor}}</small></td>
                <td><small>{{$u->exposure}}</small></td>
                <td><small>{{$u->Risk_reponse_type}}</small></td>
                <td><small>{{$u->Risk_reponse_plan}}</small></td>
                <td><small>{{$u->impact_description}}</small></td>
                <td><small>{{$u->assigned_to}}</small></td>
                <td><small>{{$u->status}}</small></td>
                <td><small>{{$u->due_date}}</small></td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>

{{-- project definition table end --}}
</body>
</html>