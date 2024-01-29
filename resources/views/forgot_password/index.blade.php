@extends('layouts.app')

@section('title', 'Login')

@section('styles')

@endsection

@section('content')

    <div class="flex min-h-full flex-col bg-gray-50">
        <div class="lg:pl-8 lg:pr-8 sm:pl-6 sm:pr-6 pt-12 pb-12 justify-center flex-col">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-14 w-auto fill-black" src="{{ asset('assets/img/logo.png') }}" alt="Highnoon Logo">
                <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Forgot your
                    password?</h2>
            </div>

            <div class="mt-10 sm:max-w-[480px] sm:w-full sm:ml-auto sm:mr-auto">
                <div class="bg-white sm:pl-12 sm:pr-12 sm:rounded-lg shadow-lg pt-16 pb-16">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                                address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="off"
                                    placeholder="enter your email" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Reset
                                password</button>
                        </div>
                    </form>

                    <p class="mt-10 text-center text-sm text-gray-500">
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-900"><span aria-hidden="true" class="mr-2">&larr;</span>Back to login</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
