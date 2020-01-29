<html>
 <head>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 </head>
 <body>
<img style="width:200px" src="{{ asset('frontend/images/Najaf.png') }}" >
<hr>

<center>
<h1>Tareek Al-Oufuk</h1>

 <h1>Reservation ID : {{ $data->id }}</h1>
 </center>

 <h3>Accommodation : </h3>
 <div>
 {!! $data->Accommodation !!}
 	
 </div>

 <h3>Transfers : </h3>
 <div>
 {!! $data->Transfers !!}
 </div>


 <h3>Included Sightseeing: </h3>
 <div>
 {!! $data->Sightseeing !!}

 </div>


 <h3>Passenger information: </h3>
<br>
 <div>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">F.Name</th>
      <th scope="col">L.Name</th>
      <th scope="col">Gander</th>
      <th scope="col">Phone</th>
      <th scope="col">Nationality</th>
    </tr>
  </thead>


  <tbody>

@foreach($roomdata  as $value)



    <tr>
      <td>{{ $value['first_name'] }}</td>
      <td>{{ $value['last_name'] }}</td>
      <td>{{ $value['gender'] }}</td>
      <td>{{ $value['phone'] }}</td>
      <td>{{ $value['nationality'] }}</td>

    </tr>
 
@endforeach


  </tbody>
</table>
 
 </div>


 </body>
</html>