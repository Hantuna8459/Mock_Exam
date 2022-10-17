@extends('layout')
@section('content')
<table class="table">
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->fullname}}</td>
            <td>{{$students->address}}</td>
            <td>{{$students->dateofbirth}}</td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>