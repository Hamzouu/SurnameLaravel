@extends('layouts.app')
   
@section('content') 
<tr>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Genre</th>
    <th>Description</th>
  </tr>

@foreach($teacherUsernames as $teacherUsername)
    <table>
        
        <tr>
          <td><a href ="{{ route('teacher.id', ['id' => $teacherUsername -> id]) }}">{{$teacherUsername ->teaFirstname}}</a></td>
          <td>{{$teacherUsername ->teaName}}</td>
          <td>{{$teacherUsername ->teaNickName}}</td>
          <td>{{$teacherUsername ->teaGender}}</td>
          <td>{{$teacherUsername ->description}}</td>
        </tr>
      </table>
    @endforeach

@endsection
