<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\User;

class Dropdown extends Component
{
    public $search;

    protected $updatesQueryString = ['search'];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $users = [];

        if ($this->search) {
            $users = User::select(['id', 'name', 'email'])
                ->when($this->search, function($query, $search) {
                    return $query->where('email', 'like', '%'.$search.'%')
                                ->orWhere('name', 'like', '%'.$search.'%');
                })
                ->limit(5)
                ->get();
        }

        return view('livewire.dropdown', [
            'users' => $users,
        ]);
    }
}
