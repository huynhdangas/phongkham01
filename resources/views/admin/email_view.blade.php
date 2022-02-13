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
                    <h4 class="card-title">Gửi mail</h4>

                    @if(session()->has('message'))      
                        <div class="alert alert-success">
                        <strong>Success!</strong> {{session()->get('message')}}
                        </div>                        
                    @endif

                    <form class="forms-sample" action="{{url('send_email', $data->id)}}" method="post">
                        @csrf
                      <div class="form-group">
                        <label>Greeting</label>
                        <input type="text" name="greeting" class="form-control" id="exampleInputUsername1" required="" >
                      </div>
                      <div class="form-group">
                        <label>Body</label>
                        <input type="text" name="body" class="form-control" id="exampleInputEmail1" required="" >
                      </div>
                      <div class="form-group">
                        <label>Action text</label>
                        <input type="text" name="actiontext" class="form-control" id="exampleInputEmail1" required="" >
                      </div>
                      <div class="form-group">
                        <label>Action URL</label>
                        <input type="text" name="actionurl" class="form-control" id="exampleInputEmail1" required="" >
                      </div>
                      <div class="form-group">
                        <label>End Part</label>
                        <input type="text" name="endpart" class="form-control" id="exampleInputEmail1" required="" >
                      </div>
                      
                      
                      
                      
                      <button type="submit" class="btn btn-primary me-2">Gửi mail</button>
                      
                    </form>
                  </div>
                </div>
              <!-- </div> -->

            

        </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    
    @include('admin.script')

    
    
  </body>
</html>