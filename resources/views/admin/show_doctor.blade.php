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
                            <th>Tên bác sĩ</th>
                            <th>SĐT</th>
                            <th>Chuyên khoa</th>
                            <th>Room No</th>
                            <th>Hình đại diện</th>
                            <th>Delete</th>
                            <th>Update</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data_doctor as $data_doctors)
                          <tr>
                            <td>{{$data_doctors->name}}</td>
                            <td>{{$data_doctors->phone}}</td>
                            <td>{{$data_doctors->speciality}}</td>
                            <td>{{$data_doctors->room}}</td>
                            <td><img src="doctorimage/{{$data_doctors->image}}" style="width:50px; height:50px;"></td>
                            <td><a onclick="return confirm('Are you sure you want to delete?')" href="{{url('delete_doctor', $data_doctors->id)}}"><label class="badge badge-danger" style="cursor: pointer;">Delete</label></a></td>
                            <td><a href="{{url('update_doctor', $data_doctors->id)}}"><label class="badge badge-info" style="cursor: pointer;">Update</label></a></td>
                            
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