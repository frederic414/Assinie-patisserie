@extends('layouts.appadmin')
<style>
  .graphe1{
            height: 10%;
            width: 30%;
            display: inline-flex;
        }
  .graphe2{
    height: 300px;
    width: 400px;
    display: inline-flex;
        }
  .linechart{
    height: 30%;
    width: 70%;
    display: inline-flex;
        }
  .graphique{
    margin-top: 40px;
    display: flex;
    flex-direction: column;
  }
  .graphiqueligne{
    display: flex;
    flex-wrap: initial;
    justify-content: space-between;
  }
</style>
@section('title')
        Tableau de bord
@endsection
     
@section('contenu')
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                <h4 class="font-weight-bold">Hi, Welcomeback!</h4>
                <h4 class="font-weight-normal mb-0">JustDo Dashboard,</h4>
              </div>
              <div class="col-12 col-xl-7">
                <div class="d-flex align-items-center justify-content-between flex-wrap">
                  <div class="border-right pr-4 mb-3 mb-xl-0">
                    <p class="text-muted">Balance</p>
                    <h4 class="mb-0 font-weight-bold">$40079.60 M</h4>
                  </div>
                  <div class="border-right pr-4 mb-3 mb-xl-0">
                    <p class="text-muted">Today’s profit</p>
                    <h4 class="mb-0 font-weight-bold">$175.00 M</h4>
                  </div>
                  <div class="border-right pr-4 mb-3 mb-xl-0">
                    <p class="text-muted">Purchases</p>
                    <h4 class="mb-0 font-weight-bold">4006</h4>
                  </div>
                  <div class="pr-3 mb-3 mb-xl-0">
                    <p class="text-muted">Downloads</p>
                    <h4 class="mb-0 font-weight-bold">4006</h4>
                  </div>
                  <div class="mb-3 mb-xl-0">
                    <button class="btn btn-warning rounded-0 text-white">Downloads</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title text-md-center text-xl-left text-primary">NOMBRE DE CLIENTS</p>
                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-primary">{{ $nb_client }}</h3>
                  <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>  
                <p class="mb-0 mt-2 text-warning">2.00% <span class="text-body ml-1"><small>(30 days)</small></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title text-md-center text-xl-left text-secondary">NOMBRE DE COMMANDES</p>
                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-warning">{{ $nb_commande }}</h3>
                  <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>  
                <p class="mb-0 mt-2 text-danger">0.22% <span class="text-body ml-1"><small>(30 days)</small></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title text-md-center text-xl-left text-success">COMMANDES TRAITEES</p>
                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{ $nb_com_traite }}</h3>
                  <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>  
                <p class="mb-0 mt-2 text-success">10.00%<span class="text-body ml-1"><small>(30 days)</small></span></p>
              </div>
            </div>
          </div>
          <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <p class="card-title text-md-center text-xl-left text-danger">COMMANDES NON TRAITEES</p>
                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                  <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-danger">{{ $nb_com_non_traite }}</h3>
                  <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                </div>  
                <p class="mb-0 mt-2 text-success">22.00%<span class="text-body ml-1"><small>(30 days)</small></span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="card bg-primary border-0 position-relative">
              <div class="card-body">
                <p class="card-title text-white">Performance Overview</p>
                <div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="row">
                        <div class="col-md-4 item">
                          <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                            <div class="icon icon-a text-white mr-3">
                              <i class="ti-cup icon-lg ml-3"></i>
                            </div>
                            <div class="content text-white">
                              <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                <h3 class="font-weight-light mr-2 mb-1">Revenue</h3>
                                <h3 class="mb-0">34040</h3>
                              </div>
                              <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                <h5 class="mb-0">+34040</h5>
                                <div class="d-flex align-items-center">
                                  <i class="ti-angle-down mr-2"></i>
                                  <h5 class="mb-0">0.036%</h5>
                                </div>  
                              </div>
                              <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 item">
                          <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                            <div class="icon icon-b text-white mr-3">
                              <i class="ti-bar-chart icon-lg ml-3"></i>
                            </div>
                            <div class="content text-white">
                              <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                <h3 class="font-weight-light mr-2 mb-1">VENTES</h3>
                                <h3 class="mb-0">$9672471</h3>
                              </div>
                              <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                <h5 class="mb-0">-7.34567</h5>
                                <div class="d-flex align-items-center">
                                  <i class="ti-angle-down mr-2"></i>
                                  <h5 class="mb-0">2.036%</h5>
                                </div>  
                              </div>
                              <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 item">
                          <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                            <div class="icon icon-c text-white mr-3">
                              <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                            </div>
                            <div class="content text-white">
                              <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                <h3 class="font-weight-light mr-2 mb-1">Purchases</h3>
                                <h3 class="mb-0">6358</h3>
                              </div>
                              <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                <h5 class="mb-0">+9082</h5>
                                <div class="d-flex align-items-center">
                                  <i class="ti-angle-down mr-2"></i>
                                  <h5 class="mb-0">35.54%</h5>
                                </div>  
                              </div>
                              <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-md-4 item">
                          <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                            <div class="icon icon-a text-white mr-3">
                              <i class="ti-cup icon-lg ml-3"></i>
                            </div>
                            <div class="content text-white">
                              <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                <h3 class="font-weight-light mr-2 mb-1">ClIENTS</h3>
                                <h3 class="mb-0">+{{ $nb_client }}</h3>
                              </div>
                              <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                <h5 class="mb-0"></h5>
                                <div class="d-flex align-items-center">
                                  <i class="ti-angle-down mr-2"></i>
                                  <h5 class="mb-0">0.048%</h5>
                                </div>  
                              </div>
                              <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 item">
                          <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                            <div class="icon icon-b text-white mr-3">
                              <i class="ti-bar-chart icon-lg ml-3"></i>
                            </div>
                            <div class="content text-white">
                              <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                <h3 class="font-weight-light mr-2 mb-1">Order</h3>
                                <h3 class="mb-0">$8597420</h3>
                              </div>
                              <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                <h5 class="mb-0">-2.49650</h5>
                                <div class="d-flex align-items-center">
                                  <i class="ti-angle-down mr-2"></i>
                                  <h5 class="mb-0">5.962%</h5>
                                </div>  
                              </div>
                              <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 item">
                          <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                            <div class="icon icon-c text-white mr-3">
                              <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                            </div>
                            <div class="content text-white">
                              <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                <h3 class="font-weight-light mr-2 mb-1">Bookings</h3>
                                <h3 class="mb-0">8064</h3>
                              </div>
                              <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                <h5 class="mb-0">+2079</h5>
                                <div class="d-flex align-items-center">
                                  <i class="ti-angle-down mr-2"></i>
                                  <h5 class="mb-0">78.02%</h5>
                                </div>  
                              </div>
                              <p class="text-white font-weight-light pr-lg-2 pr-xl-5">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#performanceOverview" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#performanceOverview" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 grid-margin">
            <h2>Exemple de graphiques avec laravel </h2>
          <div class="graphique">
            <div class="graphligne">
            <div class ="graphe1">
              <canvas id="myChart"></canvas>
            </div>
            <div class ="graphe2">
              <canvas id="myBarChart"></canvas>
            </div>
          </div>
          <div class="graphligne">
            <div class="linechart">
              <canvas id="linechart"></canvas>
            </div>
          </div>
          </div>
          </div>
        </div>
