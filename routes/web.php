<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PersonalLoanController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CreditCardController;
use App\Http\Controllers\FranchiseeController;
use App\Http\Controllers\WebsiteDevController;
use App\Http\Controllers\CCStepTWOController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\FieldExecutiveController;
use App\Http\Controllers\RegisterExecutiveController;
use App\Http\Controllers\AddTeamController;
use App\Http\Controllers\WhExecutiveController;

// Route::get('reset', function (){
//     Artisan::call('route:clear');
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('config:cache');
// });

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/registration',[RegisterExecutiveController::class,'index'])->name('superAdmin.registerExecutive');
Route::post('/registration',[RegisterExecutiveController::class,'registration'])->name('create.registration');
Route::get('/approved/{id}',[FieldExecutiveController::class,'approved'])->name('approved');
Route::get('/cancel/{id}',[FieldExecutiveController::class,'cancel'])->name('cancel');
Route::get('/dispatch/{id}',[FieldExecutiveController::class,'dispatch'])->name('dispatch');
Route::post('executive_login_data/{id}',[FieldExecutiveController::class,'message'])->name('message.update');
Route::post('executive_login/{id}',[FieldExecutiveController::class,'message_exe'])->name('message_exe.update');
Route::get('/showCustomer',[FieldExecutiveController::class,'showdata'])->name('executive.customerData');
Route::get('/superAdmin', [HomeController::class, 'superAdmin'])->name('superAdmin')->middleware('is_admin');
Route::get('admin',[HomeController::class,'admin'])->name('admin.dashboard')->middleware('is_admin');
Route::get('teamleader',[HomeController::class,'teamleader'])->name('teamleader.dashboard')->middleware('is_admin');
Route::get('backEnd',[HomeController::class,'backEnd'])->name('backEnd.dashboard')->middleware('is_admin');
Route::get('/all_executives',[RegisterExecutiveController::class,'allRegistered'])->name('superAdmin.all_registered_users');
Route::get('/superAdmin', [HomeController::class, 'superAdmin'])->name('superAdmin.superAdminDashboard');
Route::get('teamleader',[FieldExecutiveController::class,'teamleaderDataShow'])->name('teamleader.dashboard');
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('contact_Us',[ContactController::class,'contactPage'])->name('contactUs.contactPage');
Route::post('/contact_Us',[ContactController::class,'createContact'])->name('contact');
Route::get('contacted_Us_data',[ContactController::class,'shwoContact'])->name('contactUs.show');
Route::get('/personal_loan', [PersonalLoanController::class,'index'])->name('personalLoan.create-step-one');
Route::get('/personal_loan_data', [PersonalLoanController::class,'show'])->name('personalLoan.show');
Route::get('personalloan/create-step-one', [PersonalLoanController::class,'createStepOne'])->name('personalLoan.create.step.one');
Route::post('personalloan/create-step-one', [PersonalLoanController::class,'postCreateStepOne'])->name('personalLoan.create.step.one.post');
Route::get('personalloan/create-step-two', [PersonalLoanController::class,'createStepTwo'])->name('personalLoan.create.step.two');
Route::post('personalloan/create-step-two', [PersonalLoanController::class,'postCreateStepTwo'])->name('personalLoan.create.step.two.post');
Route::get('personalloan/create-step-three', [PersonalLoanController::class,'createStepThree'])->name('personalLoan.create.step.three');
Route::post('personalloan/create-step-three', [PersonalLoanController::class,'postCreateStepThree'])->name('personalLoan.create.step.three.post');
Route::get('importExportView', [PersonalLoanController::class, 'importExportView']);
Route::get('per_export', [PersonalLoanController::class, 'per_export'])->name('per_export');
Route::post('import', [PersonalLoanController::class, 'import'])->name('import');
Route::get('/business_loan_data', [BusinessController::class,'showdata'])->name('businessloan.show');
Route::get('business_loan', [BusinessController::class,'index'])->name('businessloan.create-step-one');
Route::get('businessloan/create-step-one', [BusinessController::class,'createStepOne'])->name('businessloan.create.step.one');
Route::post('businessloan/create-step-one', [BusinessController::class,'postCreateStepOne'])->name('businessloan.create.step.one.post');
Route::get('businessloan/create-step-two', [BusinessController::class,'createStepTwo'])->name('businessloan.create.step.two');
Route::post('businessloan/create-step-two', [BusinessController::class,'postCreateStepTwo'])->name('businessloan.create.step.two.post');
Route::get('businessloan/create-step-three', [BusinessController::class,'createStepThree'])->name('businessloan.create.step.three');
Route::post('businessloan/create-step-three', [BusinessController::class,'postCreateStepThree'])->name('businessloan.create.step.three.post');
Route::get('importExportView', [BusinessController::class, 'importExportView']);
Route::get('export', [BusinessController::class, 'export'])->name('export');
Route::post('import', [BusinessController::class, 'import'])->name('import');
Route::get('credit_Card', [CreditCardController::class,'index'])->name('creditCard.basicinfo');
Route::post('credit_Card', [CreditCardController::class,'postbasicinfo'])->name('creditCard.createpostbasicinfo');
Route::get('/credit_Card_basic_info', [CreditCardController::class,'show1'])->name('creditCard.show1');
Route::get('importExportView', [CreditCardController::class, 'importExportView']);
Route::get('BasicinfoExport', [CreditCardController::class, 'BasicinfoExport'])->name('BasicinfoExport');
Route::post('import', [CreditCardController::class, 'import'])->name('import');
Route::get('creditCard/create-step-one', [CCStepTWOController::class,'createStepOne'])->name('creditCard.create.step.one');
Route::post('creditCard/create-step-one', [CCStepTWOController::class,'postCreateStepOne'])->name('creditCard.create.step.one.post');
Route::get('creditCard/create-step-two', [CCStepTWOController::class,'createStepTwo'])->name('creditCard.create.step.two');
Route::get('creditCard/create-step-three', [CCStepTWOController::class,'createStepThree'])->name('creditCard.create.step.three');
Route::post('creditCard/create-step-three', [CCStepTWOController::class,'postCreateStepThree'])->name('creditCard.create.step.three.post');
Route::get('creditCard/moneyback', [CCStepTWOController::class,'moneyback'])->name('creditCard.moneyback');
Route::post('/creditCard/moneyback', [CCStepTWOController::class,'postmoneyback'])->name('create.moneyback');
Route::get('creditCard/indigo', [CCStepTWOController::class,'indigo'])->name('creditCard.indigo');
Route::post('/creditCard/indigo', [CCStepTWOController::class,'postIndiGo'])->name('create.indigo');
Route::get('creditCard/indianOil', [CCStepTWOController::class,'indianOil'])->name('creditCard.indianOil');
Route::post('/creditCard/indianoil', [CCStepTWOController::class,'postindianOil'])->name('create.indianOil');
Route::get('creditCard/freedom', [CCStepTWOController::class,'freedom'])->name('creditCard.freedom');
Route::post('/creditCard/freedom', [CCStepTWOController::class,'postFreedom'])->name('create.freedom');
Route::get('creditCard/aura_edge', [CCStepTWOController::class,'auraEdge'])->name('creditCard.auraEdge');
Route::post('/creditCard/aura_edge', [CCStepTWOController::class,'postAuraEdge'])->name('create.auraEdge');
Route::get('creditCard/millenia', [CCStepTWOController::class,'millenia'])->name('creditCard.millenia');
Route::post('/creditCard/millenia', [CCStepTWOController::class,'postMillenia'])->name('create.millenia');
Route::get('creditCard/altura', [CCStepTWOController::class,'altura'])->name('creditCard.altura');
Route::post('/creditCard/altura', [CCStepTWOController::class,'postAltura'])->name('create.altura');
Route::get('creditCard/alturaPlus', [CCStepTWOController::class,'alturaPlus'])->name('creditCard.alturaPlus');
Route::post('/creditCard/alturaPlus', [CCStepTWOController::class,'postAlturaPlus'])->name('create.alturaPlus');
Route::get('creditCard/regalia', [CCStepTWOController::class,'regalia'])->name('creditCard.regalia');
Route::post('creditCard/regalia', [CCStepTWOController::class,'postRegalia'])->name('create.regalia');
Route::get('creditCard/diners_black', [CCStepTWOController::class,'diners'])->name('creditCard.dinersBlack');
Route::post('/creditCard/diners_black', [CCStepTWOController::class,'postDiners'])->name('create.dinersBlack');
Route::get('creditCard/infinia', [CCStepTWOController::class,'infinia'])->name('creditCard.infinia');
Route::post('/creditCard/infinia', [CCStepTWOController::class,'postInfinia'])->name('create.infinia');
Route::get('creditCard/zenith', [CCStepTWOController::class,'zenith'])->name('creditCard.zenith');
Route::post('/creditCard/zenith', [CCStepTWOController::class,'postZenith'])->name('create.zenith');
Route::get('/credit_Card_data', [CCStepTWOController::class,'show'])->name('creditCard.show');
Route::get('importExportView', [CCStepTWOController::class, 'importExportView']);
Route::get('creditexport', [CCStepTWOController::class, 'creditexport'])->name('creditexport');
Route::post('import', [CCStepTWOController::class, 'import'])->name('import');
Route::get('franchisee',[FranchiseeController::class,'index'])->name('franchisee.franchiseePage');
Route::post('/franchisee',[FranchiseeController::class,'createFranchisee'])->name('franchisee'); 
Route::get('website_develpoment',[WebsiteDevController::class,'index'])->name('webSite.websitePage');
Route::post('/website_develpoment',[WebsiteDevController::class,'createWebsite'])->name('websitedev');
Route::get('/website_develpoment_data', [WebsiteDevController::class,'show'])->name('webSite.show');
Route::get('job',[JobController::class,'jobPage'])->name('job.jobPage');
Route::post('/job',[JobController::class,'jobContact'])->name('job');
Route::get('job_data',[JobController::class,'showjob'])->name('job.show');
Route::get('career',[JobController::class,'careerpage'])->name('job.career');
Route::post('/career',[JobController::class,'careerstore'])->name('career');
Route::get('/career_data',[JobController::class,'showCareer'])->name('job.showCareer');
Route::get('/executive', [HomeController::class, 'executive'])->name('executive.dashboard');
Route::post('/executive_add_customer',[FieldExecutiveController::class,'addcustomer'])->name('create.executive');
Route::get('/executive_customers_details',[FieldExecutiveController::class,'executiveShow'])->name('executive.show');
Route::get('/executive_login_data',[FieldExecutiveController::class,'backendShow'])->name('backEnd.login_data');
Route::get('/delete_user/{id}',[RegisterExecutiveController::class,'destroy']);
Route::get('/add_team',[AddTeamController::class,'index'])->name('executive.add_team');
Route::post('/add_team',[AddTeamController::class,'addNewTeam'])->name('create.add_team');
Route::get('/add_team_leader',[AddTeamController::class,'showteamleader'])->name('executive.add_team_leader');
Route::post('/add_team_leader',[AddTeamController::class,'addteamleader'])->name('create.add_team_leader');
Route::get('/showdata/{id}',[RegisterExecutiveController::class,'showperticular'])->name('executive.showUser');
Route::get('/login_data_teamwise_/{id}',[FieldExecutiveController::class,'login_data_teamwise_backend'])->name('backEnd.login_data_teamwise');
Route::get('/all_executives',[FieldExecutiveController::class,'allExecutives'])->name('backEnd.all_executives');
Route::get('/team/executives',[FieldExecutiveController::class,'team_executives'])->name('teamleader.team_executives');
Route::get('/report',[FieldExecutiveController::class,'daily_report'])->name('report');
Route::get('/executive_datewise_report',[FieldExecutiveController::class,'daily_report_executive'])->name('executive.executive_datewise_data');
Route::post('/userinfo/export/', [FieldExecutiveController::class,'export'])->name('drc.export');

