@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                       <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ ('Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Emaill Addres') }}</label>

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
                            <label for="kontak" class="col-md-4 col-form-label text-md-right">{{ __('kotank') }}</label>

                            <div class="col-md-6">
                                <input id="kontak" type="text" class="form-control @error('kontak') is-invalid @enderror" name="kontak" value="{{ old('kontak') }}" required autocomplete="kontak" autofocus>

                                @error('kontak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                              
                              
                              
                              
                              
                                             <div class="form-group row ">    
                        <label for="Kategori" class="col-md-4 col-form-label text-md-right">kategori</label>
                        
                        <div class="col-md-6">
                        <select required="required" class="form-control form-control-sm" id="kategori" name="kategori"><option selected="selected" value=""<option value="1"></option><option value="2">-</option><option value="3">Dosen</option><option value="4">Mahasiswa</option>></select>
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


                        

                         <div class="form-group {{$errors->has('captcha')?'has-error' :''}}">
                            <label for="captcha" class="col-md4 control-label">Captcha</label>

                            <div class="col-md-6">
                                <div class="captcha">
                                <span>{!! captcha_img('flat') !!} </span>
                                <button type="button" class="btn btn-success btn-refresh">Refresh</button>
                                </div>
                                <input type="text" id="captcha" class="form-control"placeholder="Enter Captcha" name="captcha">
                                    @if ($errors->has('captcha'))


                                    <span class ="help-block">
                                        <strong>{{ $errors->first('captcha') }}</strong>
                                    </span>
                                @endif
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
</div>


@endsection
