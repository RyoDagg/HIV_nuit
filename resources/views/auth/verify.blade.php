@extends('layouts.auth')

@section('content')
<div class="container" style="margin-bottom: 50px;">
    <section id="sa-contact-inner" class="sa-contact-inner-section inner-page-padding">
        <div class="container">
            <div class="saas_two_section_title saas2-headline text-center">
                <span class="title_tag">Are You Sure?</span>
                <h2>{{ __('Verify Your Email Address') }} </h2>

                <div class="card-body">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection