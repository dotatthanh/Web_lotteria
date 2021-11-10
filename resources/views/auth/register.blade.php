@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Họ và tên</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('CMND') ? ' has-error' : '' }}">
                            <label for="CMND" class="col-md-4 control-label">Số CMND</label>

                            <div class="col-md-6">
                                <input id="CMND" type="number" class="form-control" name="CMND" value="{{ old('CMND') }}" required>

                                @if ($errors->has('CMND'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('CMND') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sdt') ? ' has-error' : '' }}">
                            <label for="sdt" class="col-md-4 control-label">Số điện thoại</label>

                            <div class="col-md-6">
                                <input id="sdt" type="number" class="form-control" name="sdt" value="{{ old('sdt') }}" required>

                                @if ($errors->has('sdt'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sdt') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('chucvu') ? ' has-error' : '' }}">
                            <label for="chucvu" class="col-md-4 control-label">Chức vụ</label>

                            <div class="col-md-6">
                                <select class="form-control" name="chucvu"  {!! old('chucvu') !!} required>
                                    <option value="">Chọn chức vụ</option>
                                    <option value="2">Quản lý</option>
                                    <option value="3">Thu Ngân</option>
                                    <option value="4">Kho Hàng</option>
                                    <option value="5">Bán hàng/Giao Hàng</option>
                                </select>

                                @if ($errors->has('chucvu'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('chucvu') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Xác nhận mật khẩu</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('diachi') ? ' has-error' : '' }}">
                            <label for="diachi" class="col-md-4 control-label">Địa chỉ</label>

                            <div class="col-md-6">
                                <input id="diachi" type="text" class="form-control" name="diachi" value="{{ old('diachi') }}" required>

                                @if ($errors->has('diachi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diachi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
