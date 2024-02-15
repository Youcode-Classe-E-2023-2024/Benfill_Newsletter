<div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden">
    <div class="flex items-center justify-center h-20 shadow-md">
        <h1 class="text-3xl uppercase text-indigo-500">Logo</h1>
    </div>
    <ul class="flex flex-col py-4">
        @if($admin->hasRole("admin"))
            <li>
                <a id="dashboardButton"
                   class="cursor-pointer flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bx-home"></i></span>
                    <span class="text-sm font-medium">Dashboard</span>
                </a>
            </li>
        @endif
        <li>
            <a id="templateButton"
               class="cursor-pointer flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="fa-regular fa-envelope" style="color: #8f8f8f;"></i></span>
                <span class="text-sm font-medium">Mail Templates</span>
            </a>
        </li>
        <li>
            <a id="membersButton"
               class="cursor-pointer flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bx-user"></i></span>
                <span class="text-sm font-medium">Members</span>
                <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">{{count($members)}}</span>
            </a>
        </li>
        <li>
            <a id="mediaButton"
               class="cursor-pointer flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="fa-solid fa-photo-film" style="color: #8f8f8f;"></i></span>
                <span class="text-sm font-medium">Media</span>
                <span class="ml-auto mr-6 text-sm bg-blue-100 rounded-full px-3 py-px text-blue-500">{{count($medias)}}</span>
            </a>
        </li>

        @if($admin->hasRole("admin"))
            <li>
                <a id="roleButton"
                   class="cursor-pointer flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="fa-solid fa-person-circle-exclamation" style="color: #8f8f8f;"></i></span>
                    <span class="text-sm font-medium">Role Management</span>
                </a>
            </li>
        @endif
        <li>
            <form action="/logout" method="post">
                @csrf
                <button
                    class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                            class="bx bx-log-out"></i></span>
                    <span class="text-sm font-medium">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</div>
