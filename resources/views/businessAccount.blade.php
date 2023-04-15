@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>All Business Accounts</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Identity No</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Account Type</th>
                                <th>Balance</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($businessAccount as $user)
                            <tr>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->identity_number}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->phone}}</td>
                                <td>{{ $user->account_type}}</td>
                                <td>{{ $user->balance}}</td>
                                <td>{{ $user->status}}</td>
                                <td>{{ 'Details'}}</td>
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