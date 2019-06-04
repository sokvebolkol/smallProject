@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Information</h2>
                    <form method="POST">
                        <!-- Name && gender -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="NAME" name="name" required>                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender" required>
                                            <option value="" disabled="disabled" selected="selected">GENDER</option>
                                            <option value="">Male</option>
                                            <option value="">Female</option>
                                            <option value="">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Birth && address -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday" required>
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="ADDRESS" name="address" required>                                   
                                </div>
                            </div>
                        </div>
                        <!-- Class && major -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                <input class="input--style-1" type="text" placeholder="GENERATION (2018-2019)" name="generation"required>                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="class_name" required>
                                            <option value="" disabled="disabled" selected="selected">MAJOR</option>
                                            <option value="">WEB</option>
                                            <option value="">SNA</option>
                                            <option value="">DESIGNER</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Email and password -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="email" placeholder="EMAIL" name="email" required>                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="password" placeholder="PASSWORD" name="password" required>  
                                </div>                                  
                            </div>
                        </div>
                            <!-- register plan -->
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="class" required>
                                        <option value="" disabled="disabled" selected="selected">REGISTRATION PLAN</option>
                                        <option value="" data-toggle="tooltip" data-placement="right" 
                                        title=" 
                                        You be able to pay for 36 months!! 
                                        -5$ per month for the first year
                                        -10$ per month for socond year
                                        -15$ for third year">Plan 1</option>
                                        <option value="" data-toggle="tooltip" data-placement="right" 
                                        title=" 
                                        You be able to pay for 6 times!! A mount 60$ in a time">Plan 2</option>
                                        <option value="" data-toggle="tooltip" data-placement="right" 
                                        title=" 
                                        You be able to pay for 3 tiems!! A mount 120$ in a time">Plan 3</option>
                                        <option value="" data-toggle="tooltip" data-placement="right" 
                                        title=" You be able to pay only a time for 360$ in one time">Plan 4</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
