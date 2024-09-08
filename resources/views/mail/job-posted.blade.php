<h1>Congrats!</h1>
<p>
  Your job is now live on our website:
</p>
<h2>{{ $job->title }}</h2>
<p>
  <a href="{{ url("/jobs/$job->id") }}">View your job</a>
</p>
