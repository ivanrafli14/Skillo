@extends('layouts.app')

@section('title', 'Verify Email')
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-md px-6 py-8 bg-white shadow-md rounded-lg">
        <h2 class="text-lg font-semibold text-gray-700 border-b pb-4 mb-4">Verify Your Email Address</h2>

        @if (session('resent'))
            <div class="mb-4 text-sm text-green-600 bg-green-100 border border-green-300 rounded-lg p-3">
                A fresh verification link has been sent to your email address.
            </div>
        @endif

        <p class="text-gray-600 text-sm mb-6">
            Before proceeding, please check your email for a verification link.
        </p>
        <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
        <p class="text-gray-600 text-center text-sm mb-3 mt-5">
            If you did not receive the email,
        </p>

        <div class="flex justify-center">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="text-blue-600 hover:underline">
                    click here to request another
                </button>
            </form>
        </div>
    </div>
</div>
@section('content')

@endsection
