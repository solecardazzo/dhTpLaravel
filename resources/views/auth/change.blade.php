@extends('layouts.main')

@section('contenido')
<div id='product-container' class="container-fluid p-0">
    <div class="container pt-3 pb-3">
        <form class='form-group' method="POST" action="{{route('update',['id' => $user->id])}}" enctype="multipart/form-data" >
            @method('GET')
            @csrf
            <article class="row">
                <section class="col-md-3 col-sm-6">
                    <article class="product-grid mb-4 mt-4">
                        <section class="product-image">
                            <img class="pic-1" src="{{asset('/storage/avatars/'.Auth::User()->avatar)}}">
                        </section>
                    </article>
                    <article class='container-fluid p-0 mb-4'>
                        <label for="imageLoc" class= "col-form-label text-md" >Cambiar avatar</label>
                        <input type="file" value="avatar" class='form-control-file' name="avatar" id="avatar">
                    </article>
                </section>
                <section class="col-md-9 col-sm-6">
                    <article class="p-2 pl-4">
                        <h5>Nombre</h5>
                        <h6 class="col-form-label text-md"><input type="text" style="width: 70%;" name="name" id="name" value="{{$user->name}}"></h6>
                        <strong>{{ $errors->first('name') }}</strong>
                        <hr>
                        <h5>Password</h5>
                        <h6 class="col-form-label"><input type="password" style="width: 70%;" name="password" id="password" placeholder="Password"></h6>
                        <strong>{{ $errors->first('password') }}</strong>
                        <hr>
                        <h6 class="col-form-label"><input type="password" style="width: 70%;" name="npassword" id="npassword" placeholder="New Password"></h6>
                        <strong>{{ $errors->first('npassword') }}</strong>
                        <h6 class="col-form-label"><input type="password" style="width: 70%;" name="confirm-password" id="confirm-password" placeholder="Confirm Password"></h6>
                        <strong>{{ $errors->first('confirm-password') }}</strong>
                        <hr>
                        <h5>Email</h5>
                        <h6 class="col-form-label"><input type="text" style="width: 70%;" name="email" id="email" value="{{$user->email}}"></h6>
                        <strong>{{ $errors->first('email') }}</strong>
                        <hr>
                        <dl class="item-property">
                            <dt>Creado el</dt>
                            <dd>{{$user->created_at}}</dd>
                        </dl>
                        <dl class="item-property">
                            <dt>Modificado el</dt>
                            <dd>{{$user->updated_at}}</dd>
                        </dl>
                        <section class='container-fluid p-0'>
                            <a href="{{route('profile')}}" class="btn btn-info btn-md">Volver</a>
                            <input type="submit" class="btn btn-primary btn-md" value="Actualizar">
                        </section>
                    </article>
                </section>

            </article>
        </form>
    </div>
</div>

<script src ="{{asset('js/login.js')}}"></script>

@endsection
