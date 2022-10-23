<!DOCTYPE HTML>
<html class="no-touch" <?php language_attributes( 'html' ) ?>>
<head>
	<title>Satellite Setting Page</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php wp_head(); ?>
	<style>

		.float_left{
		  float: left;
		  clear: both;
		}

		.my_link{
		  color: #f368e0 im !important;
		}

		.sat_container {
		  max-width: 400px;
		  width: 100%;
		  /*margin: 0 auto;*/
		  position: relative;
		}

		.contact{
		/*  min-width: 460px;
		  max-width: 100px !important;*/
		}

		input[type=*]{
		  font: 400 12px/16px Roboto', Helvetica, Arial, sans-serif;
		}

		.sat_select{
		  width: 300px;
		}

		.contact {
		  float: left;
		  max-width: 100%;
		  background: #F9F9F9;
		  padding: 25px;
		  margin-left: 20px;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}

		.contact h3 {
		  display: block;
		  font-size: 30px;
		  font-weight: 300;
		  margin-bottom: 10px;
		}

		.contact h4 {
		  margin: 5px 0 15px;
		  display: block;
		  font-size: 13px;
		  font-weight: 400;
		}

		fieldset {
		  border: medium none !important;
		  margin: 0 0 10px;
		  min-width: 100%;
		  padding: 0;
		  width: 100%;
		}

		.contact input[type='text'],
		.contact input[type='email'],
		.contact input[type='tel'],
		.contact input[type='url'],
		.contact textarea {
		  width: 100%;
		  border: 1px solid #ccc;
		  background: #FFF;
		  margin: 0 0 5px;
		  padding: 10px;
		}

		.contact input[type='text']:hover,
		.contact input[type='email']:hover,
		.contact input[type='tel']:hover,
		.contact input[type='url']:hover,
		.contact textarea:hover {
		  -webkit-transition: border-color 0.3s ease-in-out;
		  -moz-transition: border-color 0.3s ease-in-out;
		  transition: border-color 0.3s ease-in-out;
		  border: 1px solid #aaa;
		}

		.contact textarea {
		  height: 100px;
		  max-width: 100%;
		  resize: none;
		}

		.contact button[type='submit'] {
		  cursor: pointer;
		  width: 100%;
		  border: none;
		  background: #4CAF50;
		  color: #FFF;
		  margin: 0 0 5px;
		  padding: 10px;
		  font-size: 15px;
		}

		.contact button[type='submit']:hover {
		  background: #43A047;
		  -webkit-transition: background 0.3s ease-in-out;
		  -moz-transition: background 0.3s ease-in-out;
		  transition: background-color 0.3s ease-in-out;
		}

		.contact button[type='submit']:active {
		  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
		}

		.copyright {
		  text-align: center;
		}

		.contact input:focus,
		.contact textarea:focus {
		  outline: 0;
		  border: 1px solid #aaa;
		}

		::-webkit-input-placeholder {
		  color: #888;
		}

		:-moz-placeholder {
		  color: #888;
		}

		::-moz-placeholder {
		  color: #888;
		}

		:-ms-input-placeholder {
		  color: #888;
		}
		.sat_table {
		  font-family: Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		.sat_table td, .sat_table th {
		  color: black;
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		.sat_table tr:nth-child(even){background-color: #f2f2f2;}

		.sat_table tr:hover {background-color: #ddd;}

		.sat_table th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #04AA6D;
		  color: white;
		}
		.text-center{
			text-align: center;
		}
		.top-20{
		  margin-top: 20px;
		}
		.bottom-20{
		  margin-bottom: 20px;
		}
		.left-20{
		  margin-left: 20px;
		}
		.right-20{
		  margin-right: 20px;
		}
		.text-red{
		  color: red;
		}
		.text-green{
		  color: green;
		}

		table {
		  border-collapse: collapse;
		  width: 100%;
		  border: 1px solid #ddd;
		}

		th, td {
		  text-align: left;
		  padding: 16px;
		}

		.float-right{
		  float: right;
		}
		.margin-bottom-20{
		  margin-bottom: 20px !important;
		}

		.wl-btn {
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 5px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  transition-duration: 0.4s;
		  cursor: pointer;
		}

		.wl-red {
		  background-color: white; 
		  color: black; 
		  border: 2px solid #f44336;
		}

		.wl-red:hover {
		  background-color: #f44336;
		  color: white;
		}

		.remove_rt_append_data{

		}

		.wl-sm-btn{
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 5px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  transition-duration: 0.4s;
		  border-radius: 20px;
		  cursor: pointer;
		}

		a{
		  text-decoration: none;
		}


		.bg-danger{
		  background-color: #dc3545!important;
		}

		.bg-primary{
		  background-color: #007bff!important;
		}

		.bg-success{
		  background-color: #28a745!important;
		}

		.bg-info{
		  background-color: #17a2b8!important;
		}

		.bg-warning{
		  background-color: #ffc107!important;
		}

		.bg-muted{
		  background-color: #6c757d!important;
		}

		.text-danger{
		  color: #dc3545!important;
		}

		.text-primary{
		  color: #007bff!important;
		}

		.text-success{
		  color: #28a745!important;
		}

		.text-info{
		  color: #17a2b8!important;
		}

		.text-warning{
		  color: #ffc107!important;
		}

		.text-muted{
		  color: #6c757d!important;
		}
		.nowrap{
		  white-space: nowrap;
		}

		.sat_btn {
		  background-color: #4CAF50; /* Green */
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}

		.btn_color {
		  background-color: #4CAF50;
		  color: white;
		}

		.btn_color:hover {
		  background-color: white; 
		  color: black; 
		  border: 2px solid #4CAF50;
		  
		}

		.submit_btn{
		  margin-top: 50px;
		}

		label > strong{
		  margin-left: 5px;
		  color:  green;
		}

		.text{
		  font-family: 'Roboto', Helvetica, Arial, sans-serif;
		  font-weight: 100;
		  font-size: 12px;
		  line-height: 30px;
		  color: black;
		  background: white;
		}
		.free_info{
		  clear: both;
		  float: left;
		  margin-top: 0px;
		  margin-left: -21px;
		  padding-left: 33px !important;
		  min-width: 100%;
		  background: #222f3e;
		  padding: 20px;
		  color: #1dd1a1;
		}
		.select2-container--default .select2-selection--single .select2-selection__rendered {
		    color: #444;
		    line-height: 28px;
		    background: white;
		}
		.satellite_flash_msg{
			color: green !important;
			text-align: center;
		}
		.sat_user_sett{
			min-width: 100%;
			padding: 50px; 
			margin-bottom: 50px; 
			height: 100vh;
		}
	</style>

	<style> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>		<style id="us-icon-fonts">@font-face{font-display:block;font-style:normal;font-family:"fontawesome";font-weight:900;src:url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/fa-solid-900.woff2?ver=8.8.2") format("woff2"),url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/fa-solid-900.woff?ver=8.8.2") format("woff")}.fas{font-family:"fontawesome";font-weight:900}@font-face{font-display:block;font-style:normal;font-family:"fontawesome";font-weight:400;src:url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/fa-regular-400.woff2?ver=8.8.2") format("woff2"),url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/fa-regular-400.woff?ver=8.8.2") format("woff")}.far{font-family:"fontawesome";font-weight:400}@font-face{font-display:block;font-style:normal;font-family:"Font Awesome 5 Brands";font-weight:400;src:url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/fa-brands-400.woff2?ver=8.8.2") format("woff2"),url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/fa-brands-400.woff?ver=8.8.2") format("woff")}.fab{font-family:"Font Awesome 5 Brands";font-weight:400}@font-face{font-display:block;font-style:normal;font-family:"Material Icons";font-weight:400;src:url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/material-icons.woff2?ver=8.8.2") format("woff2"),url("https://www.auroraadmin.com/wp-content/themes/Zephyr/fonts/material-icons.woff?ver=8.8.2") format("woff")}.material-icons{font-family:"Material Icons";font-weight:400}</style>
					<style id="us-theme-options-css">:root{--color-header-middle-bg:#232d32;--color-header-middle-bg-grad:#232d32;--color-header-middle-text:#fffffe;--color-header-middle-text-hover:#7f5af0;--color-header-transparent-bg:transparent;--color-header-transparent-bg-grad:transparent;--color-header-transparent-text:#a8b1bd;--color-header-transparent-text-hover:#fffffe;--color-chrome-toolbar:#010101;--color-chrome-toolbar-grad:#010101;--color-header-top-bg:#010101;--color-header-top-bg-grad:#010101;--color-header-top-text:#a8b1bd;--color-header-top-text-hover:#7f5af0;--color-header-top-transparent-bg:rgba(0,0,0,0.2);--color-header-top-transparent-bg-grad:rgba(0,0,0,0.2);--color-header-top-transparent-text:rgba(255,255,255,0.66);--color-header-top-transparent-text-hover:#fff;--color-content-bg:#373e47;--color-content-bg-grad:#373e47;--color-content-bg-alt:#263238;--color-content-bg-alt-grad:#263238;--color-content-border:#242629;--color-content-heading:#fffffe;--color-content-heading-grad:#fffffe;--color-content-text:#a8b1bd;--color-content-link:#7f5af0;--color-content-link-hover:#2cb67d;--color-content-primary:#7f5af0;--color-content-primary-grad:#7f5af0;--color-content-secondary:#2cb67d;--color-content-secondary-grad:#2cb67d;--color-content-faded:#72757e;--color-content-overlay:rgba(0,0,0,0.75);--color-content-overlay-grad:rgba(0,0,0,0.75);--color-footer-bg:#16161a;--color-footer-bg-grad:#16161a;--color-footer-bg-alt:#010101;--color-footer-bg-alt-grad:#010101;--color-footer-border:#242629;--color-footer-heading:#72757e;--color-footer-heading-grad:#72757e;--color-footer-text:#72757e;--color-footer-link:#a8b1bd;--color-footer-link-hover:#7f5af0;--color-content-primary-faded:rgba(127,90,240,0.15);--box-shadow:0 5px 15px rgba(0,0,0,.15);--box-shadow-up:0 -5px 15px rgba(0,0,0,.15);--site-content-width:1140px;--inputs-font-size:1rem;--inputs-height:3em;--inputs-padding:1em;--inputs-border-width:1px;--inputs-text-color:inherit;--font-body:"",sans-serif}html,.l-header .widget,.menu-item-object-us_page_block{font-family:var(--font-body);font-weight:;font-size:18px;line-height:28px}h1{font-family:var(--font-h1);font-weight:400;font-size:max( 3rem,3vw );line-height:1.2;letter-spacing:0;margin-bottom:0.6em}h2{font-family:var(--font-h2);font-weight:400;font-size:max( 1.8rem,1.8vw );line-height:1.2;letter-spacing:0;margin-bottom:0.6em}h3{font-family:var(--font-h3);font-weight:400;font-size:max( 1.4rem,1.4vw );line-height:1.2;letter-spacing:0;margin-bottom:0.6em}.widgettitle,h4{font-family:var(--font-h4);font-weight:400;font-size:max( 1.2rem,1.2vw );line-height:1.2;letter-spacing:0;margin-bottom:0.6em}h5{font-family:var(--font-h5);font-weight:400;font-size:max( 1.1rem,1.1vw );line-height:1.2;letter-spacing:0;margin-bottom:0.6em}h6{font-family:var(--font-h6);font-weight:400;font-size:max( 1rem,1vw );line-height:1.2;letter-spacing:0;margin-bottom:0.6em}@media (max-width:600px){html{font-size:16px;line-height:28px}}body{background:var(--color-content-bg-alt)}.l-canvas.type_boxed,.l-canvas.type_boxed .l-subheader,.l-canvas.type_boxed~.l-footer{max-width:1300px}.l-subheader-h,.l-section-h,.l-main .aligncenter,.w-tabs-section-content-h{max-width:1140px}.post-password-form{max-width:calc(1140px + 5rem)}@media screen and (max-width:1230px){.l-main .aligncenter{max-width:calc(100vw - 5rem)}}@media (min-width:1281px){body.usb_preview .hide_on_default{opacity:0.25!important}.vc_hidden-lg,body:not(.usb_preview) .hide_on_default{display:none!important}}@media (min-width:1025px) and (max-width:1280px){body.usb_preview .hide_on_laptops{opacity:0.25!important}.vc_hidden-md,body:not(.usb_preview) .hide_on_laptops{display:none!important}}@media (min-width:601px) and (max-width:1024px){body.usb_preview .hide_on_tablets{opacity:0.25!important}.vc_hidden-sm,body:not(.usb_preview) .hide_on_tablets{display:none!important}}@media (max-width:600px){body.usb_preview .hide_on_mobiles{opacity:0.25!important}.vc_hidden-xs,body:not(.usb_preview) .hide_on_mobiles{display:none!important}}@media (max-width:600px){.g-cols.type_default>div[class*="vc_col-xs-"]{margin-top:1rem;margin-bottom:1rem}.g-cols>div:not([class*="vc_col-xs-"]){width:100%;margin:0 0 1.5rem}.g-cols.reversed>div:last-of-type{order:-1}.g-cols.type_boxes>div,.g-cols.reversed>div:first-child,.g-cols:not(.reversed)>div:last-child,.g-cols>div.has_bg_color{margin-bottom:0}.vc_col-xs-1{width:8.3333%}.vc_col-xs-2{width:16.6666%}.vc_col-xs-1\/5{width:20%}.vc_col-xs-3{width:25%}.vc_col-xs-4{width:33.3333%}.vc_col-xs-2\/5{width:40%}.vc_col-xs-5{width:41.6666%}.vc_col-xs-6{width:50%}.vc_col-xs-7{width:58.3333%}.vc_col-xs-3\/5{width:60%}.vc_col-xs-8{width:66.6666%}.vc_col-xs-9{width:75%}.vc_col-xs-4\/5{width:80%}.vc_col-xs-10{width:83.3333%}.vc_col-xs-11{width:91.6666%}.vc_col-xs-12{width:100%}.vc_col-xs-offset-0{margin-left:0}.vc_col-xs-offset-1{margin-left:8.3333%}.vc_col-xs-offset-2{margin-left:16.6666%}.vc_col-xs-offset-1\/5{margin-left:20%}.vc_col-xs-offset-3{margin-left:25%}.vc_col-xs-offset-4{margin-left:33.3333%}.vc_col-xs-offset-2\/5{margin-left:40%}.vc_col-xs-offset-5{margin-left:41.6666%}.vc_col-xs-offset-6{margin-left:50%}.vc_col-xs-offset-7{margin-left:58.3333%}.vc_col-xs-offset-3\/5{margin-left:60%}.vc_col-xs-offset-8{margin-left:66.6666%}.vc_col-xs-offset-9{margin-left:75%}.vc_col-xs-offset-4\/5{margin-left:80%}.vc_col-xs-offset-10{margin-left:83.3333%}.vc_col-xs-offset-11{margin-left:91.6666%}.vc_col-xs-offset-12{margin-left:100%}}@media (min-width:601px){.vc_col-sm-1{width:8.3333%}.vc_col-sm-2{width:16.6666%}.vc_col-sm-1\/5{width:20%}.vc_col-sm-3{width:25%}.vc_col-sm-4{width:33.3333%}.vc_col-sm-2\/5{width:40%}.vc_col-sm-5{width:41.6666%}.vc_col-sm-6{width:50%}.vc_col-sm-7{width:58.3333%}.vc_col-sm-3\/5{width:60%}.vc_col-sm-8{width:66.6666%}.vc_col-sm-9{width:75%}.vc_col-sm-4\/5{width:80%}.vc_col-sm-10{width:83.3333%}.vc_col-sm-11{width:91.6666%}.vc_col-sm-12{width:100%}.vc_col-sm-offset-0{margin-left:0}.vc_col-sm-offset-1{margin-left:8.3333%}.vc_col-sm-offset-2{margin-left:16.6666%}.vc_col-sm-offset-1\/5{margin-left:20%}.vc_col-sm-offset-3{margin-left:25%}.vc_col-sm-offset-4{margin-left:33.3333%}.vc_col-sm-offset-2\/5{margin-left:40%}.vc_col-sm-offset-5{margin-left:41.6666%}.vc_col-sm-offset-6{margin-left:50%}.vc_col-sm-offset-7{margin-left:58.3333%}.vc_col-sm-offset-3\/5{margin-left:60%}.vc_col-sm-offset-8{margin-left:66.6666%}.vc_col-sm-offset-9{margin-left:75%}.vc_col-sm-offset-4\/5{margin-left:80%}.vc_col-sm-offset-10{margin-left:83.3333%}.vc_col-sm-offset-11{margin-left:91.6666%}.vc_col-sm-offset-12{margin-left:100%}}@media (min-width:1025px){.vc_col-md-1{width:8.3333%}.vc_col-md-2{width:16.6666%}.vc_col-md-1\/5{width:20%}.vc_col-md-3{width:25%}.vc_col-md-4{width:33.3333%}.vc_col-md-2\/5{width:40%}.vc_col-md-5{width:41.6666%}.vc_col-md-6{width:50%}.vc_col-md-7{width:58.3333%}.vc_col-md-3\/5{width:60%}.vc_col-md-8{width:66.6666%}.vc_col-md-9{width:75%}.vc_col-md-4\/5{width:80%}.vc_col-md-10{width:83.3333%}.vc_col-md-11{width:91.6666%}.vc_col-md-12{width:100%}.vc_col-md-offset-0{margin-left:0}.vc_col-md-offset-1{margin-left:8.3333%}.vc_col-md-offset-2{margin-left:16.6666%}.vc_col-md-offset-1\/5{margin-left:20%}.vc_col-md-offset-3{margin-left:25%}.vc_col-md-offset-4{margin-left:33.3333%}.vc_col-md-offset-2\/5{margin-left:40%}.vc_col-md-offset-5{margin-left:41.6666%}.vc_col-md-offset-6{margin-left:50%}.vc_col-md-offset-7{margin-left:58.3333%}.vc_col-md-offset-3\/5{margin-left:60%}.vc_col-md-offset-8{margin-left:66.6666%}.vc_col-md-offset-9{margin-left:75%}.vc_col-md-offset-4\/5{margin-left:80%}.vc_col-md-offset-10{margin-left:83.3333%}.vc_col-md-offset-11{margin-left:91.6666%}.vc_col-md-offset-12{margin-left:100%}}@media (min-width:1281px){.vc_col-lg-1{width:8.3333%}.vc_col-lg-2{width:16.6666%}.vc_col-lg-1\/5{width:20%}.vc_col-lg-3{width:25%}.vc_col-lg-4{width:33.3333%}.vc_col-lg-2\/5{width:40%}.vc_col-lg-5{width:41.6666%}.vc_col-lg-6{width:50%}.vc_col-lg-7{width:58.3333%}.vc_col-lg-3\/5{width:60%}.vc_col-lg-8{width:66.6666%}.vc_col-lg-9{width:75%}.vc_col-lg-4\/5{width:80%}.vc_col-lg-10{width:83.3333%}.vc_col-lg-11{width:91.6666%}.vc_col-lg-12{width:100%}.vc_col-lg-offset-0{margin-left:0}.vc_col-lg-offset-1{margin-left:8.3333%}.vc_col-lg-offset-2{margin-left:16.6666%}.vc_col-lg-offset-1\/5{margin-left:20%}.vc_col-lg-offset-3{margin-left:25%}.vc_col-lg-offset-4{margin-left:33.3333%}.vc_col-lg-offset-2\/5{margin-left:40%}.vc_col-lg-offset-5{margin-left:41.6666%}.vc_col-lg-offset-6{margin-left:50%}.vc_col-lg-offset-7{margin-left:58.3333%}.vc_col-lg-offset-3\/5{margin-left:60%}.vc_col-lg-offset-8{margin-left:66.6666%}.vc_col-lg-offset-9{margin-left:75%}.vc_col-lg-offset-4\/5{margin-left:80%}.vc_col-lg-offset-10{margin-left:83.3333%}.vc_col-lg-offset-11{margin-left:91.6666%}.vc_col-lg-offset-12{margin-left:100%}}@media (min-width:601px) and (max-width:1024px){.g-cols.via_flex.type_default>div[class*="vc_col-md-"],.g-cols.via_flex.type_default>div[class*="vc_col-lg-"]{margin-top:1rem;margin-bottom:1rem}}@media (min-width:1025px) and (max-width:1280px){.g-cols.via_flex.type_default>div[class*="vc_col-lg-"]{margin-top:1rem;margin-bottom:1rem}}@media (max-width:599px){.l-canvas{overflow:hidden}.g-cols.stacking_default.reversed>div:last-of-type{order:-1}.g-cols.stacking_default.via_flex>div:not([class*=" vc_col-"]){width:100%;margin:0 0 1.5rem}.g-cols.stacking_default.via_grid.mobiles-cols_1{grid-template-columns:100%}.g-cols.stacking_default.via_flex.type_boxes>div,.g-cols.stacking_default.via_flex.reversed>div:first-child,.g-cols.stacking_default.via_flex:not(.reversed)>div:last-child,.g-cols.stacking_default.via_flex>div.has_bg_color{margin-bottom:0}.g-cols.stacking_default.via_flex.type_default>.wpb_column.stretched{margin-left:-1rem;margin-right:-1rem}.g-cols.stacking_default.via_grid.mobiles-cols_1>.wpb_column.stretched,.g-cols.stacking_default.via_flex.type_boxes>.wpb_column.stretched{margin-left:-2.5rem;margin-right:-2.5rem;width:auto}.vc_column-inner.type_sticky>.wpb_wrapper,.vc_column_container.type_sticky>.vc_column-inner{top:0!important}}@media (min-width:600px){body:not(.rtl) .l-section.for_sidebar.at_left>div>.l-sidebar,.rtl .l-section.for_sidebar.at_right>div>.l-sidebar{order:-1}.vc_column_container.type_sticky>.vc_column-inner,.vc_column-inner.type_sticky>.wpb_wrapper{position:-webkit-sticky;position:sticky}.l-section.type_sticky{position:-webkit-sticky;position:sticky;top:0;z-index:11;transform:translateZ(0); transition:top 0.3s cubic-bezier(.78,.13,.15,.86) 0.1s}.admin-bar .l-section.type_sticky{top:32px}.l-section.type_sticky>.l-section-h{transition:padding-top 0.3s}.header_hor .l-header.pos_fixed:not(.down)~.l-main .l-section.type_sticky:not(:first-of-type){top:var(--header-sticky-height)}.admin-bar.header_hor .l-header.pos_fixed:not(.down)~.l-main .l-section.type_sticky:not(:first-of-type){top:calc( var(--header-sticky-height) + 32px )}.header_hor .l-header.pos_fixed.sticky:not(.down)~.l-main .l-section.type_sticky:first-of-type>.l-section-h{padding-top:var(--header-sticky-height)}}@media screen and (min-width:1230px){.g-cols.via_flex.type_default>.wpb_column.stretched:first-of-type{margin-left:calc( var(--site-content-width) / 2 + 0px / 2 + 1.5rem - 50vw)}.g-cols.via_flex.type_default>.wpb_column.stretched:last-of-type{margin-right:calc( var(--site-content-width) / 2 + 0px / 2 + 1.5rem - 50vw)}.l-main .alignfull, .w-separator.width_screen,.g-cols.via_grid>.wpb_column.stretched:first-of-type,.g-cols.via_flex.type_boxes>.wpb_column.stretched:first-of-type{margin-left:calc( var(--site-content-width) / 2 + 0px / 2 - 50vw )}.l-main .alignfull, .w-separator.width_screen,.g-cols.via_grid>.wpb_column.stretched:last-of-type,.g-cols.via_flex.type_boxes>.wpb_column.stretched:last-of-type{margin-right:calc( var(--site-content-width) / 2 + 0px / 2 - 50vw )}}@media (max-width:600px){.w-form-row.for_submit .w-btn{font-size:var(--btn-size-mobiles)!important}}a,button,input[type="submit"],.ui-slider-handle{outline:none!important}.w-toplink,.w-header-show{background:rgba(0,0,0,0.3)}.no-touch .w-toplink.active:hover,.no-touch .w-header-show:hover{background:var(--color-content-primary-grad)}button[type="submit"]:not(.w-btn),input[type="submit"]:not(.w-btn),.us-nav-style_1>*,.navstyle_1>.owl-nav div,.us-btn-style_1{font-family:default;font-size:16px;line-height:1.2!important;font-weight:700;font-style:normal;text-transform:none;letter-spacing:0;border-radius:0.3em;padding:1.0em 2.0em;background:var(--color-content-primary);border-color:transparent;color:#fff!important}button[type="submit"]:not(.w-btn):before,input[type="submit"]:not(.w-btn),.us-nav-style_1>*:before,.navstyle_1>.owl-nav div:before,.us-btn-style_1:before{border-width:0px}.no-touch button[type="submit"]:not(.w-btn):hover,.no-touch input[type="submit"]:not(.w-btn):hover,.us-nav-style_1>span.current,.no-touch .us-nav-style_1>a:hover,.no-touch .navstyle_1>.owl-nav div:hover,.no-touch .us-btn-style_1:hover{background:var(--color-content-secondary);border-color:transparent;color:#fff!important}.us-nav-style_1>*{min-width:calc(1.2em + 2 * 1.0em)}.us-nav-style_2>*,.navstyle_2>.owl-nav div,.us-btn-style_2{font-family:default;font-size:16px;line-height:1.2!important;font-weight:700;font-style:normal;text-transform:none;letter-spacing:0;border-radius:0.3em;padding:1.0em 2.0em;background:var(--color-content-border);border-color:transparent;color:var(--color-content-text)!important}.us-nav-style_2>*:before,.navstyle_2>.owl-nav div:before,.us-btn-style_2:before{border-width:0px}.us-nav-style_2>span.current,.no-touch .us-nav-style_2>a:hover,.no-touch .navstyle_2>.owl-nav div:hover,.no-touch .us-btn-style_2:hover{background:var(--color-content-text);border-color:transparent;color:var(--color-content-bg)!important}.us-nav-style_2>*{min-width:calc(1.2em + 2 * 1.0em)}.w-filter.state_desktop.style_drop_default .w-filter-item-title,.select2-selection,select,textarea,input:not([type="submit"]),.w-form-checkbox,.w-form-radio{font-weight:400;letter-spacing:0em;border-radius:0.2em;background:transparent;border-color:#e8e8e8;color:inherit}.w-filter.state_desktop.style_drop_default .w-filter-item-title:focus,.select2-container--open .select2-selection,select:focus,textarea:focus,input:not([type="submit"]):focus,input:focus + .w-form-checkbox,input:focus + .w-form-radio{border-color:#e95095!important;box-shadow:0px 0px 0px 1px #e95095 inset}.w-form-row.move_label .w-form-row-label{font-size:1rem;top:calc(3em/2 + 1px - 0.7em);margin:0 1em;background:var(--color-content-bg-grad);color:inherit}.w-form-row.with_icon.move_label .w-form-row-label{margin-left:calc(1.6em + 1em)}.color_alternate .w-form-row.move_label .w-form-row-label{background:var(--color-alt-content-bg-grad)}.color_footer-top .w-form-row.move_label .w-form-row-label{background:var(--color-subfooter-bg-grad)}.color_footer-bottom .w-form-row.move_label .w-form-row-label{background:var(--color-footer-bg-grad)}.style_phone6-1>*{background-image:url(https://www.auroraadmin.com/wp-content/themes/Zephyr/img/phone-6-black-real.png)}.style_phone6-2>*{background-image:url(https://www.auroraadmin.com/wp-content/themes/Zephyr/img/phone-6-white-real.png)}.style_phone6-3>*{background-image:url(https://www.auroraadmin.com/wp-content/themes/Zephyr/img/phone-6-black-flat.png)}.style_phone6-4>*{background-image:url(https://www.auroraadmin.com/wp-content/themes/Zephyr/img/phone-6-white-flat.png)}.leaflet-default-icon-path{background-image:url(https://www.auroraadmin.com/wp-content/themes/Zephyr/common/css/vendor/images/marker-icon.png)}</style>
					<style id="us-header-css"> .l-subheader.at_middle,.l-subheader.at_middle .w-dropdown-list,.l-subheader.at_middle .type_mobile .w-nav-list.level_1{background:var(--color-header-middle-bg);color:var(--color-header-middle-text)}.no-touch .l-subheader.at_middle a:hover,.no-touch .l-header.bg_transparent .l-subheader.at_middle .w-dropdown.opened a:hover{color:var(--color-header-middle-text-hover)}.l-header.bg_transparent:not(.sticky) .l-subheader.at_middle{background:var(--color-header-transparent-bg);color:var(--color-header-transparent-text)}.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-cart-link:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-text a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-html a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-nav>a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-menu a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-search>a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .w-dropdown a:hover,.no-touch .l-header.bg_transparent:not(.sticky) .at_middle .type_desktop .menu-item.level_1:hover>a{color:var(--color-header-transparent-text-hover)}.header_ver .l-header{background:var(--color-header-middle-bg);color:var(--color-header-middle-text)}@media (min-width:1281px){.hidden_for_default{display:none!important}.l-subheader.at_top{display:none}.l-subheader.at_bottom{display:none}.l-header{position:relative;z-index:111;width:100%}.l-subheader{margin:0 auto}.l-subheader.width_full{padding-left:1.5rem;padding-right:1.5rem}.l-subheader-h{display:flex;align-items:center;position:relative;margin:0 auto;height:inherit}.w-header-show{display:none}.l-header.pos_fixed{position:fixed;left:0}.l-header.pos_fixed:not(.notransition) .l-subheader{transition-property:transform,background,box-shadow,line-height,height;transition-duration:0.3s;transition-timing-function:cubic-bezier(.78,.13,.15,.86)}.header_hor .l-header.sticky_auto_hide{transition:transform 0.3s cubic-bezier(.78,.13,.15,.86) 0.1s}.header_hor .l-header.sticky_auto_hide.down{transform:translateY(-110%)}.l-header.bg_transparent:not(.sticky) .l-subheader{box-shadow:none!important;background:none}.l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-of-type>.l-section-h{padding-top:0!important;padding-bottom:0!important}.l-header.pos_static.bg_transparent{position:absolute;left:0}.l-subheader.width_full .l-subheader-h{max-width:none!important}.l-header.shadow_thin .l-subheader.at_middle,.l-header.shadow_thin .l-subheader.at_bottom{box-shadow:0 1px 0 rgba(0,0,0,0.08)}.l-header.shadow_wide .l-subheader.at_middle,.l-header.shadow_wide .l-subheader.at_bottom{box-shadow:0 3px 5px -1px rgba(0,0,0,0.1),0 2px 1px -1px rgba(0,0,0,0.05)}.header_hor .l-subheader-cell>.w-cart{margin-left:0;margin-right:0}:root{--header-height:80px;--header-sticky-height:60px}.l-header:before{content:'80'}.l-header.sticky:before{content:'60'}.l-subheader.at_top{line-height:40px;height:40px}.l-header.sticky .l-subheader.at_top{line-height:40px;height:40px}.l-subheader.at_middle{line-height:80px;height:80px}.l-header.sticky .l-subheader.at_middle{line-height:60px;height:60px}.l-subheader.at_bottom{line-height:50px;height:50px}.l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px}.l-subheader.at_middle .l-subheader-cell.at_left,.l-subheader.at_middle .l-subheader-cell.at_right{display:flex;flex-basis:100px}.headerinpos_above .l-header.pos_fixed{overflow:hidden;transition:transform 0.3s;transform:translate3d(0,-100%,0)}.headerinpos_above .l-header.pos_fixed.sticky{overflow:visible;transform:none}.headerinpos_above .l-header.pos_fixed~.l-section>.l-section-h,.headerinpos_above .l-header.pos_fixed~.l-main .l-section:first-of-type>.l-section-h{padding-top:0!important}.headerinpos_below .l-header.pos_fixed:not(.sticky){position:absolute;top:100%}.headerinpos_below .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h{padding-top:0!important}.headerinpos_below .l-header.pos_fixed~.l-main .l-section.full_height:nth-of-type(2){min-height:100vh}.headerinpos_below .l-header.pos_fixed~.l-main>.l-section:nth-of-type(2)>.l-section-h{padding-top:var(--header-height)}.headerinpos_bottom .l-header.pos_fixed:not(.sticky){position:absolute;top:100vh}.headerinpos_bottom .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h{padding-top:0!important}.headerinpos_bottom .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h{padding-bottom:var(--header-height)}.headerinpos_bottom .l-header.pos_fixed.bg_transparent~.l-main .l-section.valign_center:not(.height_auto):first-of-type>.l-section-h{top:calc( var(--header-height) / 2 )}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-cart-dropdown,.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_2{bottom:100%;transform-origin:0 100%}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_mobile.m_layout_dropdown .w-nav-list.level_1{top:auto;bottom:100%;box-shadow:var(--box-shadow-up)}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_3,.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_4{top:auto;bottom:0;transform-origin:0 100%}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-dropdown-list{top:auto;bottom:-0.4em;padding-top:0.4em;padding-bottom:2.4em}.admin-bar .l-header.pos_static.bg_solid~.l-main .l-section.full_height:first-of-type{min-height:calc( 100vh - var(--header-height) - 32px )}.admin-bar .l-header.pos_fixed:not(.sticky_auto_hide)~.l-main .l-section.full_height:not(:first-of-type){min-height:calc( 100vh - var(--header-sticky-height) - 32px )}.admin-bar.headerinpos_below .l-header.pos_fixed~.l-main .l-section.full_height:nth-of-type(2){min-height:calc(100vh - 32px)}}@media (min-width:1025px) and (max-width:1280px){.hidden_for_default{display:none!important}.l-subheader.at_top{display:none}.l-subheader.at_bottom{display:none}.l-header{position:relative;z-index:111;width:100%}.l-subheader{margin:0 auto}.l-subheader.width_full{padding-left:1.5rem;padding-right:1.5rem}.l-subheader-h{display:flex;align-items:center;position:relative;margin:0 auto;height:inherit}.w-header-show{display:none}.l-header.pos_fixed{position:fixed;left:0}.l-header.pos_fixed:not(.notransition) .l-subheader{transition-property:transform,background,box-shadow,line-height,height;transition-duration:0.3s;transition-timing-function:cubic-bezier(.78,.13,.15,.86)}.header_hor .l-header.sticky_auto_hide{transition:transform 0.3s cubic-bezier(.78,.13,.15,.86) 0.1s}.header_hor .l-header.sticky_auto_hide.down{transform:translateY(-110%)}.l-header.bg_transparent:not(.sticky) .l-subheader{box-shadow:none!important;background:none}.l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-of-type>.l-section-h{padding-top:0!important;padding-bottom:0!important}.l-header.pos_static.bg_transparent{position:absolute;left:0}.l-subheader.width_full .l-subheader-h{max-width:none!important}.l-header.shadow_thin .l-subheader.at_middle,.l-header.shadow_thin .l-subheader.at_bottom{box-shadow:0 1px 0 rgba(0,0,0,0.08)}.l-header.shadow_wide .l-subheader.at_middle,.l-header.shadow_wide .l-subheader.at_bottom{box-shadow:0 3px 5px -1px rgba(0,0,0,0.1),0 2px 1px -1px rgba(0,0,0,0.05)}.header_hor .l-subheader-cell>.w-cart{margin-left:0;margin-right:0}:root{--header-height:80px;--header-sticky-height:60px}.l-header:before{content:'80'}.l-header.sticky:before{content:'60'}.l-subheader.at_top{line-height:40px;height:40px}.l-header.sticky .l-subheader.at_top{line-height:40px;height:40px}.l-subheader.at_middle{line-height:80px;height:80px}.l-header.sticky .l-subheader.at_middle{line-height:60px;height:60px}.l-subheader.at_bottom{line-height:50px;height:50px}.l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px}.headerinpos_above .l-header.pos_fixed{overflow:hidden;transition:transform 0.3s;transform:translate3d(0,-100%,0)}.headerinpos_above .l-header.pos_fixed.sticky{overflow:visible;transform:none}.headerinpos_above .l-header.pos_fixed~.l-section>.l-section-h,.headerinpos_above .l-header.pos_fixed~.l-main .l-section:first-of-type>.l-section-h{padding-top:0!important}.headerinpos_below .l-header.pos_fixed:not(.sticky){position:absolute;top:100%}.headerinpos_below .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h{padding-top:0!important}.headerinpos_below .l-header.pos_fixed~.l-main .l-section.full_height:nth-of-type(2){min-height:100vh}.headerinpos_below .l-header.pos_fixed~.l-main>.l-section:nth-of-type(2)>.l-section-h{padding-top:var(--header-height)}.headerinpos_bottom .l-header.pos_fixed:not(.sticky){position:absolute;top:100vh}.headerinpos_bottom .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h{padding-top:0!important}.headerinpos_bottom .l-header.pos_fixed~.l-main>.l-section:first-of-type>.l-section-h{padding-bottom:var(--header-height)}.headerinpos_bottom .l-header.pos_fixed.bg_transparent~.l-main .l-section.valign_center:not(.height_auto):first-of-type>.l-section-h{top:calc( var(--header-height) / 2 )}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-cart-dropdown,.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_2{bottom:100%;transform-origin:0 100%}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_mobile.m_layout_dropdown .w-nav-list.level_1{top:auto;bottom:100%;box-shadow:var(--box-shadow-up)}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_3,.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-nav.type_desktop .w-nav-list.level_4{top:auto;bottom:0;transform-origin:0 100%}.headerinpos_bottom .l-header.pos_fixed:not(.sticky) .w-dropdown-list{top:auto;bottom:-0.4em;padding-top:0.4em;padding-bottom:2.4em}.admin-bar .l-header.pos_static.bg_solid~.l-main .l-section.full_height:first-of-type{min-height:calc( 100vh - var(--header-height) - 32px )}.admin-bar .l-header.pos_fixed:not(.sticky_auto_hide)~.l-main .l-section.full_height:not(:first-of-type){min-height:calc( 100vh - var(--header-sticky-height) - 32px )}.admin-bar.headerinpos_below .l-header.pos_fixed~.l-main .l-section.full_height:nth-of-type(2){min-height:calc(100vh - 32px)}}@media (min-width:601px) and (max-width:1024px){.hidden_for_default{display:none!important}.l-subheader.at_top{display:none}.l-subheader.at_bottom{display:none}.l-header{position:relative;z-index:111;width:100%}.l-subheader{margin:0 auto}.l-subheader.width_full{padding-left:1.5rem;padding-right:1.5rem}.l-subheader-h{display:flex;align-items:center;position:relative;margin:0 auto;height:inherit}.w-header-show{display:none}.l-header.pos_fixed{position:fixed;left:0}.l-header.pos_fixed:not(.notransition) .l-subheader{transition-property:transform,background,box-shadow,line-height,height;transition-duration:0.3s;transition-timing-function:cubic-bezier(.78,.13,.15,.86)}.header_hor .l-header.sticky_auto_hide{transition:transform 0.3s cubic-bezier(.78,.13,.15,.86) 0.1s}.header_hor .l-header.sticky_auto_hide.down{transform:translateY(-110%)}.l-header.bg_transparent:not(.sticky) .l-subheader{box-shadow:none!important;background:none}.l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-of-type>.l-section-h{padding-top:0!important;padding-bottom:0!important}.l-header.pos_static.bg_transparent{position:absolute;left:0}.l-subheader.width_full .l-subheader-h{max-width:none!important}.l-header.shadow_thin .l-subheader.at_middle,.l-header.shadow_thin .l-subheader.at_bottom{box-shadow:0 1px 0 rgba(0,0,0,0.08)}.l-header.shadow_wide .l-subheader.at_middle,.l-header.shadow_wide .l-subheader.at_bottom{box-shadow:0 3px 5px -1px rgba(0,0,0,0.1),0 2px 1px -1px rgba(0,0,0,0.05)}.header_hor .l-subheader-cell>.w-cart{margin-left:0;margin-right:0}:root{--header-height:80px;--header-sticky-height:60px}.l-header:before{content:'80'}.l-header.sticky:before{content:'60'}.l-subheader.at_top{line-height:40px;height:40px}.l-header.sticky .l-subheader.at_top{line-height:40px;height:40px}.l-subheader.at_middle{line-height:80px;height:80px}.l-header.sticky .l-subheader.at_middle{line-height:60px;height:60px}.l-subheader.at_bottom{line-height:50px;height:50px}.l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px}}@media (max-width:600px){.hidden_for_default{display:none!important}.l-subheader.at_top{display:none}.l-subheader.at_bottom{display:none}.l-header{position:relative;z-index:111;width:100%}.l-subheader{margin:0 auto}.l-subheader.width_full{padding-left:1.5rem;padding-right:1.5rem}.l-subheader-h{display:flex;align-items:center;position:relative;margin:0 auto;height:inherit}.w-header-show{display:none}.l-header.pos_fixed{position:fixed;left:0}.l-header.pos_fixed:not(.notransition) .l-subheader{transition-property:transform,background,box-shadow,line-height,height;transition-duration:0.3s;transition-timing-function:cubic-bezier(.78,.13,.15,.86)}.header_hor .l-header.sticky_auto_hide{transition:transform 0.3s cubic-bezier(.78,.13,.15,.86) 0.1s}.header_hor .l-header.sticky_auto_hide.down{transform:translateY(-110%)}.l-header.bg_transparent:not(.sticky) .l-subheader{box-shadow:none!important;background:none}.l-header.bg_transparent~.l-main .l-section.width_full.height_auto:first-of-type>.l-section-h{padding-top:0!important;padding-bottom:0!important}.l-header.pos_static.bg_transparent{position:absolute;left:0}.l-subheader.width_full .l-subheader-h{max-width:none!important}.l-header.shadow_thin .l-subheader.at_middle,.l-header.shadow_thin .l-subheader.at_bottom{box-shadow:0 1px 0 rgba(0,0,0,0.08)}.l-header.shadow_wide .l-subheader.at_middle,.l-header.shadow_wide .l-subheader.at_bottom{box-shadow:0 3px 5px -1px rgba(0,0,0,0.1),0 2px 1px -1px rgba(0,0,0,0.05)}.header_hor .l-subheader-cell>.w-cart{margin-left:0;margin-right:0}:root{--header-height:80px;--header-sticky-height:60px}.l-header:before{content:'80'}.l-header.sticky:before{content:'60'}.l-subheader.at_top{line-height:40px;height:40px}.l-header.sticky .l-subheader.at_top{line-height:40px;height:40px}.l-subheader.at_middle{line-height:80px;height:80px}.l-header.sticky .l-subheader.at_middle{line-height:60px;height:60px}.l-subheader.at_bottom{line-height:50px;height:50px}.l-header.sticky .l-subheader.at_bottom{line-height:50px;height:50px}}@media (min-width:1281px){.ush_image_1{height:35px!important}.l-header.sticky .ush_image_1{height:35px!important}}@media (min-width:1025px) and (max-width:1280px){.ush_image_1{height:30px!important}.l-header.sticky .ush_image_1{height:30px!important}}@media (min-width:601px) and (max-width:1024px){.ush_image_1{height:25px!important}.l-header.sticky .ush_image_1{height:25px!important}}@media (max-width:600px){.ush_image_1{height:20px!important}.l-header.sticky .ush_image_1{height:20px!important}}.header_hor .ush_menu_1.type_desktop .menu-item.level_1>a:not(.w-btn){padding-left:20px;padding-right:20px}.header_hor .ush_menu_1.type_desktop .menu-item.level_1>a.w-btn{margin-left:20px;margin-right:20px}.header_hor .ush_menu_1.type_desktop.align-edges>.w-nav-list.level_1{margin-left:-20px;margin-right:-20px}.header_ver .ush_menu_1.type_desktop .menu-item.level_1>a:not(.w-btn){padding-top:20px;padding-bottom:20px}.header_ver .ush_menu_1.type_desktop .menu-item.level_1>a.w-btn{margin-top:20px;margin-bottom:20px}.ush_menu_1.type_desktop .menu-item:not(.level_1){font-size:1rem}.ush_menu_1.type_mobile .w-nav-anchor.level_1,.ush_menu_1.type_mobile .w-nav-anchor.level_1 + .w-nav-arrow{font-size:1.1rem}.ush_menu_1.type_mobile .w-nav-anchor:not(.level_1),.ush_menu_1.type_mobile .w-nav-anchor:not(.level_1) + .w-nav-arrow{font-size:0.9rem}@media (min-width:1281px){.ush_menu_1 .w-nav-icon{font-size:36px}}@media (min-width:1025px) and (max-width:1280px){.ush_menu_1 .w-nav-icon{font-size:32px}}@media (min-width:601px) and (max-width:1024px){.ush_menu_1 .w-nav-icon{font-size:28px}}@media (max-width:600px){.ush_menu_1 .w-nav-icon{font-size:24px}}.ush_menu_1 .w-nav-icon>div{border-width:3px}@media screen and (max-width:899px){.w-nav.ush_menu_1>.w-nav-list.level_1{display:none}.ush_menu_1 .w-nav-control{display:block}}.ush_menu_1 .menu-item.level_1>a:not(.w-btn):focus,.no-touch .ush_menu_1 .menu-item.level_1.opened>a:not(.w-btn),.no-touch .ush_menu_1 .menu-item.level_1:hover>a:not(.w-btn){background:transparent;color:var(--color-header-middle-text-hover)}.ush_menu_1 .menu-item.level_1.current-menu-item>a:not(.w-btn),.ush_menu_1 .menu-item.level_1.current-menu-ancestor>a:not(.w-btn),.ush_menu_1 .menu-item.level_1.current-page-ancestor>a:not(.w-btn){background:transparent;color:var(--color-header-middle-text-hover)}.l-header.bg_transparent:not(.sticky) .ush_menu_1.type_desktop .menu-item.level_1.current-menu-item>a:not(.w-btn),.l-header.bg_transparent:not(.sticky) .ush_menu_1.type_desktop .menu-item.level_1.current-menu-ancestor>a:not(.w-btn),.l-header.bg_transparent:not(.sticky) .ush_menu_1.type_desktop .menu-item.level_1.current-page-ancestor>a:not(.w-btn){background:transparent;color:var(--color-header-transparent-text-hover)}.ush_menu_1 .w-nav-list:not(.level_1){background:var(--color-header-middle-bg);color:var(--color-header-middle-text)}.no-touch .ush_menu_1 .menu-item:not(.level_1)>a:focus,.no-touch .ush_menu_1 .menu-item:not(.level_1):hover>a{background:transparent;color:var(--color-header-middle-text-hover)}.ush_menu_1 .menu-item:not(.level_1).current-menu-item>a,.ush_menu_1 .menu-item:not(.level_1).current-menu-ancestor>a,.ush_menu_1 .menu-item:not(.level_1).current-page-ancestor>a{background:transparent;color:var(--color-header-middle-text-hover)}</style>
					<style id="us-custom-css">.card-subtitle{font-size:14px}h3{line-height:30px;font-size:21px}</style>
			<style id="us-design-options-css">.us_custom_33c3a0a5{padding-bottom:10px!important}.us_custom_1f257949{text-align:left!important}.us_custom_057801f8{background:var(--color-header-middle-bg)!important}</style>

