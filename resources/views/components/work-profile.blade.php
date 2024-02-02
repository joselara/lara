@props([
    'name' => '',
    'title' => '',
    'location' => '',
    'description' => '',
    'start' => '',
    'end' => '',
    'bullets' => [],
])

<div class="grid gap-3">
    <div>
        <div class="text-2xl font-bold tracking-tight text-zinc-800 sm:text-3xl">
            {{ $name }}
        </div>
        <div class="text-xl font-semibold tracking-tight text-zinc-600 sm:text-2xl">
            {{ $title }}
        </div>
    </div>
    <div class="text-sm sm:text-base text-zinc-600">
        <div>
            {{ $start }} &mdash; {{ $end }}
        </div>
        <div>{{ $location }}</div>
    </div>
    <div>
        @if ($description)
            <p>{{ $description }}</p>
        @endif

        @if ($bullets)
            <ul role="list" class="list-disc pl-4 text-zinc-600">
                @foreach ($bullets as $bullet)
                    <li>{{ $bullet }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
