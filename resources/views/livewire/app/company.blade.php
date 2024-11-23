<div>
    <x-header title="Empresas" separator />

    @foreach ($companies as $company)
        <div>{{ $company->name }}</div>
    @endforeach
</div>
