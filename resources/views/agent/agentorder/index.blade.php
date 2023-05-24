@extends('agent.agent_dashboard')

@section('title', 'Customer Management')
@section('content-header', 'Customer Management')
@section('content-actions')
    <a href="{{ route('customers.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Customer</a>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('agent')

@endsection
