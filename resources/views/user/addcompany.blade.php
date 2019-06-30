@extends('user/sidebaruser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
                <div class="card-header">{{ __('Company Info') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{route('company.store',Auth::user()->id)}}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('Companyname') is-invalid @enderror" name="companyname" required autofocus>

                                @error('Companyname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CompanyInfo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('companyinfo') is-invalid @enderror" name="companyinfo" required>

                                @error('companyinfo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Owner Name') }}</label>

                            <div class="col-md-6">
                            <input type="text" name="ownername" class="form-control @error('ownername') is-invalid @enderror"></textarea>

                                @error('ownername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                            <input type="text" name="address" class="form-control @error('address') is-invalid @enderror"></textarea>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>       
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                            <div class="col-md-6">
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror"></textarea>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                                                              
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>
@endsection
