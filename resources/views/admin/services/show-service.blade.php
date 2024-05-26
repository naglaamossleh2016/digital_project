<x-show-modal title="Show Service">
    <div class="col-md-6 mb-3">
        <label class="form-label">Name</label>
        <div class="form-control">{{ $name }}</div>

    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <div class="form-control">{{ $icon }}</div>

    </div>
    <div class="col-md-12 mb-0">
        <label class="form-label">Description</label>
        <div class="form-control">{{ $description }}</div>

    </div>
</x-show-modal>
