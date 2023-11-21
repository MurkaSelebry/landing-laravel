<ul>
    @foreach ($applications as $application)
        <li>{{ $application->name }}</li>
    @endforeach
</ul>
