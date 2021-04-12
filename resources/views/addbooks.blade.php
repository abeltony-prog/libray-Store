@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Add New Books in the Libray') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="row col-md-12">
                <form clas="col-md-12" action="/Add" method="post">
                @csrf
                <div class="form-group col-md-6">
                <label for="">Book Name</label>
                <input class="form-control" type="text" name="name" placeholder="Book Name * " value="{{old('name')}}">
                <span style="color:red" >@error('name') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-6">
                <label for="">Book Code</label>
                <input class="form-control" type="text" name="code" placeholder="Book Code * " value="{{old('code')}}" >
                <span style="color:red" >@error('code') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-6">
                <label for="">How Many</label>
                <input class="form-control" type="number" name="number" placeholder="Books Number* " value="{{old('number')}}">
                <span style="color:red" >@error('number') {{$message}} @enderror</span>
                </div>
                <div class="form-group col-md-6">
                <input class="btn btn-success" type="submit" value="Add Books">
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