</head>
<body <?php body_class( ' home page-template-default page page-id-12 l-body Zephyr_8.8.2 us-core_8.8.2 header_hor headerinpos_top state_default theme-Zephyr fix-header card-no-border woocommerce-js us-woo-cart_compact wpb-js-composer js-comp-ver-6.10.0 vc_responsive ' ); ?>>
<?php wp_body_open(); ?>


<div class="l-canvas type_wide">
	<header id="page-header" class="l-header pos_fixed shadow_none bg_solid id_6 sticky_auto_hide">
		<div class="l-header pos_fixed shadow_none bg_solid id_6 sticky_auto_hide">
			<div class="l-subheader-h">
				<div class="l-subheader-cell at_left">
					<div class="w-image ush_image_1">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Link" class="w-image-h"><img width="803" height="185" src="https://www.auroraadmin.com/wp-content/uploads/2022/10/aurora-admin-logo.png" class="attachment-large size-large" alt="Aurora Admin Forecasting Tool" loading="lazy" srcset="https://www.auroraadmin.com/wp-content/uploads/2022/10/aurora-admin-logo.png 803w, https://www.auroraadmin.com/wp-content/uploads/2022/10/aurora-admin-logo-300x69.png 300w" sizes="(max-width: 803px) 100vw, 803px"></a>
					</div>
				</div>
				<div class="l-subheader-cell at_center"></div>
				<div class="l-subheader-cell at_right">
					<nav class="w-nav ush_menu_1 dropdown_mdesign m_align_none m_layout_dropdown type_desktop">
						<a class="w-nav-control" aria-label="Menu" href="#"><div class="w-nav-icon"><div></div></div></a>
						<ul class="w-nav-list level_1 hover_simple">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'us_main_menu',
									'container' => FALSE,
									'walker' => new US_Walker_Nav_Menu,
									'items_wrap' => '%3$s',
									'fallback_cb' => FALSE,
								)
							);
							?>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>



