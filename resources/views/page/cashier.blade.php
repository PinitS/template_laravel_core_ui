    @extends('master')

    @section('pagetitle' , 'dashboard')

    @section('content')


        <div class="row">

          <div class="col-md-8">
            <div class="card card-accent-info">
                    
              <div class="card-body">
                <div class="progress-group-header align-items-end">
                  <svg class="c-icon progress-group-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-screen-desktop"></use>
                  </svg>
                  <div class="font-weight-bold">รายการสั่งอาหารและเครื่องดื่ม</div>
                  <button class="btn btn-info mfs-auto font-weight-bold" type="button">+ เปิดบิลใหม่</button>
                </div>
                <table class="table table-responsive-sm">
                  <thead class ="font-weight-bold">
                    <tr>
                      <th>วัน/เวลา</th>
                      <th>รหัสการสั่ง</th>
                      <th>คิวที่</th>
                      <th>สถานะ</th>
                      <th></th>
                      <th></th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                  </tbody>
                </table>
            
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card-accent-info">
                <div class="card-header text-center">ไม่มีรายการ</div>
                
            </div>

          </div>

        </div>


    @endsection