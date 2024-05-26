<x-create-modal title="Add Skill">
    <div class="col-md-6 mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model="name" />

        @include('admin.error', ['property' => 'name'])
    </div>
    <div class="col-md-6 mb-0">
        <label class="form-label">Icon</label>
        <input type="text" class="form-control" placeholder="Icon" wire:model="icon" />

        @include('admin.error', ['property' => 'icon'])

    </div>
    <div class="col-md-12 mb-0 mt-2">
        <label class="form-label">Description</label>
        <textarea type="text" class="form-control" placeholder="Description" wire:model="description"></textarea>

        @include('admin.error', ['property' => 'description'])

    </div>
</x-create-modal>
