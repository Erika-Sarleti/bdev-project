@extends('layouts.app')
@extends('layouts.base')
@section('pageTitle', 'ShowPage')
@section('pageMain')
    <div class="sign-in row-cols-2 d-flex justify-content-center align-items-center pt-4">
        
        <form method="POST" action="{{ route('register')}}" class="pt-5">
            @csrf
            <div class="form-group">
                <label for="name" class="text-white">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="surname" class="text-white">Surname</label>
                <input type="text" class="form-control" id="surname" name="surname" placeholder="Enter surname">
            </div>
            <div class="form-group">
                <label for="email" class="text-white">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="password" class="text-white">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation" class="text-white">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label for="cv" class="text-white">cv</label>
                <input type="text" class="form-control" id="cv" name="cv" placeholder="Enter cv">
            </div>
            <div class="form-group">
                <label for="locality" class="text-white">locality</label>
                <input type="text" class="form-control" id="locality" name="locality" placeholder="Enter locality">
            </div>
            <div class="form-group">
                <label for="phone" class="text-white">phone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label for="role" class="text-white">role</label>
                <select name="role" id="role">
                    <option value="">Select role</option>
                    <option value="Developer">Developer</option>
                    <option value="Designer">Designer</option>
                    <option value="Project Manager">Project Manager</option>
                    <option value="Front End">Front End</option>
                </select>
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
