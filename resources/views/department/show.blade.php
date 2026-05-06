<x-app>

    <x-slot:title> {{ $title }} </x-slot>

    <a class="btn btn-warning mb-3" href="{{ route('department.index') }}" 
    role="button">Back</a>

    {{-- department --}}
    <h6>Data Department</h6>
    <ul class="list-group mb-3">
        <li class="list-group-item">Name: {{ $departments->name }}</li>
        <li class="list-group-item">
            Created At: {{ $departments->created_at->format('d F Y H:i:s') }}
        </li>
        <li class="list-group-item">
            Last Update: {{ $departments->updated_at->diffForHumans() }}
        </li>
    </ul>

    {{-- lecturer --}}
    <h6>Data Lecturers</h6>
    <ul class="list-group">
        @foreach ($departments ->Lecturers as $lecturer)
            <li class="list-group-item"> {{ $lecturer->name }}</li>
        @endforeach

        </li>
    </ul>


</x-app>