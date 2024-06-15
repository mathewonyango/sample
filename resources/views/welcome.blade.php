@php
$users = [
    [
        'name' => 'John Doe',
        'career' => 'Software Engineer',
    ],
    [
        'name' => 'Jane Smith',
        'career' => 'Web Developer',
    ],
    [
        'name' => 'Bob Johnson',
        'career' => 'Artist',
    ],
];
@endphp

@foreach ($users as $user)
    <div>
        <h2>{{ $user['name'] }}</h2>
        <p>{{ $user['career'] }}</p>
    </div>
@endforeach
