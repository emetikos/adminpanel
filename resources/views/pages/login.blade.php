@extends('layouts.layout')


@section('content')

{{--    <div class="flex justify-center items-center p-4 bg-gray-100 rounded w-1/2">--}}
{{--        <h1 class=" text-2xl font-bold">Login</h1>--}}
{{--    </div>--}}

    <div class="mx-auto p-4 bg-gray-100 rounded w-1/2">

        <div class="w-full mb-6">
            <h1 class=" text-2xl font-bold">Login</h1>
        </div>

        <div class="flex w-full">
            <form class="w-full" method="POST" action="{{ route('auth') }}">
                @csrf
                <label>email</label>
                <input type="text" class="w-full pl-2 rounded border border-solid border-gray-300 p-1" name="email" >

                <label>password</label>
                <input type="password" class="w-full pl-2 rounded border border-solid border-gray-300 p-1" name="password">

                <button type="submit" class="p-2 rounded bg-green-500 text-white w-1/4 mt-4"> login</button>
            </form>
        </div>

    </div>


@endsection