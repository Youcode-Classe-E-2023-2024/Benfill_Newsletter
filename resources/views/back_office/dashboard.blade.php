@extends("layouts.dashboard")
@section("content")
    <style>
        section {
            font-family: 'Inter', sans-serif;
        }
    </style>
    <div class="min-h-screen flex flex-row bg-gray-100">
        <x-sidebar :admin="$admin" :members="$members" :medias="$medias"/>

        <div class="flex-col justify-center  w-full">
            <!-- Snippet -->
            <section
                id="analyticsSection"
                class="flex flex-col antialiased bg-gray-100 text-gray-600 ">
                <div class="max-w-3xl mx-auto p-4 sm:px-6 h-full">
                    <!-- Chart widget -->
                    <div
                        class="flex flex-col col-span-full xl:col-span-8 bg-white shadow-lg rounded-sm border border-gray-200">
                        <header class="px-5 py-4 border-b border-gray-100 flex items-center">
                            <h2 class="font-semibold text-gray-800">Analytics</h2>
                        </header>
                        <div class="px-5 py-1">
                            <div class="flex flex-wrap">
                                <!-- Unique Visitors -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">{{count($templates)}}</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Templates</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Total Pageviews -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">{{count($mail_sent)}}</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Email Sent</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Bounce Rate -->
                                <div class="flex items-center py-2">
                                    <div class="mr-5">
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">{{count($users)}}</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Users</div>
                                    </div>
                                    <div class="hidden md:block w-px h-8 bg-gray-200 mr-5" aria-hidden="true"></div>
                                </div>
                                <!-- Visit Duration-->
                                <div class="flex items-center">
                                    <div>
                                        <div class="flex items-center">
                                            <div class="text-3xl font-bold text-gray-800 mr-2">{{count($members)}}</div>
                                        </div>
                                        <div class="text-sm text-gray-500">Subscribers</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <x-media :medias="$medias"/>
            <x-mediaForm/>
            <x-editorForm/>
            <x-template :templates="$templates"/>
            <x-users :users="$users" :roles="$roles"/>
            <x-members :members="$members" />
            <x-mail-form :medias="$medias" :templates="$templates"/>

        </div>
    </div>
@stop
