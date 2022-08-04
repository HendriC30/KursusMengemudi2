@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <h1 style= "text-align: center;">
    {{ __('Trainer') }}
    </h1>
</div>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card-body">
        <a class="btn btn-info" href="/Trainer/create">Tambah</a></div>
    </div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Trainer') }}</div>

                
<table class="table table-hover">
    <tr>
        <th>no</th>
        <th>name</th>
        <th>phone number</th>
        <th>address</th>
        <th>action</th>
    </tr>
    @foreach($Trainer as $i)
    <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->nama}}</td>
        <td>{{$i->no_ktp}}</td>
        <td>{{$i->no_sim}}</td>
        <td>{{$i->alamat}}</td>
        <td>
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-warning" href="/Trainer/{{$i->id}}/edit">edit</a>
            <form action="/Trainer/{{$i->id}}" method="POST">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="delete">
            </form>
        </div>
        </td>
    </tr>
    @endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection