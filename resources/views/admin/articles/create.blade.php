@extends('admin.master')
@section('content')
<div>
    <div class="card">

        <div class="flex justify-between">
            <h4 class="mb-5 text-bold text-indigo-800">{{ __('Publish Article') }}</h4>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-primary btn-sm p-1">Back</a>
            <div>
                <span class="error">*</span>
                <span class="dark:text-gray-200"> = {{ __('required') }}</span>
            </div>
        </div>

        <x-form wire:submit.prevent="" method="put">

            <x-form.input wire:model="name" :label="__('Name')" name='name' required />
            <x-form.input wire:model="username" :label="__('Username')" name='username' required />
            <x-form.input wire:model="email" :label="__('Email')" name='email' required />
            <x-form.input wire:model="image" type="file" :label="__('Image')" name='image' />
           
                {{-- __('PhotoPreview') --}}:
                <img src="{{-- $image->temporaryUrl() --}}" width="100px" class="mb-5">
           
                <img src="{{-- storage_url($user->image) --}}" width="100px" class="mb-5">
           

            <x-button wire:click="update">{{ __('Update Profile') }}</x-button>

            @include('errors.messages')

        </x-form>

    </div>
</div>
@endsection


