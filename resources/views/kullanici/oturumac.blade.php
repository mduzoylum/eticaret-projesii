@extends('layouts.master')
@section('title','Oturum-Ac')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Oturum Aç</div>
                    <div class="panel-body">
                        @include('layouts.partials.errors')
                        <form class="form-horizontal" role="form" method="POST" action="{{route('kullanici.oturumac')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="mail" class="col-md-4 control-label">Email</label>
                                <div class="col-md-6">
                                    <input id="mail" type="mail" class="form-control" name="mail" value="" required autofocus>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="sifre" class="col-md-4 control-label">Şifre</label>
                                <div class="col-md-6">
                                    <input id="sifre" type="password" class="form-control" name="sifre" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="benihatirla" checked> Beni hatırla
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Giriş yap
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
