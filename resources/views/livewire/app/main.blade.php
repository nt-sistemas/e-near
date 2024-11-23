<div>
    <x-header title="Dashboard" subtitle="Check this on mobile">
        <x-slot:middle class="!justify-end">
            <x-input icon="o-bolt" placeholder="Search..." />
        </x-slot:middle>
        <x-slot:actions>
            <x-button icon="o-funnel" />
            <x-button icon="o-plus" class="btn-primary" />
        </x-slot:actions>
    </x-header>

    <div class="flex flex-wrap gap-4">

        @foreach ($companies as $company)
            <x-stat title="{{ $company->name }}" value="{{ rand(1, 100) }}" icon="o-building-storefront"
                class="w-1/3" />
        @endforeach

    </div>
</div>
