@extends('layouts.app')

@section('title', 'Login')

@section('styles')

@endsection

@section('content')

    <div class="flex min-h-full flex-col bg-gray-50">
        <div class="lg:pl-8 lg:pr-8 sm:pl-6 sm:pr-6 pt-12 pb-12 justify-center flex-col">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-14 w-auto fill-black" src="{{ asset('assets/img/logo.png') }}" alt="Highnoon Logo">
                <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create account to register</h2>
            </div>

            <div class="mt-10 sm:max-w-[480px] sm:w-full sm:ml-auto sm:mr-auto">
                <div class="bg-white sm:pl-12 sm:pr-12 sm:rounded-lg shadow-lg pt-16 pb-16">
                    <form class="space-y-6" action="#" method="POST">
                        <div>
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First
                                name</label>
                            <div class="mt-2">
                                <input id="first_name" name="first_name" type="text" autocomplete="off"
                                    placeholder="enter your first name" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        
                        <div>
                            <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">Last
                                name</label>
                            <div class="mt-2">
                                <input id="last_name" name="last_name" type="text" autocomplete="off"
                                    placeholder="enter your last name" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        
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
                            <label for="contact_no" class="block text-sm font-medium leading-6 text-gray-900">Contact
                                no</label>
                            <div class="mt-2">
                                <input id="contact_no" name="contact_no" type="text" autocomplete="off"
                                    placeholder="enter your contact no" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>

                            <div class="mt-2">
                                <input id="password" name="password" type="password" autocomplete="off"
                                    placeholder="your password" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        
                        <div>
                            <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>

                            <div class="mt-2">
                                <input id="confirm_password" name="confirm_password" type="password" autocomplete="off"
                                    placeholder="confirm your password" required
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
                        </div>
                    </form>

                    <p class="mt-10 text-center text-sm text-gray-500">
                        Already have an account? <a href="{{ route('login') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in</a>
                    </p>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
