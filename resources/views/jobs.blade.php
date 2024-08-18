<x-layout>
  <x-slot:title>
    Jobs
  </x-slot:title>

  <ul>
    @foreach($jobs as $job)
      <li>
        <x-link href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
          <strong>{{ $job['title'] }}:</strong> {{ $job['salary'] }} per year.
        </x-link>
      </li>
    @endforeach
  </ul>
</x-layout>
