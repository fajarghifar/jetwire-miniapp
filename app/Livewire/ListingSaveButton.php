<?php

namespace App\Livewire;

use Livewire\Component;

class ListingSaveButton extends Component
{
    public $listingId;

    public function render()
    {
        $savedListing = auth()->user()->savedListings()->get()->contains($this->listingId);

        return view('livewire.listing-save-button', compact('savedListing'));
    }

    public function saveListing()
    {
        auth()->user()->savedListings()->attach($this->listingId);
        $this->dispatch('listingSaved');
    }

    public function unsaveListing()
    {
        auth()->user()->savedListings()->detach($this->listingId);
        $this->dispatch('listingSaved');
    }
}
