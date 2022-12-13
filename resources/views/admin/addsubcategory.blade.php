@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <form action="/add_subcategory" method="POST">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Category </label>
                <select name="category_id" id="" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">SubCategory Name</label>
                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Enter Category Name">
            </div>
            @error('name')
                <p class="text-danger">{{$message}}</p>

            @enderror

            <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           
        </form>

    </div>

    @if ($message = Session::get('success'))

<div class="alert alert-success alert-block">


    <strong>{{ $message }}</strong>

</div>

@endif

<div class="text-left">
    <a href="/adminhome"><button class="btn btn-sm btn-primary">Back</button></a>
</div>
</div>
@endsection