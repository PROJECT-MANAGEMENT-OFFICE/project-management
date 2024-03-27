<?php

use App\Http\Controllers\caseFlowController;
use App\Http\Controllers\GuaranteeController;
use App\Http\Controllers\listAssumsitionController;
use App\Models\Cost;
use App\Models\BebanBahanCost;
use App\Models\BebanBahanExecuting;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CostController;
use App\Http\Controllers\RiskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ScopeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ClosingController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\TermPlanController;
use App\Http\Controllers\ExecutingController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\InitiatingController;
use App\Http\Controllers\teamMoraleController;
use App\Http\Controllers\BebanBarangController;
use App\Http\Controllers\BebanSubkonController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\StakeholderController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\CostExecutingController;
use App\Http\Controllers\reviewMeetingController;
use App\Http\Controllers\BebanBahanCostController;
use App\Http\Controllers\ProjectCharterController;
use App\Http\Controllers\TagihanExecutingController;
use App\Http\Controllers\ControlMonitoringController;
use App\Http\Controllers\ProjectDefinitionController;
use App\Http\Controllers\projectAnouncementController;
use App\Http\Controllers\BebanBahanExecutingController;
use App\Http\Controllers\BebanSubkonExecutingController;
use App\Http\Controllers\ProcurementExecutingController;
use App\Http\Controllers\ProjectIncomeStatementController;
use App\Http\Controllers\TermOfPaymentExecuting;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/add', [UserController::class, 'create']);
Route::post('/user/save', [UserController::class, 'store']);
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);
Route::get('/user/{id}/edit', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);

Route::get('/smbptn', function () {
    return view('pdss');
});

