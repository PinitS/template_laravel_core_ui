    @extends('master')

    @section('pagetitle' , 'dashboard')

    @section('content')


        <div class="row">
          <div class="col-md-3">
            <div class="card text-white bg-dark">
              <div class="card-body">
                <blockquote class="card-bodyquote">
                  <p>เริ่ม</p>
                  <h3>05 มิย 2020</h3>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-dark">
              <div class="card-body">
                <blockquote class="card-bodyquote">
                  <p>ถึง</p>
                  <h3>16 มิย 2020</h3>
                </blockquote>
              </div>
            </div>    
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-dark">
              <div class="card-body">
                <blockquote class="card-bodyquote">
                  <p>รายการ</p>
                  <h3>3</h3>
                </blockquote>
              </div>
            </div>           
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-dark">
              <div class="card-body">
                <blockquote class="card-bodyquote">
                  <p>ยอดรวม</p>
                  <h3>400</h3>
                </blockquote>
              </div>
            </div>            
          </div>
          
        </div>


        <div class="row">
          <div class="col-md-12">
            <div class="card card-accent-info">
                    
              <div class="card-body">

              <div class="row px-3">
                <div class="progress-group-header align-items-end">
                  <svg class="c-icon progress-group-icon">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-folder-open"></use>
                  </svg>
                  <div class="font-weight-bold">รายการสั่งอาหารและเครื่องดื่ม</div>

                  <button class="btn btn-dark mfs-auto" type="button">
                    <svg class="c-icon mr-2">
                      <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-print"></use>
                    </svg><span>พิมพ์</span>
                  </button>
                  
                </div>

              </div>
              <br>

              <div class="row px-3">

                  <div class="form-group row mfs-auto">
                    <label class="col-md-4 col-form-label" for="text-input">Search :</label>
                    <div class="col-md-8">
                      <input class="form-control" id="text-input" type="text" name="text-input">
                    </div>
                  </div>

              </div>
                

                <br>


      
                <table class="table table-responsive-sm table-striped">
                  <thead class ="font-weight-bold">
                    <tr>
                      <th>วัน/เวลา</th>
                      <th>รหัสการสั่ง</th>
                      <th>โต๊ะ</th>
                      <th>ส่วนลด</th>
                      <th>ยอดขาย</th>
                      <th>สถานะ</th>
                      <th></th>
                    </tr>
                  </thead>
      
                  <tbody>
                    <tr>
                      <td class = "pt-3">2012/01/01</td>
                      <td class = "pt-3">0212154848</td>
                      <td class = "text-danger pt-3">ไม่มีส่วนลด</td>
                      <td class = "text-success pt-3">23</td>
                      <td class = "pt-3">40</td>
                      <td class = "pt-3"><kbd>จัดเก็บ</kbd></td>

                      <td>
                        <button class="btn btn-sm btn-info" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                          </svg><span>รายละเอียด</span>
                        </button>

                        <button class="btn btn-sm btn-info" type="button">
                          <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-meh"></use>
                        </button>

                        <button class="btn btn-sm btn-warning" type="button">
                          <span>รับเงิน/ถอนเงิน</span>
                        </button>
                      </td>

                    </tr>

                    <tr>
                      <td class = "pt-3">2012/01/01</td>
                      <td class = "pt-3">0212154848</td>
                      <td class = "text-danger pt-3">ไม่มีส่วนลด</td>
                      <td class = "text-success pt-3">23</td>
                      <td class = "pt-3">40</td>
                      <td class = "pt-3"><kbd>จัดเก็บ</kbd></td>

                      <td>
                        <button class="btn btn-sm btn-info" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                          </svg><span>รายละเอียด</span>
                        </button>

                        <button class="btn btn-sm btn-info" type="button">
                          <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-meh"></use>
                        </button>

                        <button class="btn btn-sm btn-warning" type="button">
                          <span>รับเงิน/ถอนเงิน</span>
                        </button>
                      </td>

                    </tr>

                    <tr>
                      <td class = "pt-3">2012/01/01</td>
                      <td class = "pt-3">0212154848</td>
                      <td class = "text-danger pt-3">ไม่มีส่วนลด</td>
                      <td class = "text-success pt-3">23</td>
                      <td class = "pt-3">40</td>
                      <td class = "pt-3"><kbd>จัดเก็บ</kbd></td>

                      <td>
                        <button class="btn btn-sm btn-info" type="button">
                          <svg class="c-icon mr-2">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-magnifying-glass"></use>
                          </svg><span>รายละเอียด</span>
                        </button>

                        <button class="btn btn-sm btn-info" type="button">
                          <svg class="c-icon">
                          <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-meh"></use>
                        </button>

                        <button class="btn btn-sm btn-warning" type="button">
                          <span>รับเงิน/ถอนเงิน</span>
                        </button>
                      </td>

                    </tr>

                  </tbody>
                </table>
                  
              </div>
            </div>            
            
          </div>
        </div>


    @endsection