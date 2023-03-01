<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<h1 class="text-center">Room Table</h1>
<br>
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">RoomID</th>
<th scope="col">roomDescription</th>
<th scope="col">roomCapacity</th>
<th scope="col">dateFrom</th>
<th scope="col">dateTo</th>

</tr>

<tbody>
<tr>
@foreach ($rooms as $room)
<tr>
<td>{{$room->roomId}}</td>
<td>{{$room->lastName}}</td>
<td>{{$room->firstName}}</td>
<td>{{$room->contactNumber}}</td>
<td>{{$room->address}}</td>


<tr>
@endforeach
</thead>
</tbody>
</table>