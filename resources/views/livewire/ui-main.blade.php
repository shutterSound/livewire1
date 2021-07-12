<div class="app-content content">
    <div class="content-header row">
        <div class="content-header-light col-12">
            <div class="row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <h3 class="content-header-title">Advance Interactive Cards</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Components</a>
                                </li>
                                <li class="breadcrumb-item active">Advance Interactive Cards
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-3 col-12">
                    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
                        <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                        <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item" href="component-progress.html"> Progress</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Interactive charts section start -->
            <section id="interactive-charts">
                <div class="row">
                    <div class="col-12 mt-1 mb-3">
                        <h4>Interactive Charts</h4>
                        <hr>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Live Visits</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="row">
                                    <div class="col-xl-8 col-lg-12">
                                        <div class="card-body">
                                            <div class="rickshaw-wrap">
                                                <div id="live-visits"></div>
                                                <div class="rickshaw-legend-wrap">
                                                    <div id="area-chart-legend"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-12">
                                        <div class="text-center">
                                            <canvas id="live-visits-doughnut"></canvas>
                                        </div>
                                        <div class="table-responsive mt-2">
                                            <table class="table table-striped mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Continent</th>
                                                    <th>Visits</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Asia</td>
                                                    <td>15684</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Africa</td>
                                                    <td>54789</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>America</td>
                                                    <td>89756</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Europe</td>
                                                    <td>23489</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- // Interactive charts section end -->
        </div>
    </div>
</div>
