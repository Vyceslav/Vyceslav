@extends('layouts.mine')

@section('title', 'Главная')

@section('content')
    <div class="container">

            <option value="{{ $teacher->id }}">{{ $teacher->firstname }}</option>
            <option value="{{ $teacher->id }}">{{ $teacher->surname }}</option>

    </div>
@endsection
