@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Your Orders') }}
                  {{-- <p style ="float: right"><a href="{{ route('pizza.create') }}">Create pizza</a><a href="{{ route('pizza.index') }}">View pizza</a></p> --}}
                </div>                

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">User</th>
                            <th scope="col">Phone/Email</th>
                            <th scope="col">Date/Time</th>
                            <th scope="col">Pizza</th>
                            <th scope="col">S. Pizza</th>
                            <th scope="col">M. Pizza</th>
                            <th scope="col">L. Pizza</th>
                            <th scope="col">Total($)</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if (count($orders)>0)
                        @foreach ($orders as $order)

                          <tr>
                            <td>{{ $order->user->name  }}</td>
                            <td>{{ $order->user->email  }}<br>{{ $order->phone  }}</td>
                            <td>{{ $order->date  }}<br>{{ $order->time  }}</td>
                            <td>{{ $order->pizza->name  }}</td>
                            <td>{{ $order->small_pizza  }}</td>
                            <td>{{ $order->medium_pizza  }}</td>
                            <td>{{ $order->large_pizza  }}</td>
                            <td>${{ ($order->pizza->small_pizza_price * $order->small_pizza)+($order->pizza->medium_pizza_price * $order->medium_pizza)+($order->pizza->large_pizza_price * $order->large_pizza)  }}</td>
                            <td>{{ $order->body  }}</td>
                            <td>{{ $order->status  }}</td>
                          </tr>
                        @endforeach
                        @else
                          <p>No pizza to show</p>
                        @endif
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    a.list-group-item{
        font-size: 18px; 
    }
    a.list-group-item:hover{
        background-color: red;
        color: #fff; 
    }
    .card-header{
        background-color: red;
        color: #fff;
        font-size: 20px;
    }
</style>
@endsection
