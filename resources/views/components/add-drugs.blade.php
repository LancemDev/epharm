<!-- component -->
<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
  <div class="relative py-3 sm:w-96 mx-auto text-center">
    <span class="text-2xl text-gray-900 dark:text-white ">Add Drugs here</span>
    <div class="mt-4 bg-white dark:bg-gray-800 shadow-md rounded-lg text-left">
      <div class="h-2 bg-purple-400 rounded-t-md"></div>
      <div class="px-8 py-6 ">
        <form action="{{ route('drugs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="block font-semibold text-gray-900 dark:text-white"> Drug Name </label>
            <input type="text" placeholder="Drug Name" name="name" class="border dark:bg-gray-800  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block mt-3 font-semibold text-gray-900 dark:text-white"> Drug Description </label>
            <input type="text" placeholder="Description" name="description" class="border dark:bg-gray-800  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block font-semibold text-gray-900 dark:text-white"> Drug Price </label>
            <input type="number" placeholder="Price" name="price" class="border dark:bg-gray-800  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block font-semibold text-gray-900 dark:text-white"> Drug Quantity </label>
            <input type="number" placeholder="Quantity" name="quantity" class="border dark:bg-gray-800  w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
            <label class="block font-semibold text-gray-900 dark:text-white"> Drug Image </label>
            <input type="file" name="image" class="dark:bg-gray-800 w-full h-12 px-3 py-2 mt-1 hover:outline-none">
            <label class="block font-semibold text-gray-900 dark:text-white"> Drug Category </label>
            <select name="category" id="category" class="border dark:bg-gray-800 w-full h-10 px-3 py-2 mt-2 hover:outline-none focus:outline-none focus:ring-indigo-500 focus:ring-1 rounded-md">
                @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <input type="submit" name="add-drugs" value="Add Drugs" class="mt-4 bg-red-500 text-white py-2 px-6 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-indigo-300" >
            
        </form>
      </div>
      
  </div>
</div> 