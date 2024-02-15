<!-- component -->
<section id="mailForm"
         class="hidden max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md mt-20">
    <div class="flex justify-center">
        <img src="{{asset("storage/Speed-4x.png")}}" class="self-center" alt="">
    </div>
    <h1 class="text-xl font-bold text-white capitalize ">Send Mail</h1>
    <form action="/sendMail" method="post">
        @csrf
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Select Mail Template</label>
                <select name="templateSelect"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    @foreach($templates as $template)
                        <option value="{{$template['id']}}">{{$template['title']}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="text-white dark:text-gray-200" for="passwordConfirmation">Select Media</label>
                <select name="mediaSelect"
                        class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    @foreach($medias as $media)
                        <option value="{{$media['id']}}">
                            {{$media['name']}}
                        </option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="flex justify-even mt-6">
            <button
                class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-green-500 rounded-md hover:bg-green-700 focus:outline-none focus:bg-gray-600">
                Send Mail
            </button>
            <div id="mailFormCancelButton"
                 class="cursor-pointer ml-3 rounded-sm px-3 py-1 hover:bg-red-300 bg-red-500 focus:shadow-outline focus:outline-none">
                Cancel
            </div>
        </div>
    </form>
    </sectioname
