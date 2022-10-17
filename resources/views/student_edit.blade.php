@extends('layout')
@section('content')
<form method="post" action="{{ route('students.update', $student->id) }}">
    <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="fullname">Fullname</label>
        <input type="text" class="form-control" name="fullname" value="{{ $student->fullname }}"/>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" value="{{ $student->address }}"/>
    </div>
    <div class="form-group">
        <label for="birthday">birthday</label>
        <input type="datetime" class="form-control" name="birthday" value="{{ $student->birthday }}"/>
    </div>
    <button type="submit" class="btn btn-block btn-danger">Update Student</button>
</form>