<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('generate-voucher', 'AdminController@GenerateVoucherIndex');
Route::post('generate-voucher', 'AdminController@GenerateVoucher');

Route::get('create-bank', 'AdminController@CreateBanksIndex');
Route::post('create-bank', 'AdminController@CreateBanks');


Route::get('Admin-Dashboard', 'AdminController@Index');

Route::get('register-teller', 'AdminController@RegisterTellerIndex');
Route::post('register-teller', 'AdminController@RegisterTeller');

Route::get('account-reset', 'AdminController@AccountReset');
Route::post('account-reset', 'AdminController@ResetAccount');

Route::get('Teller-Dashboard', 'TellerController@index');
Route::get('sell-voucher', 'TellerController@sellVoucherIndex');
Route::post('sell-voucher', 'TellerController@sellVoucher');
Route::get('print-voucher', 'TellerController@printVoucher');
Route::get('reprint-receipt', 'TellerController@reprintReceiptIndex');
Route::post('reprint-receipt', 'TellerController@reprintReceipt');
Route::get('reports', 'TellerController@Reports');

Route::get('Applicant-Dashboard', 'ApplicantController@bioIndex');
Route::post('saveApplicantBio', 'ApplicantController@saveApplicantBio');
Route::get('Family-Gaurdian', 'ApplicantController@GaurdianIndex');
Route::post('Family-Gaurdian', 'ApplicantController@SaveGaurdianDetails');
Route::patch('update-family-gaurdian', 'ApplicantController@updateGuardianDetails');
Route::get('initial-login-page', 'ApplicantController@InitialLogin');
Route::post('loged-in-before', 'ApplicantController@ChangeLoginStatusToOne');

Route::get('education', 'ApplicantController@AddEducation');
Route::post('save-education-details', 'ApplicantController@SaveEducationDetails');
Route::get('delete-school', 'ApplicantController@deleteASchool')->name('school.delete');
Route::get('programmes', 'ApplicantController@AddProgrammes');
Route::get('goto-other-results', 'ApplicantController@gotoOtherResults');
Route::post('save-programmes-details', 'ApplicantController@SaveProgrammes');
Route::patch('update-programmes', 'ApplicantController@UpdateProgrammesDetails');

Route::get('other-results', 'ApplicantController@OtherResults');
Route::post('get-exams', 'ApplicantController@getExamsTypes');
Route::post('save-other-results', 'ApplicantController@saveOtherResultDetails');
Route::get('delete_other_results', 'ApplicantController@deleteResult')->name('results.delete');
Route::get('attachments', 'ApplicantController@Attachments');
Route::post('save-attachment', 'ApplicantController@saveAttachments');
Route::get('delete-attachment-file', 'ApplicantController@deleteAttachment')->name('attachment.delete');

Route::get('preview', 'ApplicantController@PreviewDocument');
Route::get('submit-form', 'ApplicantController@SubmitApplication');
Route::get('confirm-submit', 'MigrateController@migrateData');

Route::get('my-dashboard','MyDetails@index');