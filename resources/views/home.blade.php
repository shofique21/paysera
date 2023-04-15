@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="glyphicon glyphicon-user "></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Business Accounts</h6> <span>1 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Paysera</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading"><?php echo date("Y-m-d") . "<br>"; ?></h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">32 new accounts <span class="text2">created this month</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="fa-regular fa-user"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Private Accounts</h6> <span>4 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Paysera</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading"><?php echo date("Y-m-d") . "<br>"; ?></h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">48 new accounts <span class="text2">created this month</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Total Accounts</h6> <span>2 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Paysera</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading"><?php echo date("Y-m-d") . "<br>"; ?></h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">80 new accounts <span class="text2">created this month</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="glyphicon glyphicon-user "></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">All Transaction</h6> <span>1 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Paysera</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading"><?php echo date("Y-m-d") . "<br>"; ?></h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 32%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">32 new accounts <span class="text2">created this month</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="fa-regular fa-user"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Deposit Transaction</h6> <span>4 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Paysera</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading"><?php echo date("Y-m-d") . "<br>"; ?></h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 48%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">48 new accounts <span class="text2">created this month</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card p-3 mb-2">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex flex-row align-items-center">
                                        <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                                        <div class="ms-2 c-details">
                                            <h6 class="mb-0">Withdraw Transaction</h6> <span>2 days ago</span>
                                        </div>
                                    </div>
                                    <div class="badge"> <span>Paysera</span> </div>
                                </div>
                                <div class="mt-5">
                                    <h3 class="heading"><?php echo date("Y-m-d") . "<br>"; ?></h3>
                                    <div class="mt-5">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="mt-3"> <span class="text1">80 new accounts <span class="text2">created this month</span></span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection