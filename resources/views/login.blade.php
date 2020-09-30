
@extends('layout')
    <form action="{{ route('post-login') }}" method="POST">
        @csrf
        <div>
            <input type="text" placeholder="User name" name="name">
        </div>
        <div>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit"> submit</button>
        </div>
    </form>
