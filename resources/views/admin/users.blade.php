<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
</head>
<body>
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
    
     <div style="position: relative; top: 60px; right; -160px">
        <table bgcolor= "grey" border="10px"> 

         <tr>
            <th style="padding: 20px">Name</th>
            <th style="padding: 30px">Email</th>
            <th style="padding: 30px">Action</th>
         </tr>


           @foreach($data as $data)  
         <tr allign= "center">
             <td>{{$data->name}}</td>
             <td>{{$data->email}}</td>

             @if($data->usertype=="0")
             <td style="padding: 8px"><a href="{{url('/deleteuser',$data->id)}}">Delete</a></td>
             @else
             <td style="padding: 8px"><a>Not Allowed</a></td>
             @endif
         </tr>

         @endforeach
         </table>



     </div>
   
  </div>
       @include("admin.adminscript");

  </body>
</html> 

</body>
</html>