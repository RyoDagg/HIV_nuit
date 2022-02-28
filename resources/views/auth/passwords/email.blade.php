@extends('layouts.auth')

@section('content')
<div class="container" style="margin-bottom: 50px;">
    <section id="sa-contact-inner" class="sa-contact-inner-section inner-page-padding">
        <div class="container">
            <div class="saas_two_section_title saas2-headline text-center">
                <span class="title_tag">Having A problem ?</span>
                <h2>{{ __('Reset Password') }} </h2>
            </div>
            <div class="sa-contact-inner-form">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your Email Address">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="sa-contact-inner-btn text-center">
                                <button type="submit" style="width:auto"> {{ __('Send Password Reset Link') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</div>
@endsection