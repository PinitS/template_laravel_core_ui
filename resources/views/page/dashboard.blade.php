    @extends('master')

    @section('pagetitle' , 'dashboard')

    @section('content')

        <div class="row mt-1">
            <button class="btn btn-block btn-danger" type="button">ภาพรวมของร้าน</button>
        </div>

        <div class="row mt-1">
            <button class="btn btn-block btn-danger" type="button">12 มิย 2020</button>
        </div>

        <div class="row mt-3">
            <div class="col-md-5">

                <div class="card">
                  <div class="card-body">
                    <div class = "text-center">รายงานการขายรายวัน</div>
                    <div class = "text-center mb-3">12 มิย 2020</div>
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-1"></canvas>
                    </div>
                  </div>
                </div>

            </div>

            <div class="col-md-7">
                
                <div class="card">


                  <div class="card-header">bar Chart
                    <div class="card-header-actions">
                      <div class="btn-group" role="group" aria-label="Basic example">
                          <button class="btn btn-info" type="button">รายวัน</button>
                          <button class="btn btn-info" type="button">รายเดือน</button>
                          <button class="btn btn-info" type="button">รายปี</button>
                      </div>
                    </div>
                  </div>

                  <div class="card-body">
                    <div class="c-chart-wrapper">
                      <canvas id="canvas-2"></canvas>
                    </div>
                  </div>
                  

                </div>

            </div>
        </div>


    @endsection