<div class="containers sat_user_sett">
	<h3 class="sat_set_head"> <?php _e('Setting Page', SATELLITE_TD); ?> <hr></h3>

	<?php 
	if( isset( $_SESSION['msg'] ) ):

	echo $_SESSION['msg']; 
	unset( $_SESSION['msg'] );

	endif;

	?>
	<div class="form">

		<?php
			global $timezones;

			echo web_lover_form_main_div();
			echo web_lover_form_open();
			echo wl_form_heading( 'h3', __( 'Setting Page Form', SATELLITE_TD ) );
			wp_nonce_field(SATELLITE_NONCE_VERIFY, SATELLITE_NONCE);

		?>

		<div class="r-panel-body">
		    <div class="nightmode-toggle pull-right" style="margin-bottom: 20px">
		        <input type="checkbox" checked="" name="nightmode" data-size="large" data-on-text="<i class='wi wi-day-sunny'></i>" data-off-text="<i class='wi wi-night-clear'></i>">
		    </div>
		    <div class="hemisphere-toggle pull-right">
		        <input type="checkbox" checked="" name="hemisphere" data-size="large" data-on-text="North" data-off-text="South">
		    </div>
		</div>
		<div style="clear: both;">
		<?php
			$default_time_zone = '';

			if( isset( $_SESSION['satellite_timezone'] ) ){
				$default_time_zone = $_SESSION['satellite_timezone'];
			}

			echo web_lover_form_select("satellite_timezone", $timezones, $default_time_zone);
			echo web_lover_form_submit('Save');
			echo web_lover_form_close();
			echo web_lover_form_main_div_end();
		?>
	</div>
	</div>

