@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Paysera') }}
                    <form action="{{ route('transactions.import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" class="form-control">
                        <br>
                        <button class="btn btn-success">Import Transaction Data</button>
                    </form>
                </div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h3>All Deposit Transaction</h3>
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
                            @foreach($depositTransaction as $transaction)
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