@extends('admin.master')
@section('content')
<div>
    <div class="card">

        <div class="flex justify-between">
            <h4 class="mb-5 text-bold text-indigo-800">{{ __('Publish Article') }}</h4>

            <div>

                <span class="error">*</span>
                <span class="dark:text-gray-200"> = {{ __('required') }}</span>
            </div>
             <div class="flex space-x-2 justify-end p-3">
                    <a href="{{ route('admin.articles.index') }}"class="btn btn-primary p-3" >{{ __('Back To Article') }}</a>

                 </div>
        </div>

        <x-form  method="post" action="{{ route('admin.articles.store') }}" enctype="multi-part-formdata">

            <x-form.input  :label="__('Article Title')" name='title' value="{{ old('title') }}" required />

            <x-form.textarea  :label="__('Article Excerpt')" name='excerpt' required />

            <x-form.ckeditor  :label="__('Article Content')" name='content' required />
            <x-form.input wire:model="image" type="file" :label="__('Image')" name='image' />

                {{-- __('PhotoPreview') --}}:
                <img src="{{-- $image->temporaryUrl() --}}" width="100px" class="mb-5">

                <img src="{{-- storage_url($user->image) --}}" width="100px" class="mb-5">


            <x-button>{{ __('Publish Article') }}</x-button>

            @include('errors.messages')

        </x-form>

    </div>
</div>
@endsection


