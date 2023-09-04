@extends('frontend.base')
@section('content')
    @include('errors.messages')
    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <form action="{{ route('contact.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control "
                                    value=" {{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control "
                                    value=" {{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control "
                                    value=" {{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message content</label>
                                <textarea name="content" id="message" class="form-control " cols="30" rows="8">
                                    {{ old('content') }}
                                </textarea>
                                @error('content')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary">
                            </div>
                        </div>
                    </form>


                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    map
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>
@endsection
