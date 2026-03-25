<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Application Name
	|--------------------------------------------------------------------------
	|
	| This value is the name of your application. This value is used when the
	| framework needs to place the application's name in a notification or
	| any other location as required by the application or its packages.
	|
	*/

	'name' => env('APP_NAME', 'W3Admin Laravel'),


	'public' => [
		'global' => [
			'css' => [
				'https://fonts.googleapis.com/css2?family=Material+Icons',
				'vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
				'css/style.css',
			],
			'js' => [
				'top'=> [
					'vendor/global/global.min.js',
					'vendor/bootstrap-select/dist/js/bootstrap-select.min.js',
				],
				'bottom'=> [
					'js/custom.min.js',
					'js/deznav-init.js',
				],
			],
		],
		'pagelevel' => [
			'css' => [
				'W3AdminController_dashboard_1' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'W3AdminController_dashboard_2' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
				'W3AdminController_dashboard_3' => [
					
				],
				'W3AdminController_dashboard_4' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
					'vendor/tagify/dist/tagify.css',
				],
				'W3AdminController_crm' => [
					'vendor/datatables/css/jquery.dataTables.min.css'
				],
				'W3AdminController_analytics' => [
				],
				'W3AdminController_blog' => [
				],
				'W3AdminController_chat' => [
					'vendor/dropzone/dist/dropzone.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
				],
				'W3AdminController_app_calender' => [
					'vendor/fullcalendar/css/main.min.css'
				],
				'W3AdminController_messages' => [
					'',
				],
				'W3AdminController_app_profile_1' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'W3AdminController_app_profile_2' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'W3AdminController_edit_profile' => [
					'vendor/swiper/css/swiper-bundle.min.css',
				],
				'W3AdminController_post_details' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'W3AdminController_chart_chartist' => [
					'vendor/chartist/css/chartist.min.css',
				],
				'W3AdminController_chart_chartjs' => [
				],
				'W3AdminController_chart_flot' => [
				],
				'W3AdminController_chart_morris' => [
				],
				'W3AdminController_chart_peity' => [
				],
				'W3AdminController_chart_sparkline' => [
				],
				'W3AdminController_ecom_checkout' => [
				],
				'W3AdminController_ecom_customers' => [
				],
				'W3AdminController_ecom_invoice' => [
				],
				'W3AdminController_ecom_product_detail' => [
					'vendor/star-rating/star-rating-svg.css'
				],
				'W3AdminController_ecom_product_grid' => [
				],
				'W3AdminController_ecom_product_list' => [
					'vendor/star-rating/star-rating-svg.css'
				],
				'W3AdminController_ecom_product_order' => [
				],
				'W3AdminController_email_compose' => [
					'vendor/dropzone/dist/dropzone.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
				],
				'W3AdminController_email_inbox' => [
					'vendor/dropzone/dist/dropzone.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
				],
				'W3AdminController_email_read' => [
					'vendor/dropzone/dist/dropzone.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
				],
				'W3AdminController_form_ckeditor' => [
				],
				'W3AdminController_form_element' => [
				],
				'W3AdminController_form_pickers' => [
					'vendor/bootstrap-daterangepicker/daterangepicker.css',
					'vendor/clockpicker/css/bootstrap-clockpicker.min.css',
					'vendor/jquery-asColorPicker/css/asColorPicker.min.css',
					'vendor/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css',
					'vendor/pickadate/themes/default.css',
					'vendor/pickadate/themes/default.date.css',
				],
				'W3AdminController_form_validation_jquery' => [
				],
				'W3AdminController_form_wizard' => [
					'vendor/jquery-smartwizard/dist/css/smart_wizard.min.css'
				],
				'W3AdminController_map_jqvmap' => [
					'vendor/jqvmap/css/jqvmap.min.css'
				],
				'W3AdminController_table_bootstrap_basic' => [
				],
				'W3AdminController_table_datatable_basic' => [
					'vendor/datatables/css/jquery.dataTables.min.css',
				],
				'W3AdminController_uc_lightgallery' => [
					'vendor/lightgallery/css/lightgallery.min.css',
				],
				'W3AdminController_uc_nestable' => [
					'vendor/nestable2/css/jquery.nestable.min.css'
				],
				'W3AdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.css'

				],
				'W3AdminController_uc_select2' => [
					'vendor/select2/css/select2.min.css'
				],
				'W3AdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.css'
				],
				'W3AdminController_uc_toastr' => [
					'vendor/toastr/css/toastr.min.css'
				],
				'W3AdminController_ui_accordion' => [
				],
				'W3AdminController_ui_alert' => [
				],
				'W3AdminController_ui_badge' => [
				],
				'W3AdminController_ui_button' => [
				],
				'W3AdminController_ui_button_group' => [
				],
				'W3AdminController_ui_card' => [
				],
				'W3AdminController_ui_carousel' => [
				],
				'W3AdminController_ui_dropdown' => [
				],
				'W3AdminController_ui_grid' => [
				],
				'W3AdminController_ui_list_group' => [
				],
				'W3AdminController_ui_media_object' => [
				],
				'W3AdminController_ui_modal' => [
				],
				'W3AdminController_ui_pagination' => [
				],
				'W3AdminController_ui_popover' => [
				],
				'W3AdminController_ui_progressbar' => [
				],
				'W3AdminController_ui_tab' => [
				],
				'W3AdminController_ui_typography' => [
				],
				'W3AdminController_widget_basic' => [
					'vendor/chartist/css/chartist.min.css'
				],
				'W3AdminController_customer_profile' => [
					'vendor/swiper/css/swiper-bundle.min.css',
					'https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css',
					'vendor/datatables/css/jquery.dataTables.min.css',
					'vendor/jvmap/jquery-jvectormap.css',
					'https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css',
					'vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css',
				],
			],
			'js' => [
				'W3AdminController_dashboard_1' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
					'vendor/draggable/draggable.js',
					'vendor/swiper/js/swiper-bundle.min.js',
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
				],
				'W3AdminController_dashboard_2' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-1.js',
					'vendor/draggable/draggable.js',
					'vendor/swiper/js/swiper-bundle.min.js',
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
				],
				'W3AdminController_dashboard_3' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/dashboard-4.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
				],
				'W3AdminController_dashboard_4' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/sales.js',
					'vendor/draggable/draggable.js',
					'vendor/swiper/js/swiper-bundle.min.js',
					'vendor/tagify/dist/tagify.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
				],
				'W3AdminController_crm' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/crm.js',
				],
				'W3AdminController_analytics' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'js/dashboard/analytics.js'
				],
				'W3AdminController_blog' => [
				],
				'W3AdminController_chat' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/dropzone/dist/dropzone.js',
				],
				'W3AdminController_app_calender' => [
					'vendor/moment/moment.min.js',
					'vendor/fullcalendar/js/main.min.js',
					'js/plugins-init/fullcalendar-init.js',
				],
				'W3AdminController_messages' => [
				],
				'W3AdminController_app_profile_1' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'W3AdminController_app_profile_2' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
				],
				'W3AdminController_edit_profile' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
				],
				'W3AdminController_post_details' => [
					'vendor/lightgallery/js/lightgallery-all.min.js',
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
				],
				'W3AdminController_chart_chartist' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'js/plugins-init/chartist-init.js',
				],
				'W3AdminController_chart_chartjs' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'js/plugins-init/chartjs-init.js',
				],
				'W3AdminController_chart_flot' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'js/plugins-init/flot-init.js',
				],
				'W3AdminController_chart_morris' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/raphael/raphael.min.js',
					'vendor/morris/morris.min.js',
					'js/plugins-init/morris-init.js',
				],
				'W3AdminController_chart_peity' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
				],
				'W3AdminController_chart_sparkline' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/svganimation/vivus.min.js',
					'vendor/svganimation/svg.animation.js',
				],
				'W3AdminController_ecom_checkout' => [
				],
				'W3AdminController_ecom_customers' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/highlightjs/highlight.pack.min.js',
				],
				'W3AdminController_ecom_invoice' => [
				],
				'W3AdminController_ecom_product_detail' => [
					'vendor/star-rating/jquery.star-rating-svg.js'
				],
				'W3AdminController_ecom_product_grid' => [
				],
				'W3AdminController_ecom_product_list' => [
					'vendor/star-rating/jquery.star-rating-svg.js'
				],
				'W3AdminController_ecom_product_order' => [
				],
				'W3AdminController_email_compose' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/dropzone/dist/dropzone.js',
				],
				'W3AdminController_email_inbox' => [
					'vendor/dropzone/dist/dropzone.js'
				],
				'W3AdminController_email_read' => [
					'vendor/jquery-nice-select/js/jquery.nice-select.min.js',
					'vendor/dropzone/dist/dropzone.js',
				],
				'W3AdminController_form_ckeditor' => [
					'vendor/ckeditor/ckeditor.js'
				],
				'W3AdminController_form_element' => [
				],
				'W3AdminController_form_pickers' => [
					'vendor/moment/moment.min.js',
					'vendor/bootstrap-daterangepicker/daterangepicker.js',
					'vendor/clockpicker/js/bootstrap-clockpicker.min.js',
					'vendor/jquery-asColor/jquery-asColor.min.js',
					'vendor/jquery-asGradient/jquery-asGradient.min.js',
					'vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js',
					'vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js',
					'vendor/pickadate/picker.js',
					'vendor/pickadate/picker.time.js',
					'vendor/pickadate/picker.date.js',
					'js/plugins-init/bs-daterange-picker-init.js',
					'js/plugins-init/clock-picker-init.js',
					'js/plugins-init/jquery-asColorPicker.init.js',
					'js/plugins-init/material-date-picker-init.js',
					'js/plugins-init/pickadate-init.js',
				],
				'W3AdminController_form_validation_jquery' => [
				],
				'W3AdminController_form_wizard' => [
					'vendor/jquery-steps/build/jquery.steps.min.js',
					'vendor/jquery-validation/jquery.validate.min.js',
					'js/plugins-init/jquery.validate-init.js',
					'vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js',
				],
				'W3AdminController_map_jqvmap' => [
					'vendor/jqvmap/js/jquery.vmap.min.js',
					'vendor/jqvmap/js/jquery.vmap.world.js',
					'vendor/jqvmap/js/jquery.vmap.usa.js',
					'js/plugins-init/jqvmap-init.js',
				],
				'W3AdminController_page_error_400' => [
				],
				'W3AdminController_page_error_403' => [
				],
				'W3AdminController_page_error_404' => [
				],
				'W3AdminController_page_error_500' => [
				],
				'W3AdminController_page_error_503' => [
				],
				'W3AdminController_page_forgot_password' => [
				],
				'W3AdminController_page_lock_screen' => [
					'vendor/deznav/deznav.min.js'
				],
				'W3AdminController_page_login' => [
				],
				'W3AdminController_page_register' => [
				],
				'W3AdminController_table_bootstrap_basic' => [
					'js/highlight.min.js'
				],
				'W3AdminController_table_datatable_basic' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/datatables/js/jquery.dataTables.min.js',
					'js/plugins-init/datatables.init.js',
					'js/highlight.min.js',
				],
				'W3AdminController_uc_lightgallery' => [
					'vendor/lightgallery/js/lightgallery-all.min.js'
				],
				'W3AdminController_uc_nestable' => [
					'vendor/nestable2/js/jquery.nestable.min.js',
					'js/plugins-init/nestable-init.js',
				],
				'W3AdminController_uc_noui_slider' => [
					'vendor/nouislider/nouislider.min.js',
					'vendor/wnumb/wNumb.js',
					'js/plugins-init/nouislider-init.js',
				],
				'W3AdminController_uc_select2' => [
					'vendor/select2/js/select2.full.min.js',
					'js/plugins-init/select2-init.js',
				],
				'W3AdminController_uc_sweetalert' => [
					'vendor/sweetalert2/dist/sweetalert2.min.js',
					'js/plugins-init/sweetalert.init.js',
				],
				'W3AdminController_uc_toastr' => [
					'vendor/toastr/js/toastr.min.js',
					'js/plugins-init/toastr-init.js',
				],
				'W3AdminController_ui_accordion' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_alert' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_badge' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_button' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_button_group' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_card' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_carousel' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_dropdown' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_grid' => [
				],
				'W3AdminController_ui_list_group' => [
				],
				'W3AdminController_ui_media_object' => [
				],
				'W3AdminController_ui_modal' => [
				],
				'W3AdminController_ui_pagination' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_popover' => [
				],
				'W3AdminController_ui_progressbar' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_tab' => [
					'js/highlight.min.js'
				],
				'W3AdminController_ui_typography' => [
				],
				'W3AdminController_widget_basic' => [
					'vendor/chart.js/Chart.bundle.min.js',
					'vendor/apexchart/apexchart.js',
					'vendor/chartist/js/chartist.min.js',
					'vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js',
					'vendor/flot/jquery.flot.js',
					'vendor/flot/jquery.flot.pie.js',
					'vendor/flot/jquery.flot.resize.js',
					'vendor/flot-spline/jquery.flot.spline.min.js',
					'vendor/jquery-sparkline/jquery.sparkline.min.js',
					'js/plugins-init/sparkline-init.js',
					'vendor/peity/jquery.peity.min.js',
					'js/plugins-init/piety-init.js',
					'js/plugins-init/widgets-script-init.js',
				],
				'W3AdminController_customer_profile' => [
					'vendor/datatables/js/jquery.dataTables.min.js',
					'vendor/datatables/js/dataTables.buttons.min.js',
					'vendor/datatables/js/buttons.html5.min.js',
					'vendor/datatables/js/jszip.min.js',
					'js/plugins-init/datatables.init.js',
					'vendor/bootstrap-datetimepicker/js/moment.js',
					'vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js',
				],
			]
		],
	]
];
