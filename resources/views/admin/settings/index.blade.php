@extends('admin.master')
@section('title', 'Settings')
@section('setting-active', 'active')
@section('admin-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Setting</h4>

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        @livewire('admin.settings.setting-component')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
