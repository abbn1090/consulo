@extends('app2')

@section('content')

﻿<!DOCTYPE HTML>

      <style type="text/css">

            body{
                background: none repeat scroll 0% 0% #F7F7F7;
            }
            .main.container.cn{
                max-width: 415px;
                background-color: rgb(255, 255, 255);
                padding: 2em;
                border-radius: 8px;
                border: 1px solid #D4D4D5;
                display: block;
                margin:auto;
                margin-top: 6em;
            }

      </style>

    <div class="main container cn">

        <a class="ui" style="" href="/"><img src="{{ asset('img/logo_header.png') }}"></img></a>

            @if (count($errors) > 0)
						<div class="alert alert-danger">
                            <strong>Whoops!</strong> Il y a un problème avec votre entrée.<br><br>
							
						</div>
            @endif

        <form class="ui form" role="form" method="POST" action="{{ url('/auth/register') }}">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <h4 class="ui dividing header">Inscription</h4>		
            
            <label >Name</label>

            <input type="text" class="form-control" name="name" value="{{ old('name') }}">

            <label >Addresse E-Mail</label>

            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

            <label>Mot de passe</label>

            <input type="password" class="form-control" name="password">
            
            <label>Mot de passe</label>

            <input type="password" class="form-control" name="password_confirmation">
            

            <div class="ui submit button green" style="margin-top: 1em;">

                <button type="submit" class="btn btn-primary">Register</button>

            </div>
            
        </form>
	
    </div>


@endsection
