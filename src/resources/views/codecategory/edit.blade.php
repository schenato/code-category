@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h4>Edit Category {{ $category->name }}</h4>
                    {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'method' => 'put']) !!}

                    @include('codecategory::_form')

                    <div class="form-group">
                        {!! Form::submit('Edit Category', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