</div>

</div>
<!-- <footer	class="l-footer">
	<section class="l-section color_footer-top">
		<div class="l-section-h i-cf align_center">
			<span><?php bloginfo( 'name' ); ?></span>
		</div>
	</section>
</footer> -->

<footer id="page-footer" class="l-footer">
   <section class="l-section wpb_row us_custom_057801f8 height_medium color_alternate">
      <div class="l-section-h i-cf">
         <div class="g-cols vc_row via_flex valign_top type_default stacking_default">
            <div class="vc_col-sm-4 wpb_column vc_column_container">
               <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                     <div class="w-image align_none">
                        <div class="w-image-h"><img width="300" height="69" src="https://www.auroraadmin.com/wp-content/uploads/2022/10/aurora-admin-logo-300x69.png" class="attachment-medium size-medium" alt="Aurora Admin Forecasting Tool" loading="lazy" srcset="https://www.auroraadmin.com/wp-content/uploads/2022/10/aurora-admin-logo-300x69.png 300w, https://www.auroraadmin.com/wp-content/uploads/2022/10/aurora-admin-logo.png 803w" sizes="(max-width: 300px) 100vw, 300px"></div>
                     </div>
                     <div class="wpb_text_column">
                        <div class="wpb_wrapper">
                           <p>While every effort is maintained to give you the best aurora show possible we cannot guarantee results. Suggested Data is from individual field expert accounts.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="vc_col-sm-4 wpb_column vc_column_container">
               <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                     <div class="wpb_text_column">
                        <div class="wpb_wrapper">
                           <p>Most data on this site is graciously provided free of charge from open sources. We only charge for the notification systems. The billing helps pay for hosting, site research, developers and more.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="vc_col-sm-4 wpb_column vc_column_container">
               <div class="vc_column-inner">
                  <div class="wpb_wrapper"></div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="l-section wpb_row height_medium">
      <div class="l-section-h i-cf">
         <div class="g-cols vc_row via_flex valign_top type_default stacking_default">
            <div class="vc_col-sm-12 wpb_column vc_column_container">
               <div class="vc_column-inner">
                  <div class="wpb_wrapper">
                     <div class="wpb_text_column">
                        <div class="wpb_wrapper">
                           <p>© <?php bloginfo( 'name' ); ?></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
</footer>

<?php wp_footer(); ?>
</body>
</html>