@extends('layouts.app')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Create Form</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('businesses')}}" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Business Name:<sup>*</sup></label>
                                        <input type="text" class="form-control" name="business_name"
                                               placeholder="Enter Business Name">
                                        @error('business_name')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Start Date:</label>
                                        <input type="date" name="start_date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Currency:<sup>*</sup></label>
                                        <select class="form-control" name="currency">
                                            <option value="saudi_riyal">Saudi Riyal</option>
                                            <option value="uae_dirham">United Arab Emirates Dirham</option>
                                        </select>
                                        @error('currency')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Upload Logo:</label>
                                        <input type="file" name="logo" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Website:</label>
                                        <input type="text" name="website" class="form-control"
                                               placeholder="Enter website">
                                        @error('website')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Business Contact Number:<sup>*</sup></label>
                                        <input type="text" name="contact_number" class="form-control"
                                               placeholder="Enter contact number">
                                        @error('contact_number')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Alternate Contact Number:</label>
                                        <input type="text" name="alternate_contact_number" class="form-control"
                                               placeholder="Enter alternate contact number">
                                        @error('alternate_contact_number')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Country:<sup>*</sup></label>
                                        <select class="form-control" name="country">
                                            <option value="1">Saudi Arabia</option>
                                            <option value="2">United Arab Emirates</option>
                                        </select>
                                        @error('country')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">State:<sup>*</sup></label>
                                        <select class="form-control" name="state">
                                            <option value="1">Asir Province</option>
                                            <option value="2">Al Hasa</option>
                                        </select>
                                        @error('state')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">City:<sup>*</sup></label>
                                        <select class="form-control" name="city">
                                            <option value="1">Riyadh</option>
                                            <option value="2">Makkah</option>
                                            <option value="3">Dubai</option>
                                        </select>
                                        @error('city')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <div class="mb-2">
                                            <label class="form-label">Zipcode:<sup>*</sup></label>
                                            <input type="text" name="zipcode" class="form-control"
                                                   placeholder="Enter zipcode">
                                            @error('zipcode')
                                                <div class="alert alert-danger text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Landmark:<sup>*</sup></label>
                                        <input type="text" name="landmark" class="form-control"
                                               placeholder="Enter landmark">
                                        @error('landmark')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Timezone:<sup>*</sup></label>
                                        <select class="form-control" name="timezone">
                                            <option value="1">Asia/Riyadh</option>
                                        </select>
                                        @error('timezone')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2 mt-2"></div>
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Prefix:<sup>*</sup></label>
                                        <input type="text" name="prefix" class="form-control" placeholder="Mr/Mrs/Miss">
                                        @error('prefix')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">First Name:<sup>*</sup></label>
                                        <input type="text" name="firstname" class="form-control"
                                               placeholder="Enter first name"/>
                                        @error('firstname')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Last Name:<sup>*</sup></label>
                                        <input type="text" name="lastname" class="form-control"
                                               placeholder="Enter last name"/>
                                        @error('lastname')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Username:<sup>*</sup></label>
                                        <input type="text" name="username" class="form-control"
                                               placeholder="Enter username">
                                        @error('username')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Email:<sup>*</sup></label>
                                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                                        @error('email')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Password:<sup>*</sup></label>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Enter password">
                                        @error('password')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Confirm Password:<sup>*</sup></label>
                                        <input type="password" name="confirm_password" class="form-control"
                                               placeholder="Enter confirm password">
                                        @error('confirm_password')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-lg-12 text-center">
                                    <button type="submit" class="btn btn-primary">Medium</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
