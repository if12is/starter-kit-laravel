@extends('layouts.administrator.master')

@section('content')
    <x-form-section title="{{ $title }}">

        <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">
                            الاسم
                        </label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                            name="name" value="{{ old('name') }}" @required(true)>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="no_hp">
                            رقم الهاتف
                        </label>
                        <input type="number" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp"
                            name="no_hp" value="{{ old('no_hp') }}" @required(true)>
                        @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">
                            البريد الإلكتروني
                        </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email" value="{{ old('email') }}" @required(true)>
                        <small class="text-muted">
                            سيتم استخدام هذا البريد الإلكتروني كاسم مستخدم
                        </small>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">
                            كلمة المرور
                        </label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password"
                            value="password" name="password" @required(true)>
                        <small class="text-muted">
                            قم بتغييره إذا كنت ترغب في تغيير كلمة المرور
                        </small>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <label for="tanggal_lahir">
                        تاريخ الميلاد
                    </label>
                    <div class="input-group input-append date" data-date-format="dd-mm-yyyy">
                        <input class="form-control @error('tanggal_lahir') is-invalid @enderror" type="text"
                            readonly="" autocomplete="off" id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir') }}" @required(true)>
                        <button class="btn btn-outline-secondary" type="button">
                            <i class="far fa-calendar-alt"></i>
                        </button>
                        @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jenis_kelamin">
                            الجنس
                        </label>
                        <select class="form-select select2 @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin"
                            name="jenis_kelamin" @required(true)>
                            <option value=""></option>
                            <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>
                                ذكر
                            </option>
                            <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>
                                أنثى
                            </option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="role">
                            الدور
                        </label>
                        <select class="form-select select2 @error('role') is-invalid @enderror" id="role"
                            name="role" @required(true)>
                            <option value=""></option>
                            @foreach (getRoles() as $role)
                                <option value="{{ $role->id }}" {{ old('role') == $role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('role')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="image">
                            الصورة
                        </label>
                        <input class="form-control @error('image') is-invalid @enderror" type="file" name="image"
                            id="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">
                            العنوان
                        </label>
                        <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" @required(true)>{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <x-btn-submit-form />

        </form>

    </x-form-section>
@endsection
