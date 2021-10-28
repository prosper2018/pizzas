@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Customers') }}</div>
                    
                </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Customers') }}
                  <a style ="float: right" href="{{ route('pizza.index') }}"><button class="btn btn-secondary btn-sm" style="margin-left: 5px">View pizza</button></a>
                    <a style ="float: right" href="{{ route('pizza.create') }}"><button class="btn btn-secondary btn-sm" style="margin-left: 5px">Add new pizza</button></a>
                </div>                

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Member since</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if (count($customers)>0)
                        @foreach ($customers as $customer)

                          <tr>
                            <td>{{ $customer->name  }}</td>
                            <td>{{ $customer->email  }}</td>
                            <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('M d Y')  }}</td>
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
@endsection
