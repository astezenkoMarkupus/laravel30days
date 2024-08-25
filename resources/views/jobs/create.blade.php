<x-layout>
  <x-slot:title>
    Create a Job
  </x-slot:title>

  <form method="POST" action="/jobs">
    @csrf

    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="title">Job Title</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="title" id="title" placeholder="Driver" required/>
              <x-form-error name="title"/>
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="salary">Salary (per year)</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="salary" id="salary" placeholder="$10000 USD" required/>
              <x-form-error name="salary"/>
            </div>
          </x-form-field>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <x-form-button>Save</x-form-button>
    </div>
  </form>

  <br>
  <x-link class="text-blue-500 hover:underline" href="/jobs">Back to Jobs List</x-link>
</x-layout>