@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Patient <a href="{{route('patients.index')}}"
                                                             class="float-right btn btn-secondary">Back</a>
                    </div>

                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-md-4 col-form-label text-md-right">Mr Number</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('mr_no') is-invalid @enderror"
                                           readonly id="mr_name" value="{{ $patient->mr_no }}" required>
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
                                           readonly value="{{$patient->sur_name}}" required>

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
                                           readonly name="first_name" value="{{ $patient->first_name}}" required>

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
                                           readonly name="middle_name" value="{{$patient->middle_name}}" required>

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
                                           readonly name="last_name" value="{{$patient->last_name}}" required>

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
                                               readonly id="gender" {{ $patient->gender ? 'checked' : '' }}>
                                        <label class="form-check-label">
                                            Male
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="F"
                                               readonly id="gender" {{ $patient->gender ? 'checked' : '' }}>
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
                                           readonly name="dob" value="{{$patient->dob}}" required>

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
                                           readonly name="vital_date"
                                           value="{{$patient->patientVitals->first()->vital_date}}" required>

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
                                           readonly name="vital_type"
                                           value="{{$patient->patientVitals->first()->vital_type}}" required>

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
                                           readonly name="vital_value"
                                           value="{{$patient->patientVitals->first()->vital_value}}" required>

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
                                           readonly name="vital_unit"
                                           value="{{$patient->patientVitals->first()->vital_unit}}" required>

                                    @error('vital_unit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
