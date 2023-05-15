@extends('payments::layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="{{route('methods')}}">PAYMENTS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{route('methods')}}">Methods <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('transactions')}}">Transactions</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('refunds')}}">Refunds</a>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
      <button class="btn btn-primary" style="float: right">+ Add Payment Method</button>

      </div>
    </div>
    <div class="row">
        
        <div class="col-12">
          <table class="table table-bordered table-hover mt-2">
            <thead class="thead-dark"> 
              <tr>
                <th>Gateway Name</th>
                <th>Method <small>( CC/ACH )</small></th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>PayPal</td>
                <td>CC  </td>
                <td>Online payment system</td>
                <td>
                  <span class="badge badge-primary">default</span>
                  <span class="badge badge-success">Active</span>
                </td>
                <td>
                  <a href="">
                    <i class="fa fa-trash"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-edit"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    </div>
</div>
@endsection
