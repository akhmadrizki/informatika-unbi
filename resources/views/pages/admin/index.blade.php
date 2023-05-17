<x-admin::layout title="Dashboard" header="Dashboard">
    <x-slot name="breadcrumbs">
        {{ Breadcrumbs::render() }}
    </x-slot>

    <div class="card">
        <div class="card-body">
            <h3>Wellcomeback <span class="text-capitalize font-italic">{{ Auth::user()->name }}</span> 😃</h3>
        </div>
    </div>
</x-admin>
