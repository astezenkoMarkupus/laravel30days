<x-layout>
  <x-slot:title>
    Edit Job: {{ $job->title }}
  </x-slot:title>

  <form method="POST" action="/jobs/{{ $job->id }}">
    @csrf
    @method('PATCH')

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Driver" value="{{ $job->title }}" required>
              </div>

              @error('title')
                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>

          <div class="sm:col-span-4">
            <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary (per year)</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="$10000 USD" value="{{ $job->salary }}" required>
              </div>

              @error('salary')
                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <x-link class="mr-auto text-sm font-semibold leading-6 text-red-500" type="button" form="delete-job-form">Delete</x-link>
      <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
    </div>
  </form>

  <form id="delete-job-form" method="POST" action="/jobs/{{ $job->id }}" class="hidden">
    @csrf
    @method('DELETE')
  </form>

  <br>
  <br>
  <x-link class="text-blue-500 hover:underline" href="/jobs">Back to Jobs List</x-link>
</x-layout>