Route::get('/download/{file}',[FieldExecutiveController::class,'download']);

Route::get('/download-aadhaar_front_side/{file}',[FieldExecutiveController::class,'downloadadher_back']);
Route::get('/download-aadhaar_back_side/{file}',[FieldExecutiveController::class,'downloadadher_front']);
Route::get('/download-income/{file}',[FieldExecutiveController::class,'downloadincome']);
Route::get('/download-statement/{file}',[FieldExecutiveController::class,'downloadstatement']);
Route::get('/download-other_bill/{file}',[FieldExecutiveController::class,'downloadother']);
Route::get('/download-photo/{file}',[FieldExecutiveController::class,'downloadphoto']);

Route::get('/personal_loan_download_aadhaar/{file}',[PersonalLoanController::class,'downloadaadhar']);
Route::get('/personal_loan_download_income/{file}',[PersonalLoanController::class,'downloadincome']);
Route::get('/personal_loan_download_statement/{file}',[PersonalLoanController::class,'downloadstatement']);
Route::get('/personal_loan_download_pan/{file}',[PersonalLoanController::class,'download']);
Route::get('/personal_loan_download_photo/{file}',[PersonalLoanController::class,'downloadphoto']);

Route::get('/business_loan_download_aadhaar/{file}',[BusinessController::class,'downloadaadhar']);
Route::get('/business_loan_download_income/{file}',[BusinessController::class,'downloadincome']);
Route::get('/business_loan_download_statement/{file}',[BusinessController::class,'downloadstatement']);
Route::get('/business_loan_download_pan/{file}',[BusinessController::class,'download']);
Route::get('/business_loan_download_photo/{file}',[BusinessController::class,'downloadphoto']);

Route::get('/credit_card_download_aadhaar/{file}',[CCStepTWOController::class,'downloadaadhar']);
Route::get('/credit_card_download_income/{file}',[CCStepTWOController::class,'downloadincome']);
Route::get('/credit_card_download_statement/{file}',[CCStepTWOController::class,'downloadstatement']);
Route::get('/credit_card_download_pan/{file}',[CCStepTWOController::class,'download']);
Route::get('/credit_card_download_photo/{file}',[CCStepTWOController::class,'downloadphoto']);


// Route::get('/wh_executive',[WhExecutiveController::class,'index'])->name('index.wh_executive');
// Route::post('/import',[WhExecutiveController::class,'import'])->name('import');


Route::get('/wh_executive_data',[WhExecutiveController::class,'wh_executiveindex'])->name('executive.wh_executive_show');


// // Route::post('/update/{id}',[WhExecutiveController::class,'update'])->name('update.wh_executive');

Route::post('import', [WhExecutiveController::class, 'import'])->name('import');

Route::resource('/Wh_executives', WhExecutiveController::class);
