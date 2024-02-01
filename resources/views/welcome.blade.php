@extends('layouts.app')

@section('content')
    <x-container>
        <div class="mt-10">
            <x-container>
                <p class="text-zinc-600">
                    Highly skilled software architect with over 15 years of experience in software design, network
                    architecture, and coding, passionate about solving complex challenges and creating innovative solutions.
                    I am actively seeking opportunities to collaborate with exceptional teams in the pursuit of cutting-edge
                    product development. My mission is to continue pushing the boundaries of technology while fostering a
                    collaborative and innovative work culture. Beyond my professional pursuits, I thrive in the world of
                    containerized environments and cherish moments with my two little pups, Lola and Fluffy.
                </p>
            </x-container>
        </div>
    </x-container>

    <x-container>
        <x-socials />
    </x-container>

    <x-container>
        <div class="mt-20">
            <x-container>
                <x-experience-title />
                <div class="grid gap-14 mt-6">
                    @foreach ($jobs as $job)
                        <x-work-profile name="{{ $job['name'] }}" title="{{ $job['title'] }}" start="{{ $job['start'] }}"
                            end="{{ $job['end'] }}" location="{{ $job['location'] }}" :bullets="$job['bullets']" />
                    @endforeach
                </div>
            </x-container>
        </div>
    </x-container>
@endsection
