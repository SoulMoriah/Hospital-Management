
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
                <form action="{{url('sendemail',$data->id)}}" method="POST">
                    @csrf
                    <div style="padding: 15px">
                        <label for="name">Greeting</label>
                        <input type="text" style="color: black" name="greeting" >
                    </div>
                    <div style="padding: 15px">
                        <label for="phone">Body</label>
                        <input type="text" style="color: black"  name="body">
                    </div>
                    <div style="padding: 15px">
                        <label for="room">Action Text</label>
                        <input type="text" style="color: black"  name="actiontext">
                    </div>
                    <div style="padding: 15px">
                        <label for="room">Action Url</label>
                        <input type="text" style="color: black"  name="actionurl">
                    </div>
                    <div style="padding: 15px">
                        <label for="room">Mail End Part</label>
                        <input type="text" style="color: black"  name="endpart">
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
