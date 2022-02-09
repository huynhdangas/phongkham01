<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .form-group input,
        .form-group select {
            background-color: #2A3038;
            border-radius:2px;
            font-size: 0.875rem;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      
        @include('admin.navbar')
        <!-- partial -->
       
        <div class="main-panel">
            <div class="content-wrapper">

            
                <div class="card" style="margin:auto; width: 100%">
                  <div class="card-body">
                    <h4 class="card-title" style="font-size: 2.5em; font-width:500">Lịch hẹn</h4>
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Tên bệnh nhân</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Tên bác sĩ</th>
                            <th>Ngày khám</th>
                            <th>Triệu chứng</th>
                            <th>Status</th>
                            <th>Chấp nhận</th>
                            <th>Huỷ</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data_appoint as $data_appoints)
                          <tr>
                            <td>{{$data_appoints->name}}</td>
                            <td>{{$data_appoints->email}}</td>
                            <td>{{$data_appoints->phone}}</td>
                            <td>{{$data_appoints->doctor}}</td>
                            <td>{{$data_appoints->date}}</td>
                            <td>{{$data_appoints->message}}</td>
                            <td><label class="badge badge-warning">{{$data_appoints->status}}</label></td>
                            <td><a class="badge badge-success" href="{{url('approved', $data_appoints->id)}}">Chấp nhận</a></td>
                            <td><a class="badge badge-danger" href="{{url('canceled', $data_appoints->id)}}">Huỷ</a></td>
                          </tr>
                        @endforeach  
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            

        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    @include('admin.script')

  </body>
</html>