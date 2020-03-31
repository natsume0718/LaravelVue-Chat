@extends('layouts.app')

@section('content')
<section class="absolute w-full top-0">
    <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4 pt-32">
                <div
                    class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 border-0">
                    <div class="rounded-t mb-0 px-6 py-6">
                        <div class="text-center mb-3">
                            <h6 class="text-gray-600 text-sm font-bold">Sign in</h6>
                        </div>
                        <hr class="mt-6 border-b-1 border-gray-400">
                    </div>
                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="username">User
                                    Name</label>
                                <input type="text" name="name" id="username" value="{{ old('name') }}"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="User Name" style="transition: all 0.15s ease 0s;" autofocus>
                                @error('name')
                                <span class="text-red-600" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="password">Password</label>
                                <input type="password" id="password"
                                    class="px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:shadow-outline w-full"
                                    placeholder="Password" style="transition: all 0.15s ease 0s;">
                                @error('password')
                                <span class="text-red-600" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input id="customCheckLogin" type="checkbox"
                                        class="form-checkbox text-gray-800 ml-1 w-5 h-5" name="remember"
                                        style="transition: all 0.15s ease 0s;" {{ old('remember') ? 'checked' :'' }}>
                                    <span class="ml-2 text-sm font-semibold text-gray-700">Remember me</span>
                                </label>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                                    type="submit" style="transition: all 0.15s ease 0s;">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="flex flex-wrap mt-6">
                    <div class="w-1/2">
                    </div>
                    <div class="w-1/2 text-right">
                        <a href="{{ route('register') }}" class="text-black">
                            <small>ユーザー登録はこちら</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
