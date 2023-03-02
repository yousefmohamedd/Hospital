


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    
    @include('admin.css')

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
    
      @include('admin.sidebar')

      <!-- partial -->


      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper">


      <div>

        <table>

            <tr style="background-color: black;">

                <th style="padding: 15px;">Customer   Name</th>
                <th style="padding: 15px;">Email</th>
                <th style="padding: 15px;">Phone</th>
                <th style="padding: 15px;">Doctor Name</th>
                <th style="padding: 15px;">Date</th>
                <th style="padding: 15px;">Message</th>
                <th style="padding: 15px;">Status</th>
                <th style="padding: 15px;">Approved</th>
                <th style="padding: 15px;">Canceled</th>
                <th style="padding: 15px;">Deleted</th>

            </tr>

            @foreach($data as $appoint)

            <tr align="center" style="background-color: skyblue;">
                <td style="color: black;">{{$appoint->name}}</td>
                <td style="color: black;">{{$appoint->email}}</td>
                <td style="color: black;">{{$appoint->phone}}</td>
                <td style="color: black;">{{$appoint->doctor}}</td>
                <td style="color: black;">{{$appoint->date}}</td>
                <td style="color: black;">{{$appoint->massage}}</td>
                <td style="color: black;">{{$appoint->status}}</td>
                <td style="color: black;"><a class="btn btn-primary" href="{{url('approved' , $appoint->id)}}">Approved</a></td>
                <td style="color: black;"><a class="btn btn-success" href="{{url('canceled' , $appoint->id)}}">Canceled</a></td>
                <td style="color: black;"><a class="btn btn-danger" href="{{url('deleted' , $appoint->id)}}">Deleted</a></td>
                
            </tr>

            @endforeach

        </table>
      </div>

      </div>
      <!-- /partial -->

     


    
    <!-- container-scroller -->
    <!-- plugins:js -->
    
    @include('admin.script')

    <!-- End custom js for this page -->
  </body>
</html>