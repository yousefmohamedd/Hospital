


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <style type="text/css">

        label
        {

            display: inline-block;

            width: 200px;

        }

    </style>



    <base href="/public">
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    
      @include('admin.sidebar')

      <!-- partial -->


      @include('admin.navbar')



      <div class="container-fluid page-body-wrapper">


           <div class="container" align="center" style="padding:100px;">


           
        <div class="container" align="center" style="padding-top: 100px;">


                    @if(session()->has('message'))

                    <div class="alert alert-success">
                        
                        <button type="button" class="close" data-dismiss="alert">
                            x
                        </button>

                        {{session()->get('message')}}

                    </div>

                    @endif

               

              <form action="{{url('editdoctor' , $data->id)}}" method="post" enctype="multipart/form-data">

              @csrf

                    <div style="padding: 15px;">

                        <label for="">Doctor Name</label>
                        <input style="color: black;" type="text" name="name" value="{{$data->name}}">

                    </div>

                    <div style="padding: 15px;">

                        <label for="">Phone</label>
                        <input style="color: black;" type="number" name="phone" value="{{$data->phone}}">

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Specialty</label>
                        <input style="color: black;" type="text" name="specialty" value="{{$data->specialty}}">

                    </div>

                    <div style="padding: 15px;">

                        <label for="">Room</label>
                        <input style="color: black;" type="text" name="room" value="{{$data->room}}">

                    </div>


                    <div style="padding: 15px;">

                        <label for="">Old Image</label>
                        <img height="150px" width="150px" src="doctorimage/{{$data->image}}" alt="" srcset="">

                    </div>

                    <div style="padding: 15px;">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding: 15px;">
                        <input class="btn btn-primary" type="submit" >
                    </div>


               </form>

           </div>
     



      </div>



    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>