@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('All Books') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
        <div class="panel filterable">
            <table class="table">
                <thead>
                    <tr class="filters">
                        <th>
                        <input type="text" class="form-control" placeholder="Book Code">
                        </th>
                        <th>
                        <input type="text" class="form-control" placeholder="Book Name">
                        </th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($allbooks as $books)
                    <tr>
                        <td>{{$books->code}}</td>
                        <td>{{$books->name}}</td>
                        <td>
                        <a href="/details/{{$books->id}}" class="btn btn-primary"><i class="fa fa-eye"></i>Open</a>
                        <a href="" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
