<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class W3AdminController extends Controller{

    // Dashboard
    public function dashboard_1(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.index', compact('page_title', 'page_description'));
    }
    
    // Dashboard 2
    public function dashboard_2(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.index_2', compact('page_title', 'page_description'));
    }

    // Dashboard 3
    public function dashboard_3(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.index_3', compact('page_title', 'page_description'));
    }

    // Dashboard 4
    public function dashboard_4(){
        $page_title = 'Dashboard';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.index_4', compact('page_title', 'page_description'));
    }
    
    // CRM
    public function crm(){
        $page_title = 'CRM';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.crm', compact('page_title', 'page_description'));
    }
    
    // Analytics
    public function analytics(){
        $page_title = 'Analytics';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.analytics', compact('page_title', 'page_description'));
    }
    
    // Contacts
    public function contacts(){
        $page_title = 'Contacts';
        $page_description = 'Some description for the page';
        return view('w3admin.contacts.contacts', compact('page_title', 'page_description'));
    }

    // Blog
    public function blog(){
        $page_title = 'Blog';
        $page_description = 'Some description for the page';
		return view('w3admin.blog.blog', compact('page_title', 'page_description'));
    }

    // Chat
    public function chat(){
        $page_title = 'Chat';
        $page_description = 'Some description for the page';
        return view('w3admin.app.chat', compact('page_title', 'page_description'));
    }
    
    // app_profile_1
    public function app_profile_1(){
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
        return view('w3admin.app.profile_1', compact('page_title', 'page_description'));
    }
    
    // app_profile_2
    public function app_profile_2(){
        $page_title = 'Profile';
        $page_description = 'Some description for the page';
        return view('w3admin.app.profile_2', compact('page_title', 'page_description'));
    }

    // Edit Profile
    public function edit_profile(){
        $page_title = 'Edit Profile';
        $page_description = 'Some description for the page';
        return view('w3admin.app.edit_profile', compact('page_title', 'page_description'));
    }

    // Post Details
    public function post_details(){
        $page_title = 'Post Details';
        $page_description = 'Some description for the page';
        return view('w3admin.app.post_details', compact('page_title', 'page_description'));
    }

    // Email Compose
    public function email_compose(){
        $page_title = 'Compose';
        $page_description = 'Some description for the page';
        return view('w3admin.message.compose', compact('page_title', 'page_description'));
    }
	
    // Email Inbox
    public function email_inbox(){
        $page_title = 'Inbox';
        $page_description = 'Some description for the page';
        return view('w3admin.message.inbox', compact('page_title', 'page_description'));
    }
	
    // Email Read
    public function email_read(){
        $page_title = 'Read';
        $page_description = 'Some description for the page';
        return view('w3admin.message.read', compact('page_title', 'page_description'));
    }

    // Calendar
    public function app_calender(){
        $page_title = 'Calendar';
        $page_description = 'Some description for the page';
        return view('w3admin.app.calender', compact('page_title', 'page_description'));
    }
    
    // Ecommerce Checkout
    public function ecom_checkout(){
        $page_title = 'Checkout';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.checkout', compact('page_title', 'page_description'));
    }
	
    // Ecommerce Customers
    public function ecom_customers(){
        $page_title = 'Ecom Customers';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.customers', compact('page_title', 'page_description'));
    }
	
    // Ecommerce Invoice
    public function ecom_invoice(){
        $page_title = 'Invoice';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.invoice', compact('page_title', 'page_description'));
    }
	
    // Ecommerce Product Detail
    public function ecom_product_detail(){
        $page_title = 'Product Detail';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.product_detail', compact('page_title', 'page_description'));
    }
	
    // Ecommerce Product Grid
    public function ecom_product_grid(){
        $page_title = 'Product Grid';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.product_grid', compact('page_title', 'page_description'));
    }
	
    // Ecommerce Product List
    public function ecom_product_list(){
        $page_title = 'Product List';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.product_list', compact('page_title', 'page_description'));
    }
	
    // Ecommerce Product Order
    public function ecom_product_order(){
        $page_title = 'Product Order';
        $page_description = 'Some description for the page';
        return view('w3admin.ecom.product_order', compact('page_title', 'page_description'));
    }
	
    // Chart Chartist
    public function chart_chartist(){
        $page_title = 'Chart Chartist';
     $page_description = 'Some description for the page';
        return view('w3admin.chart.chartist', compact('page_title', 'page_description'));
    }
	
    // Chart Chartjs
    public function chart_chartjs(){
        $page_title = 'Chart Chartjs';
        $page_description = 'Some description for the page';
        return view('w3admin.chart.chartjs', compact('page_title', 'page_description'));
    }
	
    // Chart Flot
    public function chart_flot(){
        $page_title = 'Chart Flot';
        $page_description = 'Some description for the page';
        return view('w3admin.chart.flot', compact('page_title', 'page_description'));
    }
	
    // Chart Morris
    public function chart_morris(){
        $page_title = 'Chart Morris';
        $page_description = 'Some description for the page';
        return view('w3admin.chart.morris', compact('page_title', 'page_description'));
    }
	
    // Chart Peity
    public function chart_peity(){
        $page_title = 'Chart Peity';
        $page_description = 'Some description for the page';
        return view('w3admin.chart.peity', compact('page_title', 'page_description'));
    }
	
    // Chart Sparkline
    public function chart_sparkline(){
        $page_title = 'Chart Sparkline';
        $page_description = 'Some description for the page';
        return view('w3admin.chart.sparkline', compact('page_title', 'page_description'));
    }
	
    // Form Editor Summernote
    public function form_ckeditor(){
        $page_title = 'CkEditor';
        $page_description = 'Some description for the page';
        return view('w3admin.form.ckeditor', compact('page_title', 'page_description'));
	}
	
    // Form Element
    public function form_element(){
        $page_title = 'Form Element';
        $page_description = 'Some description for the page';
        return view('w3admin.form.element', compact('page_title', 'page_description'));
    }
	
    // Form Pickers
    public function form_pickers(){
        $page_title = 'Form Pickers';
        $page_description = 'Some description for the page';
        return view('w3admin.form.pickers', compact('page_title', 'page_description'));
    }
	
    // Form Validation Jquery
    public function form_validation_jquery(){
        $page_title = 'Form Validation';
        $page_description = 'Some description for the page';
        return view('w3admin.form.validation', compact('page_title', 'page_description'));
    }
	
    // Form Wizard
    public function form_wizard(){
        $page_title = 'Form Wizard';
        $page_description = 'Some description for the page';
        return view('w3admin.form.wizard', compact('page_title', 'page_description'));
    }
    
    	
    // Map Jqvmap
    public function map_jqvmap(){
        $page_title = 'Map Jqvmap';
        $page_description = 'Some description for the page';
        return view('w3admin.map.jqvmap', compact('page_title', 'page_description'));
    }
	
    // Page Error 400
    public function page_error_400(){
        $page_title = 'Page Error 400';
        $page_description = 'Some description for the page';
        return view('w3admin.page.error_400', compact('page_title', 'page_description'));
    }
	
    // Page Error 403
    public function page_error_403(){
        $page_title = 'Page Error 403';
        $page_description = 'Some description for the page';
        return view('w3admin.page.error_403', compact('page_title', 'page_description'));
    }
	
    // Page Error 404
    public function page_error_404(){
        $page_title = 'Page Error 404';
        $page_description = 'Some description for the page';
        return view('w3admin.page.error_404', compact('page_title', 'page_description'));
    }
	
    // Page Error 500
    public function page_error_500(){
        $page_title = 'Page Error 500';
        $page_description = 'Some description for the page';
        return view('w3admin.page.error_500', compact('page_title', 'page_description'));
    }
	
    // Page Error 503
    public function page_error_503(){
        $page_title = 'Page Error 503';
        $page_description = 'Some description for the page';
        return view('w3admin.page.error_503', compact('page_title', 'page_description'));
    }
	
    // Page Forgot Password
    public function page_forgot_password(){
        $page_title = 'Page Forgot Password';
        $page_description = 'Some description for the page';
        return view('w3admin.page.forgot_password', compact('page_title', 'page_description'));
    }
	
    // Page Lock Screen
    public function page_lock_screen(){
        $page_title = 'Page Lock Screen';
        $page_description = 'Some description for the page';
        return view('w3admin.page.lock_screen', compact('page_title', 'page_description'));
    }
	
    // Page Login
    public function page_login(){
        $page_title = 'Page Login';
        $page_description = 'Some description for the page';
        return view('w3admin.page.login', compact('page_title', 'page_description'));
    }
	
    // Page Register
    public function page_register(){
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
        return view('w3admin.page.register', compact('page_title', 'page_description'));
    }
    
    // Page empty_page
    public function empty_page(){
        $page_title = 'Page Empty';
        $page_description = 'Some description for the page';
        return view('w3admin.page.empty_page', compact('page_title', 'page_description'));
    }
	
    // Table Bootstrap Basic
    public function table_bootstrap_basic(){
        $page_title = 'Table Basic';
     $page_description = 'Some description for the page';
        return view('w3admin.table.bootstrap_basic', compact('page_title', 'page_description'));
    }
	
    // Table Datatable Basic
    public function table_datatable_basic(){
        $page_title = 'Table Datatable';
        $page_description = 'Some description for the page';
        return view('w3admin.table.databasic', compact('page_title', 'page_description'));
    }
    // UC Nestable.
    public function uc_nestable(){
        $page_title = 'Nestable';
        $page_description = 'Some description for the page';
        return view('w3admin.uc.nestable', compact('page_title', 'page_description'));
    }
    // UC Lightgallery.
    public function uc_lightgallery(){
        $page_title = 'Lightgallery';
        $page_description = 'Some description for the page';
        return view('w3admin.uc.lightgallery', compact('page_title', 'page_description'));
    }
	
    // UC NoUi Slider
    public function uc_noui_slider(){
        $page_title = 'Noui Slider';
        $page_description = 'Some description for the page';
        return view('w3admin.uc.noui_slider', compact('page_title', 'page_description'));
    }
	
    // UC Select2
    public function uc_select2(){
        $page_title = 'Select2';
        $page_description = 'Some description for the page';
        return view('w3admin.uc.select2', compact('page_title', 'page_description'));
    }
	
    // UC Sweetalert
    public function uc_sweetalert(){
        $page_title = 'Sweetalert';
        $page_description = 'Some description for the page';
        return view('w3admin.uc.sweetalert', compact('page_title', 'page_description'));
    }
	
    // UC Toastr
    public function uc_toastr(){
        $page_title = 'Toastr';
        $page_description = 'Some description for the page';
        return view('w3admin.uc.toastr', compact('page_title', 'page_description'));
    }
	
    // Ui Accordion
    public function ui_accordion(){
        $page_title = 'Accordion';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.accordion', compact('page_title', 'page_description'));
    }
	
    // Ui Alert
    public function ui_alert(){
        $page_title = 'Alert';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.alert', compact('page_title', 'page_description'));
    }
	
    // Ui Badge
    public function ui_badge(){
        $page_title = 'Badge';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.badge', compact('page_title', 'page_description'));
    }
	
    // Ui Button
    public function ui_button(){
        $page_title = 'Button';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.button', compact('page_title', 'page_description'));
    }
	
    // Ui Button Group
    public function ui_button_group(){
        $page_title = 'Button Group';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.button_group', compact('page_title', 'page_description'));
    }
	
    // Ui Card
    public function ui_card(){
        $page_title = 'Card';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.card', compact('page_title', 'page_description'));
    }
	
    // Ui Carousel
    public function ui_carousel(){
        $page_title = 'Carousel';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.carousel', compact('page_title', 'page_description'));
    }
	
    // Ui Dropdown
    public function ui_dropdown(){
        $page_title = 'Dropdown';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.dropdown', compact('page_title', 'page_description'));
    }
	
    // Ui Grid
    public function ui_grid(){
        $page_title = 'Grid';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.grid', compact('page_title', 'page_description'));
    }
	
    // Ui List Group
    public function ui_list_group(){
        $page_title = 'List Group';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.list_group', compact('page_title', 'page_description'));
    }
	
    // Ui Modal
    public function ui_modal(){
        $page_title = 'Modal';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.modal', compact('page_title', 'page_description'));
    }
	
    // Ui Pagination
    public function ui_pagination(){
        $page_title = 'Pagination';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.pagination', compact('page_title', 'page_description'));
    }
	
    // Ui Popover
    public function ui_popover(){
        $page_title = 'Popover';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.popover', compact('page_title', 'page_description'));
    }
	
    // Ui Progressbar
    public function ui_progressbar(){
        $page_title = 'Progressbar';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.progressbar', compact('page_title', 'page_description'));
    }
	
    // Ui Tab
    public function ui_tab(){
        $page_title = 'Tab';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.tab', compact('page_title', 'page_description'));
    }
	

    // Ui Typography
    public function ui_typography(){
        $page_title = 'Typography';
        $page_description = 'Some description for the page';
        return view('w3admin.ui.typography', compact('page_title', 'page_description'));
    }
	
    // Widget Basic
    public function widget_basic(){
        $page_title = 'Widget';
        $page_description = 'Some description for the page';
        return view('w3admin.widget.widget_basic', compact('page_title', 'page_description'));
    }

    // Ajax Recent Activity
    public function recent_activities_ajax(){
        return view('w3admin.ajax.recentactivity');
    }
    
    // Ajax Recent Activity
    public function contacts_ajax(){
        return view('w3admin.ajax.contacts');
    }
    
    // Ajax Featured Companies
    public function featured_companies_ajax(){
        return view('w3admin.ajax.featuredcompanies');
    }
    
    // Ajax Message
    public function message_ajax(){
        return view('w3admin.ajax.message');
    }

    // Customer Profile
    public function customer_profile(){
        $page_title = 'Customer Profile';
        $page_description = 'Some description for the page';
        return view('w3admin.dashboard.customer_profile', compact('page_title', 'page_description'));
    }
}
