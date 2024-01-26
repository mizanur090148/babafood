@extends('layouts.app')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Edit Form</h5>
                        @include('partials.response-message')
                    </div>
                    <div class="card-body business">
                        <form action="{{ url('businesses/'.$business->id) }}" method="POST">
                            {{csrf_field()}}
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$business->id}}"/>
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="mb-2">
                                        <label class="form-label">Business Name:<sup>*</sup></label>
                                        <input type="text" class="form-control" name="business_name" value="{{ old('business_name') ?? $business->business_name }}"
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
                                        <input type="date" name="start_date" value="{{old('start_date') ?? $business->start_date}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Currency:<sup>*</sup></label>
                                        <select class="form-control" name="currency">
                                            <option value="Saudi Riyal" @if($business->start_date === 'Saudi Riyal') selected @endif>Saudi Riyal</option>
                                            <option value="United Arab Emirates Dirham"  @if($business->currency === 'United Arab Emirates Dirham') selected @endif>United Arab Emirates Dirham</option>
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
                                        <input type="text" name="website" value="{{old('website') ?? $business->website}}" class="form-control"
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
                                        <input type="text" name="contact_number" value="{{old('contact_number') ?? $business->start_date}}" class="form-control"
                                               placeholder="Enter contact number">
                                        @error('contact_number')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Alternate Contact Number:</label>
                                        <input type="text" name="alternate_contact_number"  value="{{old('alternate_contact_number') ?? $business->alternate_contact_number}}" class="form-control"
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
                                            <option value="Saudi Arabia" @if($business->country === 'Saudi Arabia') selected @endif>Saudi Arabia</option>
                                            <option value="United Arab Emirates" @if($business->country === 'United Arab Emirates') selected @endif>United Arab Emirates</option>
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
                                            <option value="Asir Province" @if($business->state === 'Asir Province') selected @endif>Asir Province</option>
                                            <option value="Al Hasa" @if($business->state === 'Al Hasa') selected @endif>Al Hasa</option>
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
                                            <option value="Riyadh" @if($business->city === 'Riyadh') selected @endif>Riyadh</option>
                                            <option value="Makkah" @if($business->city === 'Makkah') selected @endif>Makkah</option>
                                            <option value="Dubai" @if($business->city === 'Dubai') selected @endif>Dubai</option>
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
                                            <input type="text" name="zipcode" value="{{old('zipcode') ?? $business->zipcode}}" class="form-control"
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
                                        <input type="text" name="landmark" value="{{old('landmark') ?? $business->landmark}}" class="form-control"
                                               placeholder="Enter landmark">
                                        @error('landmark')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Timezone:<sup>*</sup></label>
                                        <select class="form-control" name="timezone" >
                                            <option value="Asia/Riyadh" @if($business->timezone === 'Asia/Riyadh') selected @endif>Asia/Riyadh</option>
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
                                        <input type="text" name="prefix" value="{{old('prefix') ?? $business->thirdParty->prefix}}" class="form-control" placeholder="Mr/Mrs/Miss">
                                        @error('prefix')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">First Name:<sup>*</sup></label>
                                        <input type="text" name="firstname" value="{{old('firstname') ?? $business->thirdParty->firstname}}" class="form-control"
                                               placeholder="Enter first name"/>
                                        @error('firstname')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="mb-2">
                                        <label class="form-label">Last Name:<sup>*</sup></label>
                                        <input type="text" name="lastname" value="{{old('lastname') ?? $business->thirdParty->lastname}}" class="form-control"
                                               placeholder="Enter last name"/>
                                        @error('lastname')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Username:<sup>*</sup></label>
                                        <input type="text" name="username" value="{{old('username') ?? $business->thirdParty->username}}" class="form-control"
                                               placeholder="Enter username">
                                        @error('username')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="mb-2">
                                        <label class="form-label">Email:<sup>*</sup></label>
                                        <input type="email" name="email" value="{{old('email') ?? $business->thirdParty->email}}" class="form-control" placeholder="Enter email">
                                        @error('email')
                                            <div class="alert alert-danger text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-lg-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
