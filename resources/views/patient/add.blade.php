@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Patient</div>

                    <div class="card-body">
                        @include('flash-message')

                        <form method="POST" action="{{ route('patients.store') }}">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Mr Number</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('mr_no') is-invalid @enderror"
                                           id="mr_name" name="mr_no" value="{{ old('mr_no') }}" required>
                                    @error('mr_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Sur Name</label>

                                <div class="col-md-6">
                                    <input id="sur_name" type="text"
                                           class="form-control @error('sur_name') is-invalid @enderror" name="sur_name"
                                           value="{{old('sur_name')}}" required>

                                    @error('sur_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">First Name</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{old('first_name')}}" required>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Middle Name</label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text"
                                           class="form-control @error('middle_name') is-invalid @enderror"
                                           name="middle_name" value="{{old('middle_name')}}" required>

                                    @error('middle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Last Name</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{old('last_name')}}" required>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Gender</label>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="M"
                                               id="gender" {{ old('gender') ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="F"
                                               id="gender" {{ old('gender') ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Dob</label>

                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror"
                                           name="dob" value="{{old('dob')}}" required>

                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Vital Date</label>

                                <div class="col-md-6">
                                    <input id="vital_date" type="date"
                                           class="form-control @error('vital_date') is-invalid @enderror"
                                           name="vital_date" value="{{old('vital_date')}}" required>

                                    @error('vital_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Vital Type</label>

                                <div class="col-md-6">
                                    <input id="vital_type" type="text"
                                           class="form-control @error('vital_type') is-invalid @enderror"
                                           name="vital_type" value="{{old('vital_type')}}" required>

                                    @error('vital_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Vital Value</label>

                                <div class="col-md-6">
                                    <input id="vital_value" type="text"
                                           class="form-control @error('vital_value') is-invalid @enderror"
                                           name="vital_value" value="{{old('vital_value')}}" required>

                                    @error('vital_value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Vital Unit</label>

                                <div class="col-md-6">
                                    <input id="vital_unit" type="text"
                                           class="form-control @error('vital_unit') is-invalid @enderror"
                                           name="vital_unit" value="{{old('vital_unit')}}" required>

                                    @error('vital_unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6  offset-md-4">
                                    <button type="submit" class="form-control btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
