<form class="row" wire:submit.prevent='submit'>
    @if (session('message'))
        <div class="alert alert-success my-success-alert">
            {{ session('message') }}
        </div>
    @endif
    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
        <input type="text" class="form-control" placeholder="Name" wire:model='settings.name' />
        @include('admin.error', ['property' => 'settings.name'])


    </div>


    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label" for="basic-default-company">Address</label>
        <input type="text" class="form-control" placeholder="Address" wire:model='settings.address' />
        @include('admin.error', ['property' => 'settings.address'])

    </div>


    <div class="col-sm-6">

        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
        <input type="text" id="basic-default-email" class="form-control" placeholder="Email"
            wire:model='settings.email' />
        @error('settings.email')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>



    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label" for="basic-default-phone">Phone No</label>
        <input type="text" id="basic-default-phone" class="form-control phone-mask" placeholder="Phone No"
            wire:model='settings.phone' />
        @error('settings.phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label" for="basic-default-phone">FaceBook</label>
        <input type="text" class="form-control" placeholder="FaceBook" aria-label="Facebook"
            wire:model='settings.facebook' />
        @error('settings.facebook')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label">Twitter</label>
        <input type="text" class="form-control " placeholder="Twitter" aria-label="Twitter"
            wire:model='settings.twitter' />
        @error('settings.twitter')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label">LinkedIn</label>
        <input type="text" class="form-control" placeholder="LinkedIn" aria-label="LinkedIn"
            aria-describedby="LinkedIn" wire:model='settings.linkedin' />
        @error('settings.linkedin')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>
    <div class="col-sm-6">
        <label class="col-sm-2 col-form-label" for="basic-default-phone">Instagram</label>
        <input type="text" class="form-control phone-mask" placeholder="Instagram" aria-label="Instagram"
            aria-describedby="Instagram" wire:model='settings.instagram' />
        @error('settings.instagram')
            <span class="text-danger">{{ $message }}</span>
        @enderror

    </div>


    <div class="row justify-content-start mt-3">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">

                @include('admin.loading', ['buttonName' => 'submit'])
            </button>
        </div>
    </div>
</form>
