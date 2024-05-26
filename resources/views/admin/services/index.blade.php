@extends('admin.master')
@section('title', 'Services')
@section('services-active', 'active')
@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="mb-3"><!-- Button trigger modal -->
            <h4 class="fw-bold py-3 mb-4 d-inline"><span class="text-muted fw-light">Services</h4>
            <button type="button" class="btn btn-sm mb-2 mx-2 btn-primary" data-bs-toggle="modal"
                data-bs-target="#createModal">
                Add New
            </button>
        </div>

        <div class="mt-3">
            <!-- Modal -->
            @livewire('admin.services.create-service')
        </div>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        @livewire('admin.services.service-data')
                    </div>
                </div>
            </div>
            @livewire('admin.services.update-service')
            @livewire('admin.services.delete-service')
            @livewire('admin.services.show-service')
        </div>
    @endsection
