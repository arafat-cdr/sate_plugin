<?php

/*
Plugin Name: satellite Plugin
Plugin URI: plugin uri
Description: A custom satellite data Viewing  Plugin Use the Below short codes Check Under Setting Menu
Author: Yeasir Arafat
Author URI: https://www.upwork.com/freelancers/~019c035e6523d87f93
Text Domain: satellite
Version: 1.0
*/


# NOT ALLOW DIRECT ACCESS
if ( !defined( 'ABSPATH' ) ) {
    die("Direct Access not Allowed");
}

define( 'SATELLITE_MAIN', __FILE__ );
define( 'SATELLITE_PATH', plugin_dir_path(__FILE__) );
define( 'SATELLITE_URL', plugin_dir_url(__FILE__) );
define( 'SATELLITE_TD', 'satellite' );

define('SATELLITE_NONCE', 'satellite_nonce_data');
define('SATELLITE_NONCE_VERIFY', 'satellite_nonce_data_verigying_now');

# Require Helper func
require(__DIR__."/helpers/form_helpers.php");
require(__DIR__."/helpers/utility_helpers.php");
require(__DIR__."/helpers/timeZone.php");
# end loading helper Func


# ------------------------------------------------------
# Create a submenu in setting page
#-------------------------------------------------------
add_action("admin_menu", "satellite_submenu_in_wp_setting");
function satellite_submenu_in_wp_setting() {
  add_submenu_page(
        'options-general.php',
        'satellite_menu',
        'Satellite Admin Page',
        'administrator',
        'satellite_page',
        'satellite_page_act' );
}

function satellite_page_act(){
	echo '<h3>'.__('All Satellite Shortcode List').'</h3>';
	echo '<p>1. [satellite_short_code_full_page]</p>';
	echo '<p>2. [satellite_short_code_power]</p>';
	echo '<p>3. [satellite_short_code_bz]</p>';
	echo '<p>4. [satellite_short_code_bt]</p>';
	echo '<p>5. [satellite_short_code_wind]</p>';
	echo '<p>6. [satellite_short_code_density]</p>';
	echo '<p>7. [satellite_short_code_kp]</p>';
	echo '<p>8. [satellite_short_code_bz_bt_chart]</p>';
	echo '<p>9. [satellite_short_code_kp_chart]</p>';
	echo '<p>10. [satellite_short_code_aurora_oval_img]</p>';
	echo '<p>11. [satellite_short_code_min_by_min]</p>';
	echo '<p>12. [satellite_short_code_notification]</p>';
	echo '<p>13. [satellite_short_code_notification_alert]</p>';
	echo '<p>14. [satellite_short_code_setting_page]</p>';
}
#--------------------------------------------------------
# end
#-------------------------------------------------------


add_action('wp_enqueue_scripts', 'satellite_front_end_assets' );

