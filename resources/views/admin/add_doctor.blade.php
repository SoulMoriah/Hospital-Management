
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
      label{
        display: inline;
        width: 200px;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->

        <div class="container" align="center" style="padding-top: 5%" style="padding: 5%" >
        <div class="container-fluid page-body-wrapper">
          @if (session()->has('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
              </div>
          @endif
        
          <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
             @csrf
            <div style="padding: 15px">
              <label for="">Doctor Name</label>
              <input type="text" style="color: black" name="name" placeholder="Doctor Name" required="">
            </div>
            <div style="padding: 15px">
              <label for="">Phone number</label>
              <input type="number" style="color: black" name="number" placeholder="Doctor phone number" required="">
            </div>
            <div style="padding: 15px">
              <label for="">Doctor Speciality</label>
              <select name="speciality" style="color: black">
                <option>--Select--</option>
                <option value="skin">Skin</option>
                <option value="heart">Heart</option>
                <option value="head">Head</option>
                <option value="dentist">Dentist</option>
                <option value="eye">Eye</option>
              </select>
            </div>
            <div style="padding: 15px">
              <label for="">Room Number</label>
              <input type="text" style="color: black" name="room" placeholder="Room Number" required="">
            </div>
            <div style="padding: 15px">
              <label for="">Doctor Image</label>
              <input type="file" name="file" required="">
            </div>
            <div style="padding: 15px">
              <input type="submit" class="btn btn-success">
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
