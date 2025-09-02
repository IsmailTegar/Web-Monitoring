@extends('layouts.master')

@section('content')
    <div class="main-panel">
   <div class="content">
    <div class="container-content">
    <main class="frame">
      <header class="div">
        <h1 class="text-wrapper">Dashboard</h1>
        <p class="text-wrapper-2">Dashboard</p>
      </header>
      <div class="div-2">
        <section class="div-3">
          <div class="div-wrapper">
            <h2 class="text-wrapper-3">Monitoring</h2>
          </div>
          <div class="div-4" role="group" aria-label="Monitoring statistics">
            <article class="card-dashboard">
              <div class="div-wrapper">
                <h3 class="text-wrapper-4">Online Users</h3>
              </div>
              <div class="div-5">
                <div class="div-wrapper-2">
                  <span class="text-wrapper-5" aria-label="20 online users">20</span>
                </div>
                <div class="ellipse-wrapper">
                  <div class="ellipse" role="img" aria-label="Online status indicator"></div>
                </div>
              </div>
            </article>
            <article class="card-dashboard-2">
              <div class="div-wrapper">
                <h3 class="text-wrapper-4">Total User</h3>
              </div>
              <div class="div-5">
                <div class="div-wrapper-2">
                  <span class="text-wrapper-5" aria-label="100 total users">100</span>
                </div>
              </div>
            </article>
            <article class="card-dashboard-2">
              <div class="div-wrapper">
                <h3 class="text-wrapper-4">Blocked IP</h3>
              </div>
              <div class="div-5">
                <div class="div-wrapper-2">
                  <span class="text-wrapper-5" aria-label="8 blocked IP addresses">8</span>
                </div>
              </div>
            </article>
            <article class="card-dashboard-3">
              <div class="div-wrapper">
                <h3 class="text-wrapper-4">Blocked Web</h3>
              </div>
              <div class="div-5">
                <div class="div-wrapper-2">
                  <span class="text-wrapper-5" aria-label="10 blocked websites">10</span>
                </div>
              </div>
            </article>
          </div>
        </section>
            <div class="card-title">Internet Usage</div>
            <div class="card-body">
                <div class="chart-container" style="min-width: 1070px">
                    <canvas id="statisticsChart"></canvas>
                </div>
                <div id="myChartLegend"></div>
            </div>
        </section>
      </div>
    </main>
    </div>
   </div>
</div>
@endsection