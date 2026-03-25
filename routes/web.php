<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\W3AdminController;
use App\Http\Controllers\ObraController;
use App\Http\Controllers\PropuestaController;
use App\Http\Controllers\IndicadorRiesgoController;
use App\Http\Controllers\ProveedorController;




/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */

/* Route::get('/', function () {
 return view('welcome'); }); */

Route::controller(W3AdminController::class)->group(function () {
    Route::get('/', 'dashboard_1');
    Route::get('/index', 'dashboard_1');
    Route::get('/index-2', 'dashboard_2');
    Route::get('/index-3', 'dashboard_3');
    Route::get('/index-4', 'dashboard_4');
    Route::get('/crm', 'crm');
    Route::get('/analytics', 'analytics');
    Route::get('/contacts', 'contacts');
    Route::get('/blog', 'blog');
    Route::get('/chat', 'chat');
    Route::get('/app-profile-1', 'app_profile_1');
    Route::get('/app-profile-2', 'app_profile_2');
    Route::get('/edit-profile', 'edit_profile');
    Route::match (['get', 'post'], '/post-details', 'post_details');
    Route::match (['get', 'post'], '/email-compose', 'email_compose');
    Route::get('/email-inbox', 'email_inbox');
    Route::get('/email-read', 'email_read');
    Route::get('/app-calender', 'app_calender');
    Route::get('/ecom-product-grid', 'ecom_product_grid');
    Route::get('/ecom-product-list', 'ecom_product_list');
    Route::get('/ecom-product-detail', 'ecom_product_detail');
    Route::get('/ecom-product-order', 'ecom_product_order');
    Route::get('/ecom-checkout', 'ecom_checkout');
    Route::get('/ecom-invoice', 'ecom_invoice');
    Route::get('/ecom-customers', 'ecom_customers');
    Route::get('/chart-flot', 'chart_flot');
    Route::get('/chart-morris', 'chart_morris');
    Route::get('/chart-chartjs', 'chart_chartjs');
    Route::get('/chart-chartist', 'chart_chartist');
    Route::get('/chart-sparkline', 'chart_sparkline');
    Route::get('/chart-peity', 'chart_peity');
    Route::get('/ui-accordion', 'ui_accordion');
    Route::get('/ui-alert', 'ui_alert');
    Route::get('/ui-badge', 'ui_badge');
    Route::get('/ui-button', 'ui_button');
    Route::get('/ui-modal', 'ui_modal');
    Route::get('/ui-button-group', 'ui_button_group');
    Route::get('/ui-list-group', 'ui_list_group');
    Route::get('/ui-card', 'ui_card');
    Route::get('/ui-carousel', 'ui_carousel');
    Route::get('/ui-dropdown', 'ui_dropdown');
    Route::get('/ui-popover', 'ui_popover');
    Route::get('/ui-progressbar', 'ui_progressbar');
    Route::get('/ui-tab', 'ui_tab');
    Route::get('/ui-typography', 'ui_typography');
    Route::get('/ui-pagination', 'ui_pagination');
    Route::get('/ui-grid', 'ui_grid');
    Route::get('/uc-select2', 'uc_select2');
    Route::get('/uc-nestable', 'uc_nestable');
    Route::get('/uc-noui-slider', 'uc_noui_slider');
    Route::get('/uc-sweetalert', 'uc_sweetalert');
    Route::get('/uc-toastr', 'uc_toastr');
    Route::get('/map-jqvmap', 'map_jqvmap');
    Route::get('/uc-lightgallery', 'uc_lightgallery');
    Route::get('/widget-basic', 'widget_basic');
    Route::get('/form-element', 'form_element');
    Route::get('/form-wizard', 'form_wizard');
    Route::get('/form-ckeditor', 'form_ckeditor');
    Route::get('/form-pickers', 'form_pickers');
    Route::get('/form-validation', 'form_validation_jquery');
    Route::get('/table-bootstrap-basic', 'table_bootstrap_basic');
    Route::get('/table-datatable-basic', 'table_datatable_basic');
    Route::get('/page-login', 'page_login');
    Route::get('/page-register', 'page_register');
    Route::get('/page-error-400', 'page_error_400');
    Route::get('/page-error-403', 'page_error_403');
    Route::get('/page-error-404', 'page_error_404');
    Route::get('/page-error-500', 'page_error_500');
    Route::get('/page-error-503', 'page_error_503');
    Route::get('/page-lock-screen', 'page_lock_screen');
    Route::get('/empty-page', 'empty_page');
    Route::get('/page-forgot-password', 'page_forgot_password');
    Route::post('/ajax/contacts', 'contacts_ajax');
    Route::post('/ajax/featured-companies', 'featured_companies_ajax');
    Route::post('/ajax/message', 'message_ajax');
    Route::post('/ajax/recent-activities', 'recent_activities_ajax');
    Route::get('/customer-profile', 'customer_profile');









    
//CRUD Obras    
    Route::post('/obras/importar', [ObraController::class , 'import'])->name('obras.import');
    Route::resource('obras', ObraController::class);
    Route::post('/obras/{obra}/propuestas', [PropuestaController::class , 'store'])->name('propuestas.store');
    Route::post('/obras/{obra}/riesgos', [IndicadorRiesgoController::class , 'store'])->name('riesgos.store');
    Route::get('/proveedores', [ProveedorController::class , 'index'])->name('proveedores.index');
    Route::post('/proveedores/importar', [ProveedorController::class , 'import'])->name('proveedores.import');
});
