<!-- component -->
<div class="flex justify-center">
    <div id="templateSection"
         class="hidden sm:px-6 ml-12 w-[85%]">
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="px-4 md:px-10 py-4 md:py-7">
            <div class="flex items-center justify-between">
                <p tabindex="0"
                   class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                    Template list</p>
                <div
                    class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                    <p>Sort By:</p>
                    <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                        <option class="text-sm text-indigo-800">Latest</option>
                        <option class="text-sm text-indigo-800">Oldest</option>
                        <option class="text-sm text-indigo-800">Latest</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
            <div class="sm:flex items-center justify-between">
                <div class="flex items-center">
                    <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800"
                       href=" javascript:void(0)">
                        <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                            <p>All</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                       href="javascript:void(0)">
                        <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Done</p>
                        </div>
                    </a>
                    <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4 sm:ml-8"
                       href="javascript:void(0)">
                        <div class="py-2 px-8 text-gray-600 hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                            <p>Pending</p>
                        </div>
                    </a>
                </div>
                <button id="addTemplateButton"
                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                    <p class="text-sm font-medium leading-none text-white">Add Template</p>
                </button>
            </div>
            <div class="mt-7 overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody>
                    @foreach($templates as $template)
                        <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 rounded">
                            <td>
                                <div class="ml-5">
                                    <div
                                        class="bg-gray-200 rounded-sm w-5 h-5 flex flex-shrink-0 justify-center items-center relative">
                                        <input placeholder="checkbox" type="checkbox"
                                               class="focus:opacity-100 checkbox opacity-0 absolute cursor-pointer w-full h-full"/>
                                        <div class="check-icon hidden bg-indigo-700 text-white rounded-sm">
                                            <svg class="icon icon-tabler icon-tabler-check"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5"
                                                 stroke="currentColor" fill="none" stroke-linecap="round"
                                                 stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                                <path d="M5 12l5 5l10 -10"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="flex items-center pl-5">
                                    <p class="text-base font-medium leading-none text-gray-700 mr-2">{{$template['title']}}</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                         fill="none">
                                        <path
                                            d="M6.66669 9.33342C6.88394 9.55515 7.14325 9.73131 7.42944 9.85156C7.71562 9.97182 8.02293 10.0338 8.33335 10.0338C8.64378 10.0338 8.95108 9.97182 9.23727 9.85156C9.52345 9.73131 9.78277 9.55515 10 9.33342L12.6667 6.66676C13.1087 6.22473 13.357 5.62521 13.357 5.00009C13.357 4.37497 13.1087 3.77545 12.6667 3.33342C12.2247 2.89139 11.6251 2.64307 11 2.64307C10.3749 2.64307 9.77538 2.89139 9.33335 3.33342L9.00002 3.66676"
                                            stroke="#3B82F6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path
                                            d="M9.33336 6.66665C9.11611 6.44492 8.8568 6.26876 8.57061 6.14851C8.28442 6.02825 7.97712 5.96631 7.66669 5.96631C7.35627 5.96631 7.04897 6.02825 6.76278 6.14851C6.47659 6.26876 6.21728 6.44492 6.00003 6.66665L3.33336 9.33332C2.89133 9.77534 2.64301 10.3749 2.64301 11C2.64301 11.6251 2.89133 12.2246 3.33336 12.6666C3.77539 13.1087 4.37491 13.357 5.00003 13.357C5.62515 13.357 6.22467 13.1087 6.66669 12.6666L7.00003 12.3333"
                                            stroke="#3B82F6" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </td>
                            <td class="pl-24">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none">
                                        <path
                                            d="M9.16667 2.5L16.6667 10C17.0911 10.4745 17.0911 11.1922 16.6667 11.6667L11.6667 16.6667C11.1922 17.0911 10.4745 17.0911 10 16.6667L2.5 9.16667V5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5H9.16667"
                                            stroke="#52525B" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <circle cx="7.50004" cy="7.49967" r="1.66667" stroke="#52525B"
                                                stroke-width="1.25"
                                                stroke-linecap="round" stroke-linejoin="round"></circle>
                                    </svg>
                                    <p class="text-sm leading-none text-gray-600 ml-2">{{$template['status']}}</p>
                                </div>
                            </td>
                            <td class="pl-5">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                         fill="none">
                                        <path
                                            d="M3.33331 17.4998V6.6665C3.33331 6.00346 3.59671 5.36758 4.06555 4.89874C4.53439 4.4299 5.17027 4.1665 5.83331 4.1665H14.1666C14.8297 4.1665 15.4656 4.4299 15.9344 4.89874C16.4033 5.36758 16.6666 6.00346 16.6666 6.6665V11.6665C16.6666 12.3295 16.4033 12.9654 15.9344 13.4343C15.4656 13.9031 14.8297 14.1665 14.1666 14.1665H6.66665L3.33331 17.4998Z"
                                            stroke="#52525B" stroke-width="1.25" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                        <path d="M10 9.1665V9.17484" stroke="#52525B" stroke-width="1.25"
                                              stroke-linecap="round"
                                              stroke-linejoin="round"></path>
                                        <path d="M6.66669 9.1665V9.17484" stroke="#52525B" stroke-width="1.25"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M13.3333 9.1665V9.17484" stroke="#52525B" stroke-width="1.25"
                                              stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    <p class="text-sm leading-none text-gray-600 ml-2">{{$template['used']}}</p>
                                </div>
                            </td>
                            <td class="pl-4">
                                <button
                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 focus:outline-none">
                                    View
                                </button>
                            </td>
                        </tr>
                        <tr class="h-3"></tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<style>.checkbox:checked + .check-icon {
        display: flex;
    }
</style>
<script>
    function dropdownFunction(element) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
        list.classList.add("target");
        for (i = 0; i < dropdowns.length; i++) {
            if (!dropdowns[i].classList.contains("target")) {
                dropdowns[i].classList.add("hidden");
            }
        }
        list.classList.toggle("hidden");
    }
</script>
