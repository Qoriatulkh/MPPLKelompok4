@extends('adminlte::auth.auth-page', ['auth_type' => 'register'])

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )

@if (config('adminlte.use_route_url', false))
@php( $login_url = $login_url ? route($login_url) : '' )
@php( $register_url = $register_url ? route($register_url) : '' )
@else
@php( $login_url = $login_url ? url($login_url) : '' )
@php( $register_url = $register_url ? url($register_url) : '' )
@endif

@section('auth_header', __('adminlte::adminlte.register_message'))

@section('auth_body')
<form action="{{ $register_url }}" method="post">
    {{ csrf_field() }}

    {{-- Username field --}}
    {{-- <div class="input-group mb-3">
        <input type="text" name="username" class="form-control {{ $errors->has('username') ? 'is-invalid' : '' }}"
    value="{{ old('username') }}" placeholder="Username" autofocus>
    <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
        </div>
    </div>
    @if($errors->has('username'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('username') }}</strong>
    </div>
    @endif
    </div> --}}

    {{-- Name field --}}
    <div class="input-group mb-3">
        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
            value="{{ old('name') }}" placeholder="Nama lengkap" autofocus>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('name'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </div>
        @endif
    </div>

    {{-- Email field --}}
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
            value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('email'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </div>
        @endif
    </div>

    {{-- Address field --}}
    <div class="input-group mb-3">
        <textarea type="address" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
            placeholder="Alamat">{{ old('address') }}</textarea>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-map-marker {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('address'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('address') }}</strong>
        </div>
        @endif
    </div>

    {{-- Gender field --}}
    <div class="input-group mb-3">
        <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" id="sel1" name="gender">
            <option disabled {{ old('gender') ?? 'selected' }}>Pilih jenis kelamin</option>
            <option value="Male" {{ old('gender') == 'Male' ? 'selected' : ''}}>Laki-laki</option>
            <option value="Female" {{ old('gender') == 'Female' ? 'selected' : ''}}>Perempuan</option>
        </select>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-mars-double {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('gender'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('gender') }}</strong>
        </div>
        @endif
    </div>
    {{-- <div class="form-group{{ $errors->has('sex') ? ' is-invalid' : '' }}">
    <div class="form-group">
        <select class="form-control" id="sel1" name="sex">
            <option disabled selected>Pilih jenis kelamin</option>
            <option value="Male">Laki-laki</option>
            <option value="Female">Perempuan</option>
        </select>
        @if ($errors->has('sex'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('sex') }}</strong>
        </span>
        @endif
    </div>
    </div> --}}

    {{-- Phone number field --}}
    <div class="input-group mb-3">
        <input type="number" name="phoneNumber"
            class="form-control {{ $errors->has('phoneNumber') ? 'is-invalid' : '' }}" value="{{ old('phoneNumber') }}"
            placeholder="Nomor telepon">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-phone{{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('phoneNumber'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('phoneNumber') }}</strong>
        </div>
        @endif
    </div>

    {{-- Password field --}}
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
            placeholder="Kata sandi" value="{{ old('password') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('password'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </div>
        @endif
    </div>

    {{-- Confirm password field --}}
    <div class="input-group mb-3">
        <input type="password" name="password_confirmation"
            class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
            placeholder="Ketik ulang kata sandi" value="{{ old('password_confirmation') }}">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
            </div>
        </div>
        @if($errors->has('password_confirmation'))
        <div class="invalid-feedback">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
        </div>
        @endif
    </div>

    {{-- Register button --}}
    <button type="submit" class="btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
        <span class="fas fa-user-plus"></span>
        Daftar
    </button>

</form>
@stop

@section('auth_footer')
<p class="my-0">
    <a href="{{ $login_url }}">
        Sudah punya akun ? Silahkan Login
    </a>
</p>
@stop