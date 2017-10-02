@extends('layouts.default',['title' => 'About'])

@section('content')
 <div class="container">
 <h1>What is a {{config('app.name')}}</h1>
 <p>{{config('app.name')}} is a clone App a <a href="https://Laramap.com">Laramap</a></p>
   <div class="row">
   <div class="col-md-6">
   <p class="alert alert-warning">
    <strong> <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
This app has been build by elmazaar</strong> 
   </p>
   </div>
   </div>
   <p>Feel free to help improve code source in <a href="https://github.com/elmaroufa/carte-marouf">source</a></p><hr>
   <h2>Whath is a Laramap</h2>
   <p>Laramap in the website whhich {{config('app.name')}} about_patch</p>
   <p>more info <a href="#">here</a></p>
 </div>
@stop