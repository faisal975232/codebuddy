@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
            <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <a href="/add_category"> <button class="btn btn-sm btn-primary">Add Category</button></a>
                            <a href="/add_subcategory"> <button class="btn btn-sm btn-primary">Add Sub-Category</button></a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
        <div class="col-md-8 mt-4">
            
        @foreach ($data as $category)
        <div class="card">
            <div class="card-header">{{$category->name}}</div>

            <div class="card-body">
            @foreach ($category->subcategories as $subcategory)
                <p>{{$subcategory->name}}</p>
            @endforeach
            </div>
           
        </div>
            
        @endforeach

        </div>
    </div>
</div>
@endsection