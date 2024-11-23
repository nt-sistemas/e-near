<div class="p-8">

    <div class="flex justify-center mb-8">
        <h1 class="text-4xl font-black text-secondary"><span class="text-primary">e</span>Near</h1>
    </div>


    <div class="flex justify-center mb-8 w-full">
        <div class="w-1/2">
            <x-input wire:model.live="search" placeholder="Digite a sua busca..." icon="o-magnifying-glass" />
        </div>
    </div>

    <div class="flex w-full flex-wrap gap-4 justify-center">
        @foreach ($this->getData() as $company)
            <div class="card bg-white shadow-lg w-64 ">
                <div class="card-body rounded-md">
                    <h5 class="text-xl bold">{{ $company->name }}</h5>
                    <p class="card-text">{{ $company->phone }}</p>
                    <a href="#" class="btn btn-primary">View</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
