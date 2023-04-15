@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h1>All Transaction</h1>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Identity No</th>
                                <th>Opertation Type</th>
                                <th>Operation Amount</th>
                                <th>Commission</th>
                                <th>Balance</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($withdrawTransaction as $transaction)
                            <tr>
                                <td>{{ $transaction->operations_date}}</td>
                                <td>{{ $transaction->identity_number}}</td>
                                <td>{{ $transaction->operation_type}}</td>
                                <td>{{ $transaction->operation_amount}}</td>
                                <td>{{ $transaction->commission_amount}}</td>
                                <td>{{ $transaction->amount_balance}}</td>
                                <td>{{ $transaction->status}}</td>
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