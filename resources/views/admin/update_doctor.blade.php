
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 150px;
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @if (session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
              </div>
          @endif
            <div class="container" align="center" style="padding: 100px">
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px">
                        <label for="name">Doctor name</label>
                        <input type="text" style="color: black" name="name" value="{{$data->name}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="phone">Phone Number</label>
                        <input type="number" style="color: black"  name="phone" value="{{$data->phone}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="speciality">Specialty</label>
                        <input type="text" style="color: black"  name="speciality" value="{{$data->speciality}}">
                    </div>
                    <div style="padding: 15px">
                        <label for="room">Room Number</label>
                        <input type="text" style="color: black"  name="room" value="{{$data->room}}">
                    </div>
                    <div style="padding: 15px">
                        <label>Old Image</label>
                        <img height="150" width="150" src="doctorimage/{{$data->image}}" alt="">
                    </div>
                    <div style="padding: 15px">
                        <label>Change the image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
        <!-- main-panel ends -->
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    @include('admin.script')
  </body>
</html>
