<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">
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

            <!-- <div class="col-md-6 grid-margin stretch-card"> -->
                <div class="card" style="margin: auto; width: 50%;">
                  <div class="card-body">
                    <h4 class="card-title">Sửa bác sĩ</h4>

                    @if(session()->has('message'))      
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{session()->get('message')}}
                        </div>                        
                    @endif

                    <form class="forms-sample" action="{{url('edit_doctor', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label>Tên bác sĩ</label>
                        <input type="text" name="name" value="{{$data->name}}" class="form-control" id="exampleInputUsername1" required="" placeholder="Tên bác sĩ">
                      </div>
                      <div class="form-group">
                        <label>Số điện thoại</label>
                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputEmail1" required="" placeholder="Số điện thoại">
                      </div>
                      <div class="form-group">
                        <label>Chuyên môn</label>
                        <input type="text" name="speciality" value="{{$data->speciality}}" class="form-control" id="exampleInputEmail1" required="" placeholder="Chuyên khoa">

                      </div>
                      <div class="form-group">
                        <label>Room No</label>
                        <input type="text" name="room" class="form-control" id="exampleInputEmail1" value="{{$data->room}}" required="" placeholder="Số Room">
                      </div>
                      
                      <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <img src="{{url('doctorimage/',$data->image)}}" alt="" style="width:100px; height: 100px;">
                        <br>
                        <input type="file" name="file" id="">                        
                      </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Sửa bác sĩ</button>
                      
                    </form>
                  </div>
                </div>
              <!-- </div> -->

            

        </div>
    
    @include('admin.script')
    </div>
  </body>
</html>