@endsection

@section('scripts')
<script>
  var _ydata = JSON.parse('{!! json_encode($hours) !!}');
  var _xdata = JSON.parse('{!! json_encode($hourCount) !!}');
  // 1. Declaration de la Liste de labels qui va constituer l'axe des abscisses
  const labels = [
            'Janvier',
            'Février',
            'Mars',
            'Avril',
            'Mai',
            'Juin',
            ];
          //2. Declaration des données
          const data = {
            labels: labels,
            datasets: [{
              label:'Mon graphique Lineaire',
              borderColor: 'rgb(75, 192, 192)',
              // Axe des ordonnées
              data: [0,10,5,2,20,30,45],
            }]
          };

          // 3. Configuration
          const config = {
            type:'line',
            data: data,
            options: {
              animations: {
                tension: {
                  duration: 1000,
                  easing: 'linear',
                  from: 1,
                  to: 0,
                loop: true
                }
              },
              scales: {
                y: { // defining min and max so hiding the dataset does not change scale range
                  min: 0,
                  max: 100
                }
              }
            }
          };
          
          // 4. Mise en place du graphique avec le canvas
          var ctx = document.getElementById('linechart');
          var mongraphique = new Chart(ctx,
            config,    
          );
</script>
<script src="/backend/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{asset('frontend/js/graphe.js')}}"></script>
@endsection