<div>
    <h1>Job Board</h1>
    <h3>My name is: {{$Name}}</h3>

    @foreach ($jobs as $job)
        <div>{{ $job['title'] }}:{{ $job['Salary']}}</div>
    @endforeach
</div>
