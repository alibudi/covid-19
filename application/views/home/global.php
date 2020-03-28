  <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                         <h3>Perkembangan Covid 19 Global</h3><br>
                <div class="row">
                    <div class="col-lg-4 col-md-8">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?= $glob_pos['value']?></h2>
                                <div class="m-b-5">Total Positif</div><i class="fa fa-frown-o widget-stat-icon"></i>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?= $glob_semb['value']?></h2>
                                <div class="m-b-5">Total Sembuh</div><i class="fa fa-smile-o widget-stat-icon"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <h2 class="m-b-5 font-strong"><?= $glob_meni['value']?></h2>
                                <div class="m-b-5">TOTAL Meninggal</div>
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
                                <div class="ibox-title">Data Perkembangan Dunia</div>
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
                                            <th>Negara</th>
                                            <th>Positif</th>
                                            <th>Sembuh</th>
                                            <th>Meninggal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no=1; foreach ($neg as $key => $value) {?>
                                            <tr>
                                                <td><?= $no++?></td>
                                                <td><?= $value['attributes']['Country_Region']?></td>
                                                <td><?= $value['attributes']['Confirmed']?></td>
                                                <td><?= $value['attributes']['Recovered']?></td>
                                                <td><?= $value['attributes']['Deaths']?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     