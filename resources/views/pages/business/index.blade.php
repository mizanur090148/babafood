@extends('layouts.app')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            {{--        <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1>--}}
            <div class="row">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Business List</h5>
                            <a href="{{url('businesses/create')}}" class="btn btn-sm btn-primary">Create New</a>
                        </div>
                        @include('partials.response-message')
                        <table class="view-table">
                            <thead>
                                <tr>
                                    <th>Business Name</th>
                                    <th class="d-none d-xl-table-cell">Start Date</th>
                                    <th class="d-none d-xl-table-cell">Currency</th>
                                    <th class="d-none d-xl-table-cell">Website</th>
                                    <th class="d-none d-xl-table-cell" title="Contact Number">Contact No.</th>
                                    <th class="d-none d-xl-table-cell">Country</th>
                                    <th class="d-none d-md-table-cell" style="width: 100px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @forelse($businesses as $business)
                                <tr>
                                    <td>{{ $business->business_name }}</td>
                                    <td class="">{{ $business->start_date }}</td>
                                    <td class="">{{ $business->currency }}</td>
                                    <td class="">{{ $business->website }}</td>
                                    <td class="">{{ $business->contact_number }}</td>
                                    <td class="">{{ $business->country }}</td>
                                    <td class="action-td">
                                        <a href="{{ url('businesses/'. $business->id) }}">
                                            <i class="align-middle me-2" data-feather="eye"></i>
                                        </a>
                                        <a href="{{ url('/businesses/' . $business->id . '/edit') }}">
                                            <i class="align-middle me-2" data-feather="edit"></i>
                                        </a>
                                        <form method="POST" action="{{ url('/businesses/' . $business->id) }}"
                                              onsubmit="return confirm('Are you sure you want to delete this business?')">
                                            {{csrf_field()}}
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link" style="color: red;padding: unset;"
                                                    title="Delete">
                                                <i class="align-middle" data-feather="trash-2"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center text-danger" colspan="8">Data not found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
