@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>
                <div class="card-body">
                   <ul class="list-group">
                       <a href="{{ route('pizza.index') }}" class="list-group-item list-group-action">View</a>
                       <a href="{{ route('pizza.create') }}" class="list-group-item list-group-action">Create</a>
                   </ul>
                </div>
            </div>
            @if (count($errors)>0)
            <div class="card mt-5">
                <div class="card-body">
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>    
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <form action="{{ route('pizza.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Name of Pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                    </div>
                    <div class="form-group">
                        <label for="description">Description of Pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label>Price(s)</label>
                        <input type="number" name="small_pizza_price" class="form-control" placeholder="small pizza price">
                        <input type="number" name="medium_pizza_price" class="form-control" placeholder="medium pizza price">
                        <input type="number" name="large_pizza_price" class="form-control" placeholder="large pizza price">
                    </div>
                    <div class="form-group">
                        <label for="category">Category of Pizza</label>
                        <select class="form-control" name="category">
                            <option value=""></option>
                            <option value="vegetarian">Vegetarian Pizza</option>
                            <option value="nonvegetarian">Non Vegetarian Pizza</option>
                            <option value="traditional">Traditional Pizza</option>
                            <option value="Peri peri chicken">Peri peri chicken Pizza</option>
                            <option value="Garlic PRAWN">Garlic PRAWN Pizza</option>
                            <option value="Chicken & Camembert">Chicken & Camembert Pizza</option>
                            <option value="Loaded pepperoni">Loaded pepperoni Pizza</option>
                            <option value="Spicy peppey paneer">picy peppey paneer Pizza</option>
                            <option value="Spicy pepperoni">Spicy pepperoni Pizza</option>
                            <option value="Vegi pepperoni">Vegi pepperoni Pizza</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
