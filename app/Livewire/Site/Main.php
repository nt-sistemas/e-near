<?php

namespace App\Livewire\Site;

use App\Models\Company;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Main extends Component
{
    use WithPagination;

    public $companies;
    public ?string $search = null;

    public function mount()
    {
        $this->companies = $this->getData();
    }



    #[Layout('components.layouts.site')]
    public function render()
    {
        $companies = Company::all();
        return view('livewire.site.main');
    }

    #[Computed]
    public function getData()
    {

        return Company::query()
            ->when(
                $this->search,
                fn(Builder $q) => $q->where(
                    DB::raw('lower(name)'),
                    'like',
                    '%' . strtolower($this->search) . '%'
                )
            )
            ->get()
            ->random(10);
    }
}
