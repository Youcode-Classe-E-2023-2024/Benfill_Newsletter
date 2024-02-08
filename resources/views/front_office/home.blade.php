@extends('layouts.default')
@section("content")

    <main>
        <div class="flex justify-end mx-2 my-4">
            @if(Auth::check())
                <form action="/logout" method="post">
                    @csrf
                    <button
                        class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-lg hover:bg-red-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                        Logout
                    </button>
                </form>
            @else
                <a href="/login"
                   class="px-6 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-lg hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Login
                </a>
            @endif
        </div>
        <div class="bg-white dark:bg-gray-800">
            <div class="relative px-4 py-6 overflow-hidden sm:px-6 sm:py-8 lg:p-12 xl:p-16">
                <h2 class="text-2xl font-semibold font-display text-black dark:text-white sm:text-3xl">
                    We&#x27;ve got more coming...
                </h2>
                <p class="mt-2 max-w-xl text-base text-gray-400">
                    Want to hear from us when we add new components? Sign up for our newsletter and we&#x27;ll email you
                    every time we release a new batch of components.
                </p>
                <form method="post" action="/members">
                    @csrf
                    <div class="mt-6 sm:flex jusitfy-start">
                        <div
                            class="flex flex-col justify-center w-3/4 max-w-sm space-y-3 md:flex-row md:w-full md:space-x-3 md:space-y-0">
                            <div class=" relative ">
                                <input type="text" id="&quot;form-subscribe-Subscribe"
                                       name="email"
                                       class=" rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                                       placeholder="Email"/>
                            </div>
                            <button
                                class="flex-shrink-0 px-4 py-2 text-base font-semibold text-white bg-purple-600 rounded-lg shadow-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 focus:ring-offset-purple-200"
                                type="submit">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
                <div class="absolute inset-y-0 right-0 hidden lg:block lg:left-2/3 xl:left-1/2">
                    <picture>
                        <source srcSet="/images/object/5.webp" type="image/webp"/>
                        <source srcSet="/images/object/5.png"/>
                        <img class="object-cover w-1/2 mx-auto maw-w-44" src="/images/object/5.png"
                             alt="shopping item"/>
                    </picture>
                </div>
            </div>
        </div>
    </main>
@stop
