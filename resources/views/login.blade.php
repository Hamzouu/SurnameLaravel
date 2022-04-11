@extends('layouts.app')
   
@section('content') 
    <form action="/inscription" method="post">
        @csrf
        <input type="email"  name="email"    placeholder="Email">
        <input type="password"  name="password"    placeholder="Mot de passe">
        <input type="password"  name="password confirmation"    placeholder="Mot de passe (confirmation)">
        <input type="submit"  value="M'inscrire">
    </form>
@endsection
  