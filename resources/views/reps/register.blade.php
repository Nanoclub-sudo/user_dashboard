@extends('layouts.master')

@section('main-body')
    <div class="main px-lg-4 px-md-4">
        @include('layouts.includes.overalls.header')

        <div class="container mt-4">
            <div class="card shadow-sm rounded">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Register New User</h5>
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>There were some problems with your input:</strong>
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('rep.reg.submit') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Left Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="surname" class="form-label">Surname</label>
                                    <input type="text" name="surname" class="form-control" value="{{ old('surname') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="father_name" class="form-label">Father's Name</label>
                                    <input type="text" name="father_name" class="form-control" value="{{ old('father_name') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" name="birthday" class="form-control" value="{{ old('birthday') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="passport_number" class="form-label">Passport Number</label>
                                    <input type="text" name="passport_number" class="form-control" value="{{ old('passport_number') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" name="country" class="form-control" value="{{ old('country') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" name="city" class="form-control" value="{{ old('city') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" class="form-select" required>
                                        <option value="" disabled selected>Select gender</option>
                                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" required>
                                </div>
                            </div>

                            <!-- Right Column -->
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" class="form-control" rows="3">{{ old('address') }}</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="postal_code" class="form-label">Postal Code</label>
                                    <input type="text" name="postal_code" class="form-control" value="{{ old('postal_code') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="personal_code" class="form-label">Personal Code</label>
                                    <input type="text" name="personal_code" class="form-control" value="{{ old('personal_code') }}" required>
                                </div>

                                <div class="mb-3">
                                    <label for="referer_code" class="form-label">Referer Code</label>
                                    <input type="text" name="referer_code" class="form-control" value="{{ old('referer_code') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="agent_name" class="form-label">Agent Name</label>
                                    <input type="text" name="agent_name" class="form-control" value="{{ old('agent_name') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="agent_code" class="form-label">Agent Code</label>
                                    <input type="text" name="agent_code" class="form-control" value="{{ old('agent_code') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="passport_photo" class="form-label">Passport Photo</label>
                                    <input type="file" name="passport_photo" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="passport_verified" class="form-label">Passport Verified</label>
                                    <select name="passport_verified" class="form-select">
                                        <option value="1" {{ old('passport_verified') == '1' ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('passport_verified') == '0' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Register User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
