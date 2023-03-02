


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
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    
      @include('admin.sidebar')

      <!-- partial -->


      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">



     


        <div class="container" align="center" style="padding-top: 100px;">


                    @if(session()->has('message'))

                    <div class="alert alert-success">
                        
                        <button type="button" class="close" data-dismiss="alert">
                            x
                        </button>

                        {{session()->get('message')}}

                    </div>

                    @endif

            <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">

            @csrf

            <div style="padding: 15px;">

            <label for="">Doctor Name </label>
            <input type="text" name="name" placeholder="Write The Name" style="color: black;" required="">

            </div>


            <div style="padding: 15px;">

            <label for="">phone</label>
            <input type="number" name="number" placeholder="Write The Number" style="color: black;" required="">

            </div>


            <div style="padding: 15px;">

            <label for="">Specialty</label> 
            
            <select name="specialty" id="" style="color: black; width:200px;" required="">
                <option value="">--Select--</option>
                <option value="skin">Skin</option>
                <option value="heart">Heart</option>
                <option value="eye">Eye</option>
                <option value="nose">Nose</option>

            </select>

            </div>

            <div style="padding: 15px;">

                <label for="">Room No</label>
                 <input type="text" name="room" placeholder="Write The Room Number" style="color: black;" required="">

            </div>


            <div style="padding: 15px;">

                <label for="">Doctor Image</label>
                <input type="file" name="file" required="">

            </div>

            <div style="padding-top: 15px;">

                <input type="submit" class="btn btn-success" required="">

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