<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
  </head>
  <body>
    
<div class="container-scroller">
       @include("admin.navbar")

    <div class = "container"> 
        <h3>Customer bookings</h3>

      <form action="{{url('/search')}}" method="get">
          <input type="text" name="search" style="color:blue;">
           <input type="submit"valur="Search" class="btn btn-success">
        </form>

       <table>
           <tr align ="center" style="background-color:black;">
               <td style = "padding: 50px;">Name</td>
               <td style = "padding: 50px;">Phone</td>
               <td style = "padding: 50px;">Address</td>
               <td style = "padding: 50px;">Room Name</td>
               <td style = "padding: 50px;">Price</td>
               <td style = "padding: 50px;">Quantity</td>
               <td style = "padding: 50px;">Total Price</td>
           </tr>
                   
           @foreach($data as $data)
           <tr align ="center" style="background-color:#dc2f2f;">
                       <td>{{$data->name}}</td>
                       <td>{{$data->phone}}</td>
                       <td>{{$data->address}}</td>
                       <td>{{$data->fname}}</td>
                       <td>${{$data->price}}</td>
                       <td>{{$data->quantity}}</td>
                       <td>${{$data->price * $data->quantity}}</td>

           </tr>

           @endforeach



       </table>

    </div>

</div>
       @include("admin.adminscript")

  </body>
</html>