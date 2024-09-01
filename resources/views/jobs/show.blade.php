<x-layout>
  <x-slot:title>
    Job: {{ $job->title }}
  </x-slot:title>

  <div>
    <strong>Salary:</strong> {{ $job->salary }} per year
  </div>

  @can('edit-job', $job)
    <br>
    <x-link class="text-blue-500 hover:underline" href="/jobs/{{ $job->id }}/edit">Edit</x-link>
  @endcan

  <br> <br>
  <x-link class="text-blue-500 hover:underline" href="/jobs">Back to Jobs List</x-link>
</x-layout>
