<!DOCTYPE html>
<html>
<body>



<form action="{{url('submit')}}" method="POST">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br><br>
  <label for="num">Employee_id:</label><br>
  <input type="text" id="emp" name="emp"><br><br>
  <label for="num">Mobile:</label><br>
  <input type="number" id="num" name="num"><br><br>
  <input type="submit" value="Submit">
</form> 
<table>
    <tr>
        <th>ID</th>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>Employee_id</th>
        <th>Mobile</th>
        {{-- <th>Action</th> --}}
    </tr>
    {{-- @foreach($student as $student)

<tr>
  
    <td>{{$student->id}}</td>
    <td>{{$student->firstname}}</td>
    <td>{{$student->lastname}}</td>
    <td>{{$student->number}}</td>
    <td>{{$student->email}}</td>
   
</tr>
@endforeach --}}

</table>
</body>
</html>
