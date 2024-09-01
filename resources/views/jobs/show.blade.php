@php use Illuminate\Support\Facades\Auth; @endphp
<x-layout>
  <x-slot:title>
    Job: {{ $job->title }}
  </x-slot:title>

  <div>
    <strong>Salary:</strong> {{ $job->salary }} per year
  </div>

  @if($isAuthor)
    <br>
    <x-link class="text-blue-500 hover:underline" href="/jobs/{{ $job->id }}/edit">Edit</x-link>
  @endif

  <br> <br>
  <x-link class="text-blue-500 hover:underline" href="/jobs">Back to Jobs List</x-link>
</x-layout>
