@extends('layouts.app')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Business Details</h5>
                        @include('partials.response-message')
                    </div>
                    <div class="card-body business">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <table class="view-table view">
                                    <tbody>
                                    <tr>
                                        <th style="width: 210px">Business Name</th>
                                        <td>{{$business->business_name}}</td>
                                        <th>Start Date</th>
                                        <td>{{$business->start_date}}</td>
                                    </tr>
                                    <tr>
                                        <th>Currency</th>
                                        <td>{{$business->currency}}</td>
                                        <th>Upload Logo:</th>
                                        <td>{{$business->logo}}</td>
                                    </tr>
                                    <tr>
                                        <th>Website</th>
                                        <td>{{$business->website}}</td>
                                        <th>Business Contact Number:</th>
                                        <td>{{$business->contact_number}}</td>
                                    </tr>
                                    <tr>
                                        <th>Alternate Contact Number</th>
                                        <td>{{$business->website}}</td>
                                        <th>Country</th>
                                        <td>{{$business->country}}</td>
                                    </tr>
                                    <tr>
                                        <th>State</th>
                                        <td>{{$business->state}}</td>
                                        <th>City</th>
                                        <td>{{$business->city}}</td>
                                    </tr>
                                    <tr>
                                        <th>Zipcode</th>
                                        <td>{{$business->zipcode}}</td>
                                        <th>Landmark</th>
                                        <td>{{$business->Landmark}}</td>
                                    </tr>
                                    <tr>
                                        <th>Timezone</th>
                                        <td>{{$business->timezone}}</td>
                                        <th>Landmark</th>
                                        <td>{{$business->Landmark}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="view-table">
                                    <tbody>
                                    <tr>
                                        <th>Name</th>
                                        <td>
                                            {{$business->thirdParty->prefix ?? ''}}
                                            {{$business->thirdParty->firstname ?? ''}}
                                            {{$business->thirdParty->firstname ?? ''}}

                                        </td>
                                        <th>User Name</th>
                                        <td>{{$business->thirdParty->username ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>{{$business->thirdParty->email ?? ''}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
