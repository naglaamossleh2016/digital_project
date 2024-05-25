@extends('admin.master')
@section('title', 'Subscribers')
@section('subscribers-active', 'active')
@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3"><!-- Button trigger modal -->
            <h4 class="fw-bold py-3 mb-4 d-inline"><span class="text-muted fw-light">Subscribers</h4>

        </div>



        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        Subscribers Emails
                        @livewire('admin.subscribers.subscriber-data')
                    </div>
                </div>
            </div>

            @livewire('admin.subscribers.delete-subscriber')

        </div>
    @endsection