function satellite_front_end_assets(){

	// Change this "my-page" with your page slug
	if (is_page('my-page')) {
		// my fron-end page goes here later
	}

	wp_register_style( 'satellite_bootstrap_css', SATELLITE_URL.'assets/plugins/bootstrap/css/bootstrap.min.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_bootstrap_css' );

	wp_register_style( 'satellite_bootstrap_css_switch', SATELLITE_URL.'assets/plugins/bootstrap-switch/bootstrap-switch.min.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_bootstrap_css_switch' );

	wp_register_style( 'satellite_style', SATELLITE_URL.'css/style.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_style' );

	wp_register_style( 'satellite_style_1', SATELLITE_URL.'css/style1.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_style_1' );

	wp_register_style( 'satellite_blue', SATELLITE_URL.'css/colors/blue.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_blue' );

	# ---------------------------------------------
	// loading select 2
	wp_register_style( 'satellite_admin_select_2', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_admin_select_2' );
	#---------------------------------------------

	wp_register_style( 'satellite_chartist', SATELLITE_URL.'assets/plugins/chartist-js/dist/chartist.min.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_chartist' );

	wp_register_style( 'satellite_chartist_init', SATELLITE_URL.'assets/plugins/chartist-js/dist/chartist-init.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_chartist_init' );

	wp_register_style( 'satellite_chartist_tooltip', SATELLITE_URL.'assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_chartist_tooltip' );

	/*wp_register_style( 'satellite_css_chart', SATELLITE_URL.'assets/plugins/css-chart/css-chart.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_css_chart' );
*/
	/*wp_register_style( 'satellite_moriss', SATELLITE_URL.'assets/plugins/morrisjs/morris.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_moriss' );*/

	/*wp_register_style( 'satellite_jqery_jve', SATELLITE_URL.'assets/plugins/vectormap/jquery-jvectormap-2.0.2.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_jqery_jve' );

	wp_register_style( 'satellite_jqery_jve', SATELLITE_URL.'assets/plugins/vectormap/jquery-jvectormap-2.0.2.css', false, '1.0.0' );
	wp_enqueue_style( 'satellite_jqery_jve' );*/


	// loading frontend js
	wp_register_script( 'satellite_cookie', SATELLITE_URL.'assets/plugins/jquery-cookie/jquery.cookie.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_cookie' );

	wp_register_script( 'satellite_chart', SATELLITE_URL.'assets/plugins/Chart.js/Chart.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_chart' );

	wp_register_script( 'satellite_tether', SATELLITE_URL.'assets/plugins/bootstrap/js/tether.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_tether' );

	wp_register_script( 'satellite_bootsrap', SATELLITE_URL.'assets/plugins/bootstrap/js/bootstrap.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_bootsrap' );

	wp_register_script( 'satellite_slimscroll', SATELLITE_URL.'js/jquery.slimscroll.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_slimscroll' );

	wp_register_script( 'satellite_waves', SATELLITE_URL.'js/waves.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_waves' );

	wp_register_script( 'satellite_sidebar_menu', SATELLITE_URL.'js/sidebarmenu.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_sidebar_menu' );

	wp_register_script( 'satellite_sticky_kit', SATELLITE_URL.'assets/plugins/sticky-kit-master/dist/sticky-kit.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_sticky_kit' );

	wp_register_script( 'satellite_chartist_js', SATELLITE_URL.'assets/plugins/chartist-js/dist/chartist.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_chartist_js' );

	wp_register_script( 'satellite_tooltip_min_js', SATELLITE_URL.'assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_tooltip_min_js' );

	/*wp_register_script( 'satellite_excanvas', SATELLITE_URL.'assets/plugins/flot/excanvas.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_excanvas' );*/

	/*wp_register_script( 'satellite_flot', SATELLITE_URL.'assets/plugins/flot/jquery.flot.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_flot' );

	wp_register_script( 'satellite_flot_time', SATELLITE_URL.'assets/plugins/flot/jquery.flot.time.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_flot_time' );

	wp_register_script( 'satellite_flot_tool_tip', SATELLITE_URL.'assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_flot_tool_tip' );*/

	wp_register_script( 'satellite_switch_min', SATELLITE_URL.'assets/plugins//bootstrap-switch/bootstrap-switch.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_switch_min' );

	/*wp_register_script( 'satellite_dash_5', SATELLITE_URL.'js/dashboard5.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_dash_5' );*/

/*	wp_register_script( 'satellite_jve_map_2', SATELLITE_URL.'assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_jve_map_2' );*/

	/*wp_register_script( 'satellite_aea_un', SATELLITE_URL.'assets/plugins/vectormap/jquery-jvectormap-us-aea-en.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_aea_un' );*/

	/*wp_register_script( 'satellite_dash_3', SATELLITE_URL.'js/dashboard3.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_dash_3' );*/

	wp_register_script( 'satellite_plugin_d3', SATELLITE_URL.'assets/plugins/d3/d3.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_plugin_d3' );

	wp_register_script( 'satellite_plugin_c3_master', SATELLITE_URL.'assets/plugins/c3-master/c3.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_plugin_c3_master' );

	wp_register_script( 'satellite_das_1', SATELLITE_URL.'js/dashboard1.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_das_1' );

	#-----------------------------------------
	wp_register_script( 'satellite_admin_select_2_js', 'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_admin_select_2_js' );

	wp_register_script( 'satellite_swal_fire', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_swal_fire' );

	#-----------------------------------------

	wp_register_script( 'satellite_custom_js', SATELLITE_URL.'js/custom.js', array('jquery-core'), false, true );
	wp_enqueue_script( 'satellite_custom_js' );

}


# -----------------------------
# add jquery to head
#-------------------------------
function insert_jquery(){
wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts','insert_jquery',1);
# end


#-----------------------------------------------------

add_shortcode('satellite_short_code_full_page', 'satellite_short_code_full_page_action');
function satellite_short_code_full_page_action(){
	$short_code_one = include_once(__DIR__.'/main_file.php');

	return $short_code_one;
}


########################################################################################################

// unset( $_SESSION['time_zone_set_by'] );
// unset( $_SESSION['time_zone_set_by'] );

// die();

global $my_time_zone;
$my_time_zone = 'Europe/Amsterdam';

add_action('init', 'satellite_update_setting_page');

function satellite_update_setting_page(){

	if(  isset( $_POST[SATELLITE_NONCE] ) && 
		wp_verify_nonce($_POST[SATELLITE_NONCE], SATELLITE_NONCE_VERIFY) 
	){
		// pr( $_POST );

		$set_timezone = $_POST['satellite_timezone'];

		$_SESSION['time_zone_set_by'] = 'user';
		$_SESSION['satellite_timezone'] = $set_timezone;

		// redirect
		global $wp;

		$current_uri = $_SERVER['REQUEST_URI'];


		// pr( $_SERVER );
		// die();

		$current_uri = home_url($current_uri);

		// var_dump($current_uri); die();

		// pr($current_uri); die();

		# msg
		$_SESSION['msg'] = "<h3 class='satellite_flash_msg'>Data Saved successfully ! </h3>";

		wp_redirect($current_uri, 303);
		exit();
	
	}else{
		global $my_time_zone;
		if( !isset( $_SESSION['time_zone_set_by'] ) ){
			# Set session timezone by ip
			$_SESSION['time_zone_set_by'] = 'ip';

			$ip_address = wl_get_ip_address();
			$timeZone = wl_get_timeZone_by_ip( $ip_address );

			if( $timeZone ){
				$my_time_zone = $timeZone;
			}

			# Set it session 
			$_SESSION['satellite_timezone'] = $my_time_zone;

		}

	}
}


add_action('wp_head', 'sat_add_home_style', 111);

function sat_add_home_style(){
	if( '/' == $_SERVER['REQUEST_URI'] ){
		echo "<style>
		.us_custom_821ea863 {
		    padding: 0px !important;
		    margin: 0px !important;
		}
		.us_custom_821ea863 {
		    padding: 0px !important;
		    margin: 0px !important;
		}

		.sat_power{
		    margin-top: 5px !important;
		    margin-right: -1px !important;
		}
		.sat_bz{
		    margin-left: -4px !important;
		    margin-right: -10px !important;
		}
		.sat_code_bt{
			margin-left: -2px !important;
		    margin-right: -7px !important;
		}
		.sat_wind{
		    margin-right: -6px !important;
		    margin-left: -5px !important;
		}
		.density_sat_div{
		    margin-top: 5px !important;
		    margin-left: 0px !important;
		    margin-right: 0px !important;
		}
		.sat_code_kp{
		    margin-top: 5px !important;
		}
		@media only screen and (max-width: 600px) {
			.sat_power {
			    margin-top: 5px !important;
			    margin-right: -5px !important;
			    margin-left: 1px !important;
			}
			.sat_bz{
			    margin-top: -35px !important;
			    margin-left: -4px !important;
			    margin-right: -10px !important;
			}
		    .sat_code_bt {
		        margin-right: -10px !important;
		        margin-left: -4px !important;
		        margin-top: -40px !important;
		    }
		    .sat_wind {
		       margin-right: -10px !important;
		       margin-left: -4px !important;
		       margin-top: -40px !important;
		       margin-bottom: -5px !important;
		    }
		    .density_sat_div {
		        margin-top: -30px !important;
		        margin-left: 1px !important;
		        margin-right: -5px !important;
		    }
		    .sat_code_kp {
		        margin-top: -30px !important;
		        margin-right: -5px !important;
		        margin-left: 1px !important;
		    }

		}
		</style>";
	}
}

// pr( $_SESSION );
// die();

global $dataMagReverse, $latestPowerData, $dataMag, $dataWind, $dataDensity, $currentKp, $headersDataMag, $table_use_arr;

$jsonDataMag = file_get_contents("http://services.swpc.noaa.gov/products/solar-wind/mag-2-hour.json");
$dataMag = json_decode($jsonDataMag,true);

$table_use_arr = array_reverse ( $dataMag );

$headersDataMag = array_shift( $dataMag );



$dataMagReverse = $dataMag;
$dataMag = array_reverse ( $dataMag );

$txtDataPower = file("http://services.swpc.noaa.gov/text/aurora-nowcast-hemi-power.txt");
$latestPowerData = implode("", array_splice($txtDataPower, count($txtDataPower) - 1));
$latestPowerData = explode(" ", $latestPowerData);
$latestPowerData = array_values(array_filter($latestPowerData));


$jsonDataWind = file_get_contents("http://services.swpc.noaa.gov/products/summary/solar-wind-speed.json");
$dataWind = json_decode($jsonDataWind,true);

$jsonDataDensity = file_get_contents("http://services.swpc.noaa.gov/products/solar-wind/plasma-2-hour.json");
$dataDensity = json_decode($jsonDataDensity,true);
$headersDataDensity = array_shift( $dataDensity );
$dataDensity = array_reverse ( $dataDensity );

$jsonDataKp = file_get_contents("http://services.swpc.noaa.gov/products/noaa-estimated-planetary-k-index-1-minute.json");

global $dataKp;

$dataKp = json_decode($jsonDataKp,true);
$headersDataKp = array_shift( $dataKp );
$dataKp = array_reverse ( $dataKp );

// pr( $dataKp );

if( isset( $_SESSION['satellite_timezone'] ) ){
	$my_time_zone = $_SESSION['satellite_timezone'];
}

foreach ($dataKp as $k => $v){
  # time Format
  $time_format_by_ip_or_select = wt_convert_date_time_to_another_timezone( $dataKp[$k][0], "H:i", $my_time_zone );
  $dataKp[$k][0] =  $time_format_by_ip_or_select;

  $dataKp[$k][2] = (int) ($dataKp[$k][2]) * 1;
}
$kp = array_pop($dataKp);
$currentKp = array_pop($kp);


#-----------------------------------
# Data format for chart
#-----------------------------------

foreach ($dataMagReverse as $k => $v) {
	$time_format_by_ip_or_select = wt_convert_date_time_to_another_timezone( $dataMagReverse[$k][0], "H:i", $my_time_zone );
    $dataMagReverse[$k][0] =  $time_format_by_ip_or_select;
}

#----------------------------------
# ENd format format for chart
#----------------------------------

#---------------------
# Custom style
#---------------------

global $custom_card_body_style;

$custom_card_body_style = 'style="padding: 35px 70px;"';

#---------------------
# End Custom style
#---------------------

########################################################################################################


add_shortcode('satellite_short_code_power', 'satellite_short_code_power_action');
function satellite_short_code_power_action(){

	global $custom_card_body_style,$latestPowerData;

	# Need to wrap
	$short_code_two = '<div class="sat_main_div_wrap sat_power">
	<div class="container-fluid_no_use">';

	$short_code_two .= '<div class="card-group card-group-summary sat_first_card sat_has_card">';
	$short_code_two .= '<div class="col-md-12 col-sm-12 card northen">
                            <div class="card-body sat_card_def">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>'.$latestPowerData[2].'</h3>
                                        <h6 class="card-subtitle">Power North(GW)</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-power" role="progressbar" style="width:'.intval($latestPowerData[2]).'%; height: 6px;" aria-valuenow="'. $latestPowerData[2].'" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
	$short_code_two .= '<div class="card southen">
                            <div class="card-body sat_card_def">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>'.$latestPowerData[3].'</h3>
                                        <h6 class="card-subtitle">Power South(GW)</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-power" role="progressbar" style="width:'.intval($latestPowerData[3]).'%; height: 6px;" aria-valuenow="'.$latestPowerData[3].'" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>';

    $short_code_two .= '</div>';

    # wrap end
    $short_code_two .= '</div></div>';

	return $short_code_two;
}

add_shortcode('satellite_short_code_bz', 'satellite_short_code_bz_action');
function satellite_short_code_bz_action(){

	global $custom_card_body_style,$dataMag;

	# Wrap with this
	$short_code_three = '<div class="sat_main_div_wrap sat_bz">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$short_code_three .= '<div class="col-md-12 col-sm-12 sat_has_card card">
                            <div class="card-body sat_card_def">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>'.$dataMag[0][3].'</h3>
                                        <h6 class="card-subtitle">BZ</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-bz" role="progressbar" style="width: '.( (abs(-10 - $dataMag[0][3])/20)*100 ).'%; height: 6px;" aria-valuenow="'.$dataMag[0][3].'" aria-valuemin="-10" aria-valuemax="10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

    # Wrap end
    $short_code_three .= '</div>
	</div>
</div>';


	return $short_code_three;
}

add_shortcode('satellite_short_code_bt', 'satellite_short_code_bt_action');
function satellite_short_code_bt_action(){

	global $custom_card_body_style,$dataMag;

	# Wrap Start 
	$short_code_four = '<div class="sat_main_div_wrap sat_code_bt">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$short_code_four .= '<div class="col-md-12 col-sm-12 sat_has_card card">
                            <div class="card-body sat_card_def">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>'. $dataMag[0][6].'</h3>
                                        <h6 class="card-subtitle">BT</h6>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-bt" role="progressbar" style="width: '. ( ($dataMag[0][6]/10)*100 ).'%; height: 6px;" aria-valuenow="'. $dataMag[0][6].'" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';

    # wrap end
    $short_code_four .= '		</div>
	</div>
</div>';

	return $short_code_four;
}

add_shortcode('satellite_short_code_wind', 'satellite_short_code_wind_action');
function satellite_short_code_wind_action(){

	global $custom_card_body_style,$dataWind;

	# wrap start
	$short_code_five = '<div class="sat_main_div_wrap sat_wind">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$short_code_five .= '<div class="col-md-12 col-sm-12 sat_has_card card">
                            <div class="card-body sat_card_def">
                                <div class="row">
                                    <div class="col-12">
                                        <h3>'.$dataWind['WindSpeed'].'</h3>
                                        <h6 class="card-subtitle">Wind Speed</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-wind-speed" role="progressbar" style="width: '.( ($dataWind['WindSpeed']/750)*100 ).'%; height: 6px;" aria-valuenow="'.$dataWind['WindSpeed'].'" aria-valuemin="0" aria-valuemax="750"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';


    # wrap end
    $short_code_five .= '		</div>
	</div>
</div>';

	return $short_code_five;
}

add_shortcode('satellite_short_code_density', 'satellite_short_code_density_action');
function satellite_short_code_density_action(){

	global $custom_card_body_style,$dataDensity;
    # wrap starrt
    $short_code_six = '<div class="sat_main_div_wrap density_sat_div">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$short_code_six .= '<div class="col-md-12 col-sm-12 sat_has_card card">
                          <div class="card-body sat_card_def">
                              <div class="row">
                                  <div class="col-12">
                                      <h3>'. $dataDensity[0][1] .'</h3>
                                      <h6 class="card-subtitle">Density</h6></div>
                                  <div class="col-12">
                                      <div class="progress">
                                          <div class="progress-bar bg-density" role="progressbar" style="width: '. ( ($dataDensity[0][1]/30)*100 ) .'%; height: 6px;" aria-valuenow="'. $dataDensity[0][1] .'" aria-valuemin="0" aria-valuemax="30"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>';

    # wrap end
    $short_code_six .= '</div>
	</div>
</div>';


	return $short_code_six;
}

add_shortcode('satellite_short_code_kp', 'satellite_short_code_kp_action');
function satellite_short_code_kp_action(){

	global $custom_card_body_style, $currentKp;

	$kp_bg = ( $currentKp < 5 ) ? '#55ce63' : '#f62d51';

	# wrap start
	$short_code_six = '<div class="sat_main_div_wrap sat_code_kp">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$short_code_six .= '<div class="col-md-12 col-sm-12 sat_has_card card sat_first_card">
                          <div class="card-body sat_card_def">
                              <div class="row">
                                  <div class="col-12">
                                      <h3>'.$currentKp.'</h3>
                                      <h6 class="card-subtitle">KP</h6></div>
                                  <div class="col-12">
                                      <div class="progress">
                                          <div class="progress-bar" role="progressbar" style="width: '.( ($currentKp/8) * 100 ).'%; height: 6px; background: '.$kp_bg.'" aria-valuenow="'.$currentKp.'" aria-valuemin="0" aria-valuemax="8"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>';

    # wrap end
    $short_code_six .= '</div>
	</div>
</div>';


	return $short_code_six;
}


function add_this_script_for_bz_bt_chart(){
	global $dataMagReverse, $dataKp;
	?>

	<script>
		jQuery(document).ready(function(){
			var ctx1 = document.getElementById("chart1").getContext("2d");
			var data1 = {
			    labels: <?php echo json_encode(array_column($dataMagReverse, 0)); ?>,
			    datasets: [
			        {
			            fillColor: "#f62d51",
			            strokeColor: "#f62d51",
			            pointColor: "#f62d51",
			            pointStrokeColor: "#f62d51",
			            pointHighlightFill: "#f62d51",
			            pointHighlightStroke: "#f62d51",
			            data: <?php echo json_encode(array_column($dataMagReverse, 3)); ?>
			        }, {
			            fillColor: "#eceff1",
			            strokeColor: "#eceff1",
			            pointColor: "#eceff1",
			            pointStrokeColor: "#eceff1",
			            pointHighlightFill: "#eceff1",
			            pointHighlightStroke: "#eceff1",
			            data: <?php echo json_encode(array_column($dataMagReverse, 6)); ?>
			        },

			    ],

			    annotation: {
			        annotations: [{
			            type: 'line',
			            mode: 'horizontal',
			            scaleID: 'y-axis-0',
			            value: 5,
			            borderColor: 'rgb(75, 192, 192)',
			            borderWidth: 4,
			            label: {
			                enabled: false,
			                content: 'Test label'
			            }
			        }]
			    }

			};
			Chart.types.Line.extend({
			    name: "LineAlt",
			    initialize: function () {
			        Chart.types.Line.prototype.initialize.apply(this, arguments);

			        var ctx = this.chart.ctx;
			        var originalStroke = ctx.stroke;
			        ctx1.stroke = function () {
			            ctx1.save();
			            originalStroke.apply(this, arguments)
			            ctx1.restore();
			        }
			        var xLabels = this.scale.xLabels;
			        xLabels.forEach(function (label, i) {
			            if (i % 10 != 0)
			                xLabels[i] = '';// show empty string
			        })
			    }
			});

			var chart1 = new Chart(ctx1).LineAlt(data1, {
			    scaleShowGridLines: true,
			    scaleGridLineColor: "#61676b",
			    scaleGridLineWidth: 0,
			    scaleShowHorizontalLines: true,
			    scaleShowVerticalLines: false,
			    bezierCurve: true,
			    bezierCurveTension: 0.4,
			    pointDot: true,
			    pointDotRadius: 1,
			    pointDotStrokeWidth: 2,
			    pointHitDetectionRadius: 2,
			    datasetStroke: true,
			    tooltipCornerRadius: 2,
			    datasetStrokeWidth: 0,
			    datasetFill: false,
			    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
			    responsive: true,
			    skipLabels: 1,
			});
		});
	</script>
	
	<?php
}

add_shortcode('satellite_short_code_bz_bt_chart', 'satellite_short_code_bz_bt_chart_action');

function satellite_short_code_bz_bt_chart_action(){
	
	# wrap start
	$chart = '<div class="sat_main_div_wrap sat_bt_chart">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$chart .= '<div class="card-block" style="background: #263238;">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            <div style="width: 100%">
                                <h3 class="card-title">Current Overview</h3>
                                <div class="ml-auto">
                                    <ul class="list-inline">
                                        <li>
                                            <h6 class="text-muted" style="color: #f62d51 !important;"><i class="fa fa-circle font-10 m-r-10"></i>BZ</h6> </li>
                                        <li>
                                            <h6 class="text-muted" style="color: #eceff1 !important;"><i class="fa fa-circle font-10 m-r-10 "></i>BT</h6> </li>
                                    </ul>
                                </div>
                                <canvas id="chart1" width="" height="" ></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

    # wrap end
    $chart .= '</div>
	</div>
</div>';

    add_action('wp_footer', 'add_this_script_for_bz_bt_chart', 111);

    return $chart;

}

function add_this_script_for_kp_chart(){
	global $dataMagReverse, $dataKp;
	?>

	<script>
		jQuery(document).ready(function(){
			var ctx2 = document.getElementById("chart2").getContext("2d");
			var data2 = {
			    labels: <?php echo json_encode(array_column($dataKp, 0)); ?>,
			    datasets: [
			        {
			            fillColor: "#55ce63",
			            strokeColor: "#55ce63",
			            pointColor: "#55ce63",
			            pointStrokeColor: "#55ce63",
			            pointHighlightFill: "#55ce63",
			            pointHighlightStroke: "#55ce63",
			            data: <?php echo json_encode(array_column($dataKp, 2)); ?>
			        }

			    ],

			    annotation: {
			        annotations: [{
			            type: 'line',
			            mode: 'horizontal',
			            scaleID: 'y-axis-0',
			            value: 5,
			            borderColor: 'rgb(75, 192, 192)',
			            borderWidth: 4,
			            label: {
			                enabled: false,
			                content: 'Test label'
			            }
			        }]
			    }

			};
			Chart.types.Line.extend({
			    name: "LineAlt",
			    initialize: function () {
			        Chart.types.Line.prototype.initialize.apply(this, arguments);

			        var ctx = this.chart.ctx;
			        var originalStroke = ctx.stroke;
			        ctx2.stroke = function () {
			            ctx2.save();
			            originalStroke.apply(this, arguments)
			            ctx2.restore();
			        }
			        var xLabels = this.scale.xLabels;
			        xLabels.forEach(function (label, i) {
			            if (i % 10 != 0)
			                xLabels[i] = '';// show empty string
			        })
			    }
			});

			var chart2 = new Chart(ctx2).LineAlt(data2, {
			    scaleShowGridLines: true,
			    scaleGridLineColor: "#61676b",
			    scaleGridLineWidth: 0,
			    scaleShowHorizontalLines: true,
			    scaleShowVerticalLines: false,
			    bezierCurve: true,
			    bezierCurveTension: 0.4,
			    pointDot: true,
			    pointDotRadius: 1,
			    pointDotStrokeWidth: 2,
			    pointHitDetectionRadius: 2,
			    datasetStroke: true,
			    tooltipCornerRadius: 2,
			    datasetStrokeWidth: 0,
			    datasetFill: false,
			    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
			    responsive: true,
			    skipLabels: 1,
			});

		});
	</script>
	
	<?php
}

add_shortcode('satellite_short_code_kp_chart', 'satellite_short_code_kp_chart_action');

function satellite_short_code_kp_chart_action(){

# wrap starrt

$chart = '<div class="sat_main_div_wrap sat_kp_chart">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

$chart .= '<div class="card-block" style="background: #263238;">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-wrap">
                        <div style="width: 100%">
                            <h3 class="card-title">Current Overview</h3>
    
                            <canvas id="chart2" width="" height=""></canvas>

                        </div>
                    </div>
                </div>
            </div>
        </div>';

    # wrap end

    $chart .= '</div>
	</div>
</div>';

	add_action('wp_footer', 'add_this_script_for_kp_chart', 112);

	return $chart;
}


add_shortcode('satellite_short_code_aurora_oval_img', 'satellite_short_code_img_text_action');
function satellite_short_code_img_text_action(){

	# wrap starrt
	$oval_img_text = '<div class="sat_main_div_wrap sat_oval_img">
	<div class="container-fluid_no_use">
		<div class="card-group_no_n card-group-summary_no_n row sat_fix_oval">';

	$oval_img_text .= '<div class="row">
	<div class="col-md-12" style="float:left;">
	    <div class="card">
	        <div class="card-block">
	            <h3 class="card-title">Aurora Oval</h3>
	            <p class="northen">Northern Hemisphere</p>
	            <p class="southen">Southern Hemisphere</p>
	            <img src="https://services.swpc.noaa.gov/images/aurora-forecast-northern-hemisphere.jpg" style="height: auto; width: 100%;" class="northen" />
	            <img src="https://services.swpc.noaa.gov/images/aurora-forecast-southern-hemisphere.jpg" style="height: auto; width: 100%;" class="southen" />
	        </div>
	    </div>
	</div>
	
</div>';

   # wrrap end
   $oval_img_text .= '</div>
	</div>
</div>';

	return $oval_img_text;
}


// min_by_min_mountain_chart

add_shortcode('satellite_short_code_min_by_min', 'satellite_short_code_min_by_min_action');
function satellite_short_code_min_by_min_action(){

	global $headersDataMag, $dataDensity, $my_time_zone, $table_use_arr;

	$array1  = $table_use_arr;

	$dscovr_dist= 1556925;
	$array = $dataDensity;

	# wrap start
	$table_data = '<div class="sat_main_div_wrap sat_min_by_min">
	<div class="container-fluid_no_use">
		<div class="card-group card-group-summary">';

	$table_data .= '<div class="row">
	    <div class="col-lg-12">
	        <div class="card">
	            <div class="card-block">
	                <div class="table-responsive">
	                  <p class="sate_tbl_head">Selected TimeZone: '.$my_time_zone.'</p>
	                    <table class="table">
	                        <thead>
	                        <tr>
	                            <th>Arrival Time</th>
	                            <th>Density (p/cm3)</th>
	                            <th>Solar Plasma Speed(km/s)</th>
	                            <th>Bz</th>
	                            <th>Bt</th>
	                        </tr>
	                        </thead>
	                        <tbody> 
	';
	                        
	                        foreach($array as $k=>$row){

	                            // convert time_tag to date
	                            // see here for formatting details: http://php.net/manual/en/function.date.php
	                            //$time_tag = date( 'F d, Y h:i A', strtotime( '-6 hours' , strtotime( $row[0] ) ) );

	                            // pr($row[0]);

	                        	// $prev = date( 'F d, Y h:i A', strtotime( '-6 hours', strtotime( $row[0] ) ) );

	                            $time_format_by_ip_or_select = wt_convert_date_time_to_another_timezone( $row[0], 'F d, Y h:i A', $my_time_zone );

	                            $time_tag = $time_format_by_ip_or_select;
	                            // $time_tag = $time_format_by_ip_or_select." ( Old : $prev ) ";

	                            # TTE = distance / speed / 60
	                            $tte = $dscovr_dist / $row[2] / 60;
	                            $tte = round($tte);

	                            #----------------------------------
	                            # Start New Calculations
	                            #-----------------------------------
	                            $my_custom_min = wt_convert_date_time_to_another_timezone( $row[0], 'F d, Y h:i A', $my_time_zone );

	                            $time = strtotime($my_custom_min);
	                            $new_calculation = date("F d, Y h:i A", strtotime('+'.$tte.' minutes', $time));


	                            #----------------------------------
	                            # end New Calculations
	                            #-----------------------------------

	                            //  '<tr><td>'.$time_tag. '</td>
	                           $table_data .= '<td>' . $new_calculation . '</td>
	                            <td>'.$row[1].'</td>
	                            <td>'.$row[2].'</td>
	                            <td>'.$array1[$k][3].'</td>
	                            <td>'.$array1[$k][6].'</td>
	                            </tr>
	                            ';
	                        }
	
	$table_data .= '</tbody>
	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>';

	# wrap end
	$table_data .= '</div>
	</div>
</div>';

	return  $table_data;              

}


add_shortcode('satellite_short_code_notification', 'satellite_short_code_notification_action');

function satellite_short_code_notification_action(){

	$notification = '<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-header">
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0">

                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>

            </ul>
            <ul class="navbar-nav my-lg-0">
	<ul class="navbar-nav my-lg-0">
	    <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>';

                $jsonDataAlerts = file_get_contents("http://services.swpc.noaa.gov/products/alerts.json");
                $dataAlerts = json_decode($jsonDataAlerts,true);
                $dataAlerts = array_splice($dataAlerts, 0, 5);
                $currentTimestamp = strtotime(date('Y-m-d'));
                foreach ($dataAlerts as $k => $alert) {
                    if (strtotime($alert['issue_datetime']) < $currentTimestamp) {
                        unset($dataAlerts[$k]);
                    }
                }
                foreach ($dataAlerts as $k => $alert) {
                    for ($i = 1; $i <= 5; $i++) {
                        if (strpos($alert['message'], 'G'.$i)) {
                            $dataAlerts[$k]['level'] = 'G'.$i;
                            break;
                        }
                    }
                }

                foreach ($dataAlerts as $k => $alert) {
                    if (!isset($alert['level'])) {
                        unset($dataAlerts[$k]);
                    }
                }

            
            $notification  .=  (!empty($dataAlerts)) ? '<div class="notify"> <span class="heartbit"></span><span class="point"></span></div>' : '';

	        $notification  .= '</a>
	        <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
	            <ul>
	                <li>
	                    <div class="drop-title">Notifications</div>
	                </li>
	                <li>
	                    <div class="slimScrollDiv">
	                        <div class="message-center" style="overflow: hidden; width: auto; height: auto;">
	                        ';

                            foreach ($dataAlerts as $alert) {

                            	// pr($alert);
                            	
                            		$data = (isset($alert['level'])) ? 'level '. $alert['level'] : '';
                            		$date = date('F j, Y, g:i a', strtotime($alert['issue_datetime']));

			                        $notification  .= '<a href="#">
			                            <div class="btn btn-danger btn-circle"><i class="mdi mdi-alert-box"></i></div>
			                            <div class="mail-contnet">
			                                <h5>'.$data.' Storm  detected</h5>
			                                <span class="mail-desc">Geo-magnetic storm predicted for the following dates:</span>
			                                <span class="time">Issued: '. $date .'</span>
			                            </div>
			                        </a>';
                          }

	                    $notification  .= '</div>
	                    </div>
	                    <div class="slimScrollBar" style="background: rgb(220, 220, 220); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 192.901px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
	                </li>

	            </ul>
	        </div>
	    </li>

	</ul> 
	</ul>
        </div>
    </nav>
</header>';

	return $notification;
	
}


function notification_swal_script_load(){

	$jsonDataAlerts = file_get_contents("http://services.swpc.noaa.gov/products/alerts.json");
	$dataAlerts = json_decode($jsonDataAlerts,true);
	$dataAlerts = array_splice($dataAlerts, 0, 5);
	$currentTimestamp = strtotime(date('Y-m-d'));
	foreach ($dataAlerts as $k => $alert) {
	    if (strtotime($alert['issue_datetime']) < $currentTimestamp) {
	        unset($dataAlerts[$k]);
	    }
	}
	foreach ($dataAlerts as $k => $alert) {
	    for ($i = 1; $i <= 5; $i++) {
	        if (strpos($alert['message'], 'G'.$i)) {
	            $dataAlerts[$k]['level'] = 'G'.$i;
	            break;
	        }
	    }
	}

	foreach ($dataAlerts as $k => $alert) {
	    if (!isset($alert['level'])) {
	        unset($dataAlerts[$k]);
	    }
	}

	$noti_swal = '';

	global $noti_swal, $has_blink;
	$has_blink = '';

	foreach ($dataAlerts as $alert) {
		$has_blink = 'it_has_blink';
		$alert_level = (isset($alert['level'])) ? 'level '. $alert['level'] : '';
		$date = date('F j, Y, g:i a', strtotime($alert['issue_datetime']));

		$noti_swal  = '<a href="#"><div class="btn btn-danger btn-circle"><i class="mdi mdi-alert-box"></i></div><div class="mail-contnet"><h5>'.$alert_level.' Storm  detected</h5><span class="mail-desc">Geo-magnetic storm predicted for the following dates:</span><span class="time">Issued: '. $date .'</span></div></a>';
	}

	// test data
	// $noti_swal = '<a href="#"><div class="btn btn-danger btn-circle"><i class="mdi mdi-alert-box"></i></div><div class="mail-contnet"><h5>Big Storm  detected</h5><span class="mail-desc">Geo-magnetic storm predicted for the following dates: </span><span class="time">Issued: 05/12/2012 </span></div></a>';


	?>

	<script>
	    jQuery(document).ready(function(){

	    	var has_alert = "<?php echo $has_blink; ?>";

	    	if( has_alert.length > 0 ){
	    		jQuery('.add_blink').addClass('notify');
	    	}

	        jQuery('.notify_btn').click(function(){

	            Swal.fire({
	              position: 'top-end',
	              title: 'Notifications',
	              // html: '<div class="swal_html"><h2 >hello world</h2> </div>',
	              html: '<div class="swal_html"><?php echo $noti_swal; ?></div>',
	              showConfirmButton: false,
	            });

	        });

	    });
	</script>

	<?php
}

add_shortcode('satellite_short_code_notification_alert', 'satellite_short_code_notification_alert_action');

function satellite_short_code_notification_alert_action(){

	add_action('wp_footer', 'notification_swal_script_load', 115);


	$button =  '<div class="notify_btn"> <div class="add_blink "> <span class="heartbit"></span><span class="point"></span></div> <div class="sat_btn_no sat_btn2_no"> <i class="mdi mdi-message"></i> </div> </div>';


	return $button;
}

add_shortcode('satellite_short_code_setting_page', 'satellite_short_code_setting_page_action');

function satellite_short_code_setting_page_action(){

		global $wpdb;



		$setting_page = '';
		# If user not Looged in Then redirect
	    if ( !is_user_logged_in() ) {

	        $account_url = 'my-account';
	        $to =  home_url($account_url);
	        
	        $setting_page .= "<script>window.location.href='".$to."'</script>";

		}

		$setting_page .= "<style>

			.float_left{
			  float: left;
			  clear: both;
			}

			.sat_container {
			  max-width: 400px;
			  width: 100%;
			  /*margin: 0 auto;*/
			  position: relative;
			}


			.sat_select{
			  width: 300px;
			}

			.contact {
			  float: left;
			  max-width: 100%;
			  background: #383c48;
			  padding: 18px;
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			}

			fieldset {
			  border: medium none !important;
			  margin: 0 0 10px;
			  min-width: 100%;
			  padding: 0;
			  width: 100%;
			}

			.float-right{
			  float: right;
			}
			.margin-bottom-20{
			  margin-bottom: 20px !important;
			}

			.select2-container--default .select2-selection--single .select2-selection__rendered {
			    color: #444;
			    line-height: 28px;
			    background: white;
			}
			.satellite_flash_msg{
				color: green !important;
			}
			.sat_user_sett{
				min-width: 100%;
				margin-bottom: 50px; 
				height: 100vh;
			}
			.select2-selection__arrow:after {
			    content: none;
			}
			.select2-container--default .select2-selection--single .select2-selection__rendered {
			    margin-top: 11px;
			}
			.web_lover_form_select{
				color: #fff;
			}
			.sat_select_label{
				margin-top: 27px;
				color: #fff;
			}
			.submit_btn{
				margin-top: 23px;
			}
			.sat_switch_div{
				margin-bottom: 25px;
			}
		</style>";
	

	$setting_page .= '<div class="containers sat_user_sett">
	<h3 class="sat_set_head"> '. __('Setting Page', SATELLITE_TD).' <hr></h3>';

	if( isset( $_SESSION['msg'] ) ):

	$setting_page .= $_SESSION['msg']; 
	unset( $_SESSION['msg'] );

	endif;

	$setting_page .= ' <div class="form"> ';

			global $timezones;

			$setting_page .=  web_lover_form_main_div();
			$setting_page .=  web_lover_form_open();
			$setting_page .=  '<h3>'.__( 'Setting Page Form', SATELLITE_TD ).'</h3>';
			$setting_page .= wp_nonce_field(SATELLITE_NONCE_VERIFY, SATELLITE_NONCE, true, false);


	$setting_page .= '<div class="sat_switch_div"> <div class="r-panel-body">
		    <div class="nightmode-toggle" style="margin-bottom: 20px; margin-left: 3px;">
		        <input type="checkbox" checked="" name="nightmode" data-on-text="<i class=\'wi wi-day-sunny\'></i>" data-off-text="<i class=\'wi wi-night-clear\'></i>">
		    </div>
		    <div class="hemisphere-toggle float_left">
		        <input type="checkbox" checked="" name="hemisphere" data-size="large" data-on-text="North" data-off-text="South">
		    </div>
		</div </div>
		<div style="clear: both;"> ';

			$default_time_zone = '';

			if( isset( $_SESSION['satellite_timezone'] ) ){
				$default_time_zone = $_SESSION['satellite_timezone'];
			}

			$setting_page .= web_lover_form_select("satellite_timezone", $timezones, $default_time_zone);
			$setting_page .= web_lover_form_submit('Save');
			$setting_page .= web_lover_form_close();
			$setting_page .= web_lover_form_main_div_end();
$setting_page .= '
	</div>
	</div>

</div>';

return $setting_page;

}

# ----------------------------------------------------