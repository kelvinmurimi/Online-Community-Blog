<div>
    <div class="card">

        <div class="flex justify-between">
            <h2 class="mb-5">{{ __('Account Settings') }}</h2>
            <div>
                <span class="error">*</span>
                <span class="dark:text-gray-200"> = {{ __('required') }}</span>
            </div>
        </div>

        <x-form wire:submit.prevent="" method="put">

            <x-form.input wire:model="name" :label="__('Name')" name='name'  required />
            <x-form.input wire:model="username" :label="__('Username')" name='username' required />
            <x-form.input wire:model="email" :label="__('Email')" name='email' required />
            <x-form.input wire:model="facebook" :label="__('Facebook Name')" name='facebook'  required />
            <x-form.input wire:model="twitter" :label="__('twitter Name')" name='twitter'  required />
            <x-form.input wire:model="instagram" :label="__('Instagram Name')" name='instagam'  required />
            <x-form.textarea rows="15" wire:model="youtube" :label="__('Your Bio')" name='youtube'  required />
            <x-form.input wire:model="image" type="file" :label="__('Image')" name='image' />
            @if ($image)
                {{ __('Photo Preview') }}:
                <img src="{{ $image->temporaryUrl() }}" width="100px" class="mb-5">
            @elseif(storage_exists($user->image))
                <img src="{{ storage_url($user->image) }}" width="100px" class="mb-5">
            @endif

            <x-button wire:click="update">{{ __('Update Profile') }}</x-button>

            @include('errors.messages')

        </x-form>

    </div>
</div>