Route::group(['middleware' => ['auth']], function () {


    Route::get('/initiating', [InitiatingController::class, 'index']);

    Route::get('/projectDefinition', [ProjectDefinitionController::class, 'index']);
    Route::get('/projectDefinition/add', [ProjectDefinitionController::class, 'create']);
    Route::post('/projectDefinition/save', [ProjectDefinitionController::class, 'store']);
    Route::post('/projectDefinition/{id}/update', [ProjectDefinitionController::class, 'update']);
    Route::get('/projectDefinition/{id}/delete', [ProjectDefinitionController::class, 'destroy']);
    Route::get('/projectDefinition/{id}/edit', [ProjectDefinitionController::class, 'show']);

    Route::get('/projectCharter', [ProjectCharterController::class, 'index']);

    //planning
    Route::get('/planning', [PlanningController::class, 'index']);
    Route::get('/findPlanning', [PlanningController::class, 'filterPlanning']);

    // cost
    Route::get('/cost', [CostController::class, 'index']);

    // beban bahan cost
    Route::get('/bebanBahanCostExecuting', [BebanBahanCostController::class, 'index',]);
    Route::get('/bebanBahanCostExecuting/create', [BebanBahanCostController::class, 'create']);
    Route::post('/bebanBahanCostExecuting/store', [BebanBahanCostController::class, 'store']);
    Route::get('/bebanBahanCostExecuting/{id}/delete', [BebanBahanCostController::class, 'destroy']);
    Route::post('/bebanBahanCostExecuting/{id}/update', [BebanBahanCostController::class, 'update']);
    Route::get('/bebanBahanCostExecuting/{id}/edit', [BebanBahanCostController::class, 'show']);

    // project income
    Route::get('/projectIncomeStatement', [ProjectIncomeStatementController::class, 'index',]);
    Route::get('/projectIncomeStatement/create', [ProjectIncomeStatementController::class, 'create']);
    Route::post('/projectIncomeStatement/store', [ProjectIncomeStatementController::class, 'store']);
    Route::get('/projectIncomeStatement/{id}/delete', [ProjectIncomeStatementController::class, 'destroy']);
    Route::post('/projectIncomeStatement/{id}/update', [ProjectIncomeStatementController::class, 'update']);
    Route::get('/projectIncomeStatement/{id}/edit', [ProjectIncomeStatementController::class, 'show']);

    //risk
    Route::get('/risk', [RiskController::class, 'index']);
    Route::get('/risk/add', [RiskController::class, 'create']);
    Route::post('/risk/save', [RiskController::class, 'store']);
    Route::get('/risk/{id}/delete', [RiskController::class, 'destroy']);
    Route::get('/risk/{id}/edit', [RiskController::class, 'show']);
    Route::post('/risk/{id}/update', [RiskController::class, 'update']);
    //scope
    Route::get('/scope', [ScopeController::class, 'index']);
    Route::get('/scope/add', [ScopeController::class, 'create']);
    Route::post('/scope/save', [ScopeController::class, 'store']);
    Route::get('/scope/{id}/delete', [ScopeController::class, 'destroy']);
    Route::get('/scope/{id}/edit', [ScopeController::class, 'show']);
    Route::post('/scope/{id}/update', [ScopeController::class, 'update']);
    //resources
    Route::get('/resources', [ResourcesController::class, 'index']);
    Route::get('/resources/add', [ResourcesController::class, 'create']);
    Route::post('/resources/save', [ResourcesController::class, 'store']);
    Route::get('/resources/{id}/delete', [ResourcesController::class, 'destroy']);
    Route::get('/resources/{id}/edit', [ResourcesController::class, 'show']);
    Route::post('/resources/{id}/update', [ResourcesController::class, 'update']);
    //stakeholder
    Route::get('/stakeholder', [StakeholderController::class, 'index']);
    Route::get('/stakeholder/add', [StakeholderController::class, 'create']);
    Route::post('/stakeholder/save', [StakeholderController::class, 'store']);
    Route::get('/stakeholder/{id}/delete', [StakeholderController::class, 'destroy']);
    Route::get('/stakeholder/{id}/edit', [StakeholderController::class, 'show']);
    Route::post('/stakeholder/{id}/update', [StakeholderController::class, 'update']);
    //quality
    Route::get('/quality', [QualityController::class, 'index']);
    Route::get('/quality/add', [QualityController::class, 'create']);
    Route::post('/quality/save', [QualityController::class, 'store']);
    Route::get('/quality/{id}/delete', [QualityController::class, 'destroy']);
    Route::get('/quality/{id}/edit', [QualityController::class, 'show']);
    Route::post('/quality/{id}/update', [QualityController::class, 'update']);
    //procurement
    Route::get('/procurement', [ProcurementController::class, 'index']);
    Route::get('/procurement/add', [ProcurementController::class, 'create']);
    Route::post('/procurement/save', [ProcurementController::class, 'store']);
    Route::get('/procurement/{id}/delete', [ProcurementController::class, 'destroy']);
    Route::get('/procurement/{id}/edit', [ProcurementController::class, 'show']);
    Route::post('/procurement/{id}/update', [ProcurementController::class, 'update']);
    //beban barang
    Route::get('/bebanbarang', [BebanBarangController::class, 'index']);
    Route::get('/bebanbarang/add', [BebanBarangController::class, 'create']);
    Route::post('/bebanbarang/save', [BebanBarangController::class, 'store']);
    Route::get('/bebanbarang/{id}/delete', [BebanBarangController::class, 'destroy']);
    Route::get('/bebanbarang/{id}/edit', [BebanBarangController::class, 'show']);
    Route::post('/bebanbarang/{id}/update', [BebanBarangController::class, 'update']);
    //beban subkon
    Route::get('/bebansubkon', [BebanSubkonController::class, 'index']);
    Route::get('/bebansubkon/add', [BebanSubkonController::class, 'create']);
    Route::post('/bebansubkon/save', [BebanSubkonController::class, 'store']);
    Route::get('/bebansubkon/{id}/delete', [BebanSubkonController::class, 'destroy']);
    Route::get('/bebansubkon/{id}/edit', [BebanSubkonController::class, 'show']);
    Route::post('/bebansubkon/{id}/update', [BebanSubkonController::class, 'update']);
    //term plan
    Route::get('/termplan', [TermPlanController::class, 'index']);
    Route::get('/termplan/add', [TermPlanController::class, 'create']);
    Route::post('/termplan/save', [TermPlanController::class, 'store']);
    Route::get('/termplan/{id}/delete', [TermPlanController::class, 'destroy']);
    Route::get('/termplan/{id}/edit', [TermPlanController::class, 'show']);
    Route::post('/termplan/{id}/update', [TermPlanController::class, 'update']);
    //Guarantee/Bond
    Route::get('/guarantee', [GuaranteeController::class, 'index']);
    Route::get('/guarantee/add', [GuaranteeController::class, 'create']);
    Route::post('/guarantee/save', [GuaranteeController::class, 'store']);
    Route::get('/guarantee/{id}/delete', [GuaranteeController::class, 'destroy']);
    Route::get('/guarantee/{id}/edit', [GuaranteeController::class, 'show']);
    Route::post('/guarantee/{id}/update', [GuaranteeController::class, 'update']);
    //communication
    Route::get('/communication', [CommunicationController::class, 'index',]);
    //reports
    Route::get('/reports', [ReportsController::class, 'index',]);
    Route::get('/reports/add', [ReportsController::class, 'create']);
    Route::post('/reports/save', [ReportsController::class, 'store']);
    Route::get('/reports/{id}/delete', [ReportsController::class, 'destroy']);
    Route::post('/reports/{id}/update', [ReportsController::class, 'update']);
    Route::get('/reports/{id}/edit', [ReportsController::class, 'show']);
    //presentation
    Route::get('/presentation', [PresentationController::class, 'index',]);
    Route::get('/presentations/add', [PresentationController::class, 'create']);
    Route::post('/presentations/save', [PresentationController::class, 'store']);
    Route::get('/presentations/{id}/delete', [PresentationController::class, 'destroy']);
    Route::post('/presentations/{id}/update', [PresentationController::class, 'update']);
    Route::get('/presentations/{id}/edit', [PresentationController::class, 'show']);
    //project Anouncement
    Route::get('/projectAnouncement', [projectAnouncementController::class, 'index',]);
    Route::get('/projectAnouncement/add', [projectAnouncementController::class, 'create']);
    Route::post('/projectAnouncement/save', [projectAnouncementController::class, 'store']);
    Route::get('/projectAnouncement/{id}/delete', [projectAnouncementController::class, 'destroy']);
    Route::post('/projectAnouncement/{id}/update', [projectAnouncementController::class, 'update']);
    Route::get('/projectAnouncement/{id}/edit', [projectAnouncementController::class, 'show']);
    //review and meeting
    Route::get('/reviewMeeting', [reviewMeetingController::class, 'index',]);
    Route::get('/reviewMeeting/add', [reviewMeetingController::class, 'create']);
    Route::post('/reviewMeeting/save', [reviewMeetingController::class, 'store']);
    Route::get('/reviewMeeting/{id}/delete', [reviewMeetingController::class, 'destroy']);
    Route::post('/reviewMeeting/{id}/update', [reviewMeetingController::class, 'update']);
    Route::get('/reviewMeeting/{id}/edit', [reviewMeetingController::class, 'show']);
    //team morale
    Route::get('/teamMorale', [teamMoraleController::class, 'index',]);
    Route::get('/teamMorale/add', [teamMoraleController::class, 'create']);
    Route::post('/teamMorale/save', [teamMoraleController::class, 'store']);
    Route::get('/teamMorale/{id}/delete', [teamMoraleController::class, 'destroy']);
    Route::post('/teamMorale/{id}/update', [teamMoraleController::class, 'update']);
    Route::get('/teamMorale/{id}/edit', [teamMoraleController::class, 'show']);
    //schedule   
    Route::get('/schedule', [ScheduleController::class, 'index',]);
    Route::get('/schedule/add', [ScheduleController::class, 'create']);
    Route::post('/schedule/save', [ScheduleController::class, 'store']);
    Route::get('/schedule/{id}/delete', [ScheduleController::class, 'destroy']);
    Route::post('/schedule/{id}/update', [ScheduleController::class, 'update']);
    Route::get('/schedule/{id}/edit', [ScheduleController::class, 'show']);

    //executing
    Route::get('/executing', [ExecutingController::class, 'index']);
    //procurement
    Route::get('/procurementExecuting', [ProcurementExecutingController::class, 'index']);
    Route::get('/find', [ProcurementExecutingController::class, 'filter']);
    Route::get('/procurementExecuting/add', [ProcurementExecutingController::class, 'create']);
    Route::post('/procurementExecuting/save', [ProcurementExecutingController::class, 'store']);
    Route::get('/procurementExecuting/{id}/delete', [ProcurementExecutingController::class, 'destroy']);
    Route::get('/procurementExecuting/{id}/edit', [ProcurementExecutingController::class, 'show']);
    Route::post('/procurementExecuting/{id}/update', [ProcurementExecutingController::class, 'update']);
    //beban barang
    Route::get('/bebanbahanExecuting', [BebanBahanExecutingController::class, 'index']);
    Route::get('/bebanbahanExecuting/add', [BebanBahanExecutingController::class, 'create']);
    Route::post('/bebanbahanExecuting/save', [BebanBahanExecutingController::class, 'store']);
    Route::get('/bebanbahanExecuting/{id}/delete', [BebanBahanExecutingController::class, 'destroy']);
    Route::get('/bebanbahanExecuting/{id}/edit', [BebanBahanExecutingController::class, 'show']);
    Route::post('/bebanbahanExecuting/{id}/update', [BebanBahanExecutingController::class, 'update']);
    //beban subkon
    Route::get('/bebansubkonExecuting', [BebanSubkonExecutingController::class, 'index']);
    Route::get('/bebansubkonExecuting/add', [BebanSubkonExecutingController::class, 'create']);
    Route::post('/bebansubkonExecuting/save', [BebanSubkonExecutingController::class, 'store']);
    Route::get('/bebansubkonExecuting/{id}/delete', [BebanSubkonExecutingController::class, 'destroy']);
    Route::get('/bebansubkonExecuting/{id}/edit', [BebanSubkonExecutingController::class, 'show']);
    Route::post('/bebansubkonExecuting/{id}/update', [BebanSubkonExecutingController::class, 'update']);

    // tagihan
    Route::get('/tagihanExecuting', [TagihanExecutingController::class, 'index']);
    Route::get('/tagihanExecuting/add', [TagihanExecutingController::class, 'create']);
    Route::post('/tagihanExecuting/save', [TagihanExecutingController::class, 'store']);
    Route::get('/tagihanExecuting/{id}/delete', [TagihanExecutingController::class, 'destroy']);
    Route::get('/tagihanExecuting/{id}/edit', [TagihanExecutingController::class, 'show']);
    Route::post('/tagihanExecuting/{id}/update', [TagihanExecutingController::class, 'update']);

    //cost
    Route::get('/costExecuting', [CostExecutingController::class, 'index']);
    Route::get('/costExecuting/add', [CostExecutingController::class, 'create']);
    Route::post('/costExecuting/save', [CostExecutingController::class, 'store']);
    Route::get('/costExecuting/{id}/delete', [CostExecutingController::class, 'destroy']);
    Route::get('/costExecuting/{id}/edit', [CostExecutingController::class, 'show']);
    Route::post('/costExecuting/{id}/update', [CostExecutingController::class, 'update']);

    //project Income Statement Executing
    Route::get('/projectIncomeStatement', [ProjectIncomeStatementController::class, 'index']);
    Route::get('/projectIncomeStatement/add', [ProjectIncomeStatementController::class, 'create']);
    Route::post('/projectIncomeStatement/save', [ProjectIncomeStatementController::class, 'store']);
    Route::get('/projectIncomeStatement/{id}/delete', [ProjectIncomeStatementController::class, 'destroy']);
    Route::get('/projectIncomeStatement/{id}/edit', [ProjectIncomeStatementController::class, 'show']);
    Route::post('/projectIncomeStatement/{id}/update', [ProjectIncomeStatementController::class, 'update']);

    //term of payment Executing
    Route::get('/termOfPayment', [TermOfPaymentExecuting::class, 'index']);
    Route::get('/termOfPayment/add', [TermOfPaymentExecuting::class, 'create']);
    Route::post('/termOfPayment/save', [TermOfPaymentExecuting::class, 'store']);
    Route::get('/termOfPayment/{id}/delete', [TermOfPaymentExecuting::class, 'destroy']);
    Route::get('/termOfPayment/{id}/edit', [TermOfPaymentExecuting::class, 'show']);
    Route::post('/termOfPayment/{id}/update', [TermOfPaymentExecuting::class, 'update']);

    //control and monitoring
    Route::get('/controlAndMonitoring', [ControlMonitoringController::class, 'index']);
    Route::get('/domesticVendorPayments/add', function () {
        return view('control.costMonitoring.domesticVendorPayments');
    });
    Route::get('/overseasVendorPayment/add', function () {
        return view('control.costMonitoring.overseasVendorPayments');
    });
    Route::get('/cash/add', function () {
        return view('control.costMonitoring.cash');
    });


    //Caseflow
    Route::get('/caseflow', [caseFlowController::class, 'index']);
    Route::get('/caseflow/create', [caseFlowController::class, 'create']);
    Route::post('/caseflow/store', [caseFlowController::class, 'store']);
    Route::get('/caseflow/{id}/delete', [caseFlowController::class, 'destroy']);
    Route::get('/caseflow/{id}/edit', [caseFlowController::class, 'show']);
    Route::post('/caseflow/{id}/update', [caseFlowController::class, 'update']);
    //list Assumsition
    Route::get('/listAssumsition', [listAssumsitionController::class, 'index']);
    Route::get('/listAssumsition/create', [listAssumsitionController::class, 'create']);
    Route::post('/listAssumsition/store', [listAssumsitionController::class, 'store']);
    Route::get('/listAssumsition/{id}/delete', [listAssumsitionController::class, 'destroy']);
    Route::get('/listAssumsition/{id}/edit', [listAssumsitionController::class, 'show']);
    Route::post('/listAssumsition/{id}/update', [listAssumsitionController::class, 'update']);

    Route::get('/closing', [ClosingController::class, 'index']);

    Route::get('/dashboard', function () {
        return view('home.dashboard');
    });

    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/report-pdf', [ReportController::class, 'getDataFromURL'])->name('print.pdf');
    Route::get('/report-pdfall', [ReportController::class, 'printPDF'])->name('printall.pdf');
    Route::get('/report', [ReportController::class, 'filter']);

    Route::get('/human', function () {
        return view('human');
    });

    Route::get('/supply', function () {
        return view('supply');
    });

    Route::get('/finance', function () {
        return view('finance');
    });

    Route::get('/bussines', function () {
        return view('bussines');
    });




    Route::get('/logout', [LoginController::class, 'logout']);
});
