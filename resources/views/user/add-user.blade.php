@extends('layouts.admin')

@section('title', 'Edit User | CibiGuess')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/addUser.css') }}">
@endsection

@section('content')
    <section class="group" id="sideContent">
        <div
            class="relative min-h-screen left-0 w-full transition-all duration-500 ease-in-out z-0 top-0 p-4 sm:group-[.open]:w-[calc(100%_-_250px)] sm:group-[.open]:left-[250px] sm:left-[78px] sm:w-[calc(100%_-_78px)]">
            <section class="mx-auto max-w-7xl mb-4">
                <div class="header">
                    <div class="t-header">
                        <p>TAMBAH USER
                        </p>
                    </div>
                </div>

                @if (Session::has('fail'))
                    <span class="alert alert-danger p-2">{{ Session::get('fail') }}</span>
                @endif

                <br>

                <div class="form-section">

                    <form action="{{ route('AddUser') }}" method="post">
                        @csrf

                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Username</span>
                            </div>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Username..."
                                class="input input-bordered w-full max-w-xs" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </label>
                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">E-mail</span>
                            </div>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="E-mail..."
                                class="input input-bordered w-full max-w-xs" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Role</span>
                            </div>
                            <input type="text" name="roleId" value="{{ old('roleId') }}" placeholder="Role..."
                                class="input input-bordered w-full max-w-xs" />
                            @error('roleId')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>

                        <label class="form-control w-full max-w-xs">
                            <div class="label">
                                <span class="label-text">Password</span>
                            </div>
                            <input type="password" name="password" class="input input-bordered w-full max-w-xs" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </label>

                        <div class="button-btn">
                            <button class="btn btn-outline">Submit</button>
                            {{-- <button class="btn btn-outline">Cancel</button> --}}
                            <a href="{{ route('users') }}" class="btn btn-outline">Cancel</a>
                        </div>

                    </form>
                </div>

            </section>
        </div>
    </section>
@endsection
