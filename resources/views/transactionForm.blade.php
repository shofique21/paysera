@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Transaction create') }}</div>

                <div class="card-body">
                   @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('transaction.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="identity_number" class="col-md-4 col-form-label text-md-end">{{ __('Identity NO:') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" name="identity_number" id="identity_number" required>
                                  <option value="">{{'Select Account'}}</option>
                                    @foreach($allAccounts as $account)
                                    <option value="{{$account->identity_number}}">{{$account->identity_number}}</option>
                                    @endforeach
                                </select>
                                @error('identity_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="operation_amount" class="col-md-4 col-form-label text-md-end">{{ __('Amount') }}</label>

                            <div class="col-md-6">
                                <input id="operation_amount" type="text" class="form-control @error('operation_amount') is-invalid @enderror" name="operation_amount"  required>

                                @error('operation_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="operation_type" class="col-md-4 col-form-label text-md-end">{{ __('Operation Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" name="operation_type" id="operation_type" required>
                                    <option value="deposit">{{'deposit'}}</option>
                                    <option value="withdraw">{{'withdraw'}}</option>
                                </select>

                                @error('account_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="currency" class="col-md-4 col-form-label text-md-end">{{ __('Currency') }}</label>

                            <div class="col-md-6">
                                <select class="form-select" name="currency" id="currency" required>
                                    @foreach($currencies as $currency)
                                    <option value="{{$currency->name}}">{{$currency->name}}</option>
                                    @endforeach
                                </select>

                                @error('currency')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="operations_date" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                            <div class="col-md-6">
                                <input id="operations_date" type="date" class="form-control @error('operations_date') is-invalid @enderror" name="operations_date">

                                @error('operations_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
