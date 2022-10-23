
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor" style="max-width: 50%; float:left;">Dashboard</h3>
                            <ol class="breadcrumb" style="display: none;">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <div class="col-md-7 col-4 align-self-center">
                           <?php include_once(__DIR__."/setting_menu.php"); ?>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

              <?php
              $jsonDataMag = file_get_contents("http://services.swpc.noaa.gov/products/solar-wind/mag-2-hour.json");
              $dataMag = json_decode($jsonDataMag,true);
              $headersDataMag = array_shift( $dataMag );

              global $dataMagReverse;

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

              foreach ($dataKp as $k => $v){

                $dataKp[$k][2] = abs($dataKp[$k][2]) * 1;
              }
              $wl_kp = array_pop($dataKp);
              $currentKp = array_pop($wl_kp);

              ?>
              <div class="card-group card-group-summary">
                        <div class="card northen">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3><?php echo $latestPowerData[2]?></h3>
                                        <h6 class="card-subtitle">Power North(GW)</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-power" role="progressbar" style="width: <?php echo intval($latestPowerData[2])?>%; height: 6px;" aria-valuenow="<?php echo $latestPowerData[2]?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card southen">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3><?php echo $latestPowerData[3]?></h3>
                                        <h6 class="card-subtitle">Power South(GW)</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-power" role="progressbar" style="width: <?php echo intval($latestPowerData[3])?>%; height: 6px;" aria-valuenow="<?php echo $latestPowerData[3]?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3><?php echo $dataMag[0][3];?></h3>
                                        <h6 class="card-subtitle">BZ</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-bz" role="progressbar" style="width: <?php echo (abs(-10 - $dataMag[0][3])/20)*100;?>%; height: 6px;" aria-valuenow="<?php echo $dataMag[0][3];?>" aria-valuemin="-10" aria-valuemax="10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3><?php echo $dataMag[0][6];?></h3>
                                        <h6 class="card-subtitle">BT</h6>
                                    </div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-bt" role="progressbar" style="width: <?php echo ($dataMag[0][6]/10)*100;?>%; height: 6px;" aria-valuenow="<?php echo $dataMag[0][6];?>" aria-valuemin="0" aria-valuemax="10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h3><?php echo $dataWind['WindSpeed']?></h3>
                                        <h6 class="card-subtitle">Wind Speed</h6></div>
                                    <div class="col-12">
                                        <div class="progress">
                                            <div class="progress-bar bg-wind-speed" role="progressbar" style="width: <?php echo ($dataWind['WindSpeed']/750)*100;?>%; height: 6px;" aria-valuenow="<?php echo $dataWind['WindSpeed']?>" aria-valuemin="0" aria-valuemax="750"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-12">
                                      <h3><?php echo $dataDensity[0][1]?></h3>
                                      <h6 class="card-subtitle">Density</h6></div>
                                  <div class="col-12">
                                      <div class="progress">
                                          <div class="progress-bar bg-density" role="progressbar" style="width: <?php echo ($dataDensity[0][1]/30)*100;?>%; height: 6px;" aria-valuenow="<?php echo $dataDensity[0][1]?>" aria-valuemin="0" aria-valuemax="30"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-12">
                                      <h3><?php echo $currentKp?></h3>
                                      <h6 class="card-subtitle">KP</h6></div>
                                  <div class="col-12">
                                      <div class="progress">
                                          <div class="progress-bar" role="progressbar" style="width: <?php echo ($currentKp/8) * 100;?>%; height: 6px; background: <?php echo ($currentKp < 5) ? '#55ce63' : '#f62d51'?>" aria-valuenow="<?php echo $currentKp?>" aria-valuemin="0" aria-valuemax="8"></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <!-- Row -->
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs profile-tab" role="tablist">
                                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#bz-bt-chart" role="tab">BZ and BT chart</a> </li>
                                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#kp-chart" role="tab">KP chart</a> </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="bz-bt-chart" role="tabpanel">
                                        <div class="card-block">
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
                                        </div>
                                    </div>
                                    <!--second tab-->
                                    <div class="tab-pane" id="kp-chart" role="tabpanel">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex flex-wrap">
                                                        <div style="width: 100%">
                                                            <h3 class="card-title">Current Overview</h3>
                                                           <!-- <div class="ml-auto">
                                                                <ul class="list-inline">
                                                                    <li>
                                                                        <h6 class="text-muted" style="color: #f62d51 !important;"><i class="fa fa-circle font-10 m-r-10"></i>BZ</h6> </li>
                                                                    <li>
                                                                        <h6 class="text-muted" style="color: #eceff1 !important;"><i class="fa fa-circle font-10 m-r-10 "></i>BT</h6> </li>
                                                                </ul>
                                                            </div>-->
                                                            <canvas id="chart2" width="" height=""></canvas>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php

                                            foreach ($dataMagReverse as $k => $v) {
                                                $dataMagReverse[$k][0] =  date("H:i", strtotime($dataMagReverse[$k][0]));
                                            }
                                            foreach ($dataKp as $k => $v) {
                                                $dataKp[$k][0] =  date("H:i", strtotime($dataKp[$k][0]));
                                            }
                                            ?>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
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
                        <div class="col-lg-4 col-md-5">
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title">Tomorrow's Forecastl</h3>
                                    <p class="northen">Northern Hemisphere</p>
                                    <img src="https://services.swpc.noaa.gov/experimental/images/aurora_dashboard/tomorrow_nights_static_viewline_forecast.png" style="height: auto; width: 100%;" class="" />
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="card">
                                <div class="card-block">
                                    <h3 class="card-title">Basic Break Down:</h3>
                                    <p>Hello and Welcome to Aurora Admin by Spasso Space Agency</p>
                                    <p>Here's a break down of the data:</p>
                                    <p><strong>Hemispheric power:</strong> The more power the better. Usually Fort McMurray will need around 20 Gw and Edmonton Will need around 40 to see the lights.</p>
                                    <p><strong>Bz:</strong> The Bz must be negative to see the northern lights. We like to see -2.0 before we go out chasing. This may differ based on location.</p>
                                    <p><strong>Bt:</strong> The Bt is inversly proportional to how strong the Bz could be. If there's a Bt of 4.0 that means there's potential for the Bz to go to -4.0.</p>
                                    <p><strong>Wind Speed:</strong>This is how fast your solar winds are. yeah- they're fast. Some times we can get speed induced auroras to help increase the density of the electro magnetic particles coming to Earth.</p>
                                    <p><strong>Kp:</strong> This metric is actually measured here on Earth. Normally we'd like to see a Kp of 4 or more to see aurora but it's still possible to see with less. The red light on the top right of the page will ping if it's 4 or larger as notified by NOAA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row -->
                    <!-- Row -->

                    </div>
                    <!-- ============================================================== -->
                    <!-- End PAge Content -->
                    <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->

<?php

add_action('wp_footer', 'add_this_script_main_file_footer', 100);

function add_this_script_main_file_footer(){
    global $dataMagReverse, $dataKp;
?>
    <script>
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

        jQuery('a[data-toggle=tab]').on('shown.bs.tab', function (e) {

            window.dispatchEvent(new Event('resize'));
        });
    </script>
<?php } ?>