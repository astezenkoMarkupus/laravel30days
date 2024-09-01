<x-layout>
  <x-slot:title>
    Jobs
  </x-slot:title>
  <ul>
    @foreach($jobs as $job)
      <li style="margin-bottom: 20px">
        <x-link href="/jobs/{{ $job['id'] }}" class="text-blue-500 hover:underline">
          <div><em>Employer: {{ $job->employer->name }}</em></div>
          <strong>{{ $job['title'] }}:</strong> {{ $job['salary'] }} per year.
        </x-link>
      </li>
    @endforeach
  </ul>

  <div class="jobs-pagination">
    {{ $jobs->links() }}
  </div>
</x-layout>
