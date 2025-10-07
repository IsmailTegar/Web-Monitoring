@extends('layouts.master')

@section('content')
<div class="main-panel">
   <div class="content">
    <div class="container-content">
      <main class="frame">
        <header class="div">
          <h1 class="text-wrapper">Dashboard</h1>
          <p class="text-wrapper-2">Mikrotik Name : {{ $identitas }}</p>
          <p class="text-wrapper-2">IP Address : {{ $ip }}</p>
        </header>
        <div class="page-inner mt--5">
          <div class="row">
              <div class="col-sm-6 col-md-3">
                  <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                      <div class="card-body">
                          <div class="row align-items-center">
                              <div class="col-icon">
                                  <div class="icon-big text-center icon-warning bubble-shadow-small">
                                      <i class="fas fa-info"></i>
                                  </div>
                              </div>
                              <div class="col col-stats ml-3 ml-sm-0">
                                  <div class="numbers">
                                      <p class="card-category">Info</p>
                                      <b> Model :</b> {{ $model }} / ({{ $boardname }})<br>
                                      <b> OS : {{ $version }}</b>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <a href="#" style="text-decoration:none" >
                      <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col-icon">
                                      <div class="icon-big text-center icon-muted bubble-shadow-small">
                                          <i class="fas fa-users"></i>
                                      </div>
                                  </div>
                                  <div class="col col-stats ml-3 ml-sm-0">
                                      <div class="numbers">
                                          <p class="card-category">PPPoE Active</p>
                                          <h4 class="card-title">0</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-sm-6 col-md-3">
                  <a href="" style="text-decoration:none" >
                      <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col-icon">
                                      <div class="icon-big text-center icon-muted bubble-shadow-small">
                                          <i class="fas fa-users"></i>
                                      </div>
                                  </div>
                                  <div class="col col-stats ml-3 ml-sm-0">
                                      <div class="numbers">
                                          <p class="card-category">Hotspot Active</p>
                                          <h4 class="card-title">{{ $online_users }}</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                      <div class="card-body ">
                          <div class="row align-items-center">
                              <div class="col-icon">
                                  <div class="icon-big text-center icon-primary bubble-shadow-small">
                                      <i class="fas fa-th-list"></i>
                                  </div>
                              </div>
                              <div class="col col-stats ml-3 ml-sm-0">
                                  <div class="numbers">
                                      <p class="card-category">Web Terblokir</p>
                                      <h3 class="card-title">{{ $blocked_web }}</h3>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                      <div class="card-body">
                          <div class="row align-items-center">
                              <div class="col-icon">
                                  <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                      <i class="fas fa-clock"></i>

                                  </div>
                              </div>
                              <div class="col col-stats ml-3 ml-sm-0">
                                  <div class="numbers">
                                      <p class="card-category">Uptime</p>
                                      <h4 class="card-title" id="uptime"></h4>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-3">
                  <a href="#" style="text-decoration:none" >
                      <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col-icon">
                                      <div class="icon-big text-center icon-info bubble-shadow-small">
                                          <i class="fas fa-home"></i>
                                      </div>
                                  </div>
                                  <div class="col col-stats ml-3 ml-sm-0">
                                      <div class="numbers">
                                          <p class="card-category">Total PPPoE Secret</p>
                                          <h4 class="card-title">0</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-sm-6 col-md-3">
                  <a href="" style="text-decoration:none" >
                      <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                          <div class="card-body">
                              <div class="row align-items-center">
                                  <div class="col-icon">
                                      <div class="icon-big text-center icon-info bubble-shadow-small">
                                          <i class="fas fa-wifi"></i>
                                      </div>
                                  </div>
                                  <div class="col col-stats ml-3 ml-sm-0">
                                      <div class="numbers">
                                          <p class="card-category">Total User Hotspot</p>
                                          <h4 class="card-title">{{ $total_users }}</h4>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </a>
              </div>
              <div class="col-sm-6 col-md-3">
                  <div class="card card-stats card-round hover-card" style="border-bottom-color: blue; border-bottom-width: 3px">
                      <div class="card-body">
                          <div class="row align-items-center">
                              <div class="col-icon">
                                  <div class="icon-big text-center icon-danger bubble-shadow-small">
                                      <i class="fas fa-database"></i>
                                  </div>
                              </div>
                              <div class="col col-stats ml-3 ml-sm-0">
                                  <div class="numbers">
                                      <p class="card-category">Free Memory/Hdd</p>
                                      <h4 class="card-title" style="font-size: 75%">({{ $freememory }})/({{ $freehdd }})</h4>

                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
              <div class="col-sm-12 col-md-8">
                  <div class="card">
                      <div class="card-header">
                          <div class="card-head-row">
                              <div class="card-title">List Traffic Naik</div>
                          </div>
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <div id="load"></div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="col-sm-8 col-md-4">
                  <div class="card card-stats" style="border-top-color: blue; border-bottom-color: blue; border-top-width: 3px; border-bottom-width: 3px">
                      <div class="form-group">
                          <label for="defaultSelect">Select Interface</label>
                          <select class="form-control form-control" name="interface" id="interface">
                              @foreach ($interface as $data)
                                  <option value="{{ $data['name'] }}">{{ $data['name'] }}</option>
                              @endforeach
                          </select>
                      </div>
                      <div class="form-group" id="traffic"></div>
                  </div>
                  <div class="card card-stats" style="border-top-color: blue; border-bottom-color: blue; border-top-width: 3px; border-bottom-width: 3px">
                    <div class="card-body">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <div id="circles-1"></div>
                            <h6 class="fw-bold mt-3 mb-0">CPU</h6>
                        </div>
                    </div>
                  </div>
              </div>
              </div>
          </div>
        </div>
      </main>
    </div>
   </div>
</div>

<script type="text/javascript">

    setInterval('cpu();',1000);
    function cpu() {
        $('#cpu').load('{{ route('dashboard.cpu') }}')
    }
    setInterval('uptime();',1000);
    function uptime() {
        $('#uptime').load('{{ route('dashboard.uptime') }}')
    }
    setInterval('traffic();',1000);
    function traffic() {
        var traffic = $('#interface').val() ;
        var url = '{{ route("dashboard.traffic", ":traffic") }}';
        // console.log(traffic);
        $('#traffic').load(url.replace(':traffic', traffic));
    }
</script>
<script>

    function cpu() {
        $.get('{{ route('dashboard.cpu') }}', function(data) {
            let cpuVal = parseInt(data) || 0;
            let warna;
            if(cpuVal < 40){
                warna = '#28a745';
            }else if(cpuVal < 75){
                warna = '#ffc107';
            }else{
                warna = '#dc3545';
            }
            // Hapus lingkaran lama jika ada
            document.getElementById('circles-1').innerHTML = '';
            Circles.create({
                id: 'circles-1',
                radius: 45,
                value: cpuVal,
                maxValue: 100,
                width: 7,
                text: cpuVal + '%',
                colors: ['#f1f1f1', warna],
                duration: 400,
                wrpClass: 'circles-wrp',
                textClass: 'circles-text',
                styleWrapper: true,
                styleText: true
            });
        });
    }
</script>

@endsection