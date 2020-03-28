  <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
             <h3>Perkembangan Covid 19 Di Indonesia</h3><br>
                <div class="row">
                    <div class="col-lg-4 col-md-8">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?= $indo[0]['positif']?></h2>
                                <div class="m-b-5">Total Positif</div><i class="fa fa-frown-o widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?= $indo[0]['sembuh']?></h2>
                                <div class="m-b-5">Total Sembuh</div><i class="fa fa-smile-o widget-stat-icon"></i>
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?= $indo[0]['meninggal']?></h2>
                                <div class="m-b-5">TOTAL Meninggal</div>
                                <div><i class="fa fa-level-up m-r-5"></i><small></small></div>
                            </div>
                        </div>
                    </div>
                   <!--  <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong">108</h2>
                                <div class="m-b-5">NEW USERS</div><i class="ti-user widget-stat-icon"></i>
                                <div><i class="fa fa-level-down m-r-5"></i><small>-12% Lower</small></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data Perkembangan Perprovinsi</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Provinsi</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($prov as $key => $value) {?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $value['attributes']['Provinsi']?></td>
                                                <td><?= $value['attributes']['Kasus_Posi']?></td>
                                                <td><?= $value['attributes']['Kasus_Semb']?></td>
                                                <td><?= $value['attributes']['Kasus_Meni']?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
           

                 <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Peta</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item">option 1</a>
                                        <a class="dropdown-item">option 2</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body">
                                 <div id="mapid"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     <script type="text/javascript">
         var map = L.map('mapid').setView([51.505, -0.09], 13);
         var base_url="<?=base_url()?>";

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        $.getJson("https://covid19-public.digitalservice.id/analytics/longlat", function(data){
            $.each(data, function(i, field){
                var v_lat=parseFloat(data[i][].alamat_longitude);
                var v_long=parseFloat(data[i][].alamat_latitude);
            })
        })
        L.marker([v_long,v_lat]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
     </script>