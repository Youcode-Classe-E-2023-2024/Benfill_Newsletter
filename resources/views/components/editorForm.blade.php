<!-- component -->
    <div id="templateForm"
        class="py-12 hidden">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="/template">
                        @csrf
                        <div class="mb-4">
                            <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                            <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title"
                                value="" required>
                            @error('title')
                                <p class="text-sm text-red-800 mt-2"> {{ $message }} </p>
                            @enderror
                        </div>


                        <div class="mb-8">
                            <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                            <textarea name="content" class="border-2 border-gray-500">

                            </textarea>
                            @error('content')
                                <p class="text-sm text-red-800 mt-2"> {{ $message }} </p>
                            @enderror
                        </div>


                        <div class="flex p-1">
                            <select class="border-2 border-gray-300 border-r p-2" name="action">
                                <option value="published">Save and Publish</option>
                                <option value="draft">Save Draft</option>
                            </select>
                            <button role="submit" class="p-3 bg-blue-500 text-white hover:bg-blue-400" required>Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('content');
    </script>
