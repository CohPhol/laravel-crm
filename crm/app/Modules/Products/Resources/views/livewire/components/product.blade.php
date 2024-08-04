@extends('layouts.app')
@php
$disabled = $errors->any() || empty($this->name) || empty($this->description) || empty($this->price) || empty($this->quantity) ? true : false;
$disabled = false;
@endphp
@section('content')
<div>
    <div class="row">
        <div class="col-12 my-5">
            <div class="text-center mb-3">
                <h1 class="text-primary">Create</h1>
            </div>
            <div>
                <form wire:submit="submit">
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="name" class="form-label">Name <i class="text-danger">*</i></label>
                            <input type="text" id="name" class="form-control" wire:model.debounce.500ms="name" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" id="description" class="form-control" wire:model.debounce.500ms="description" />
                        </div>
                    </div>
        
                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="price" class="form-label">Price <i class="text-danger">*</i></label>
                            <input type="text" id="price" class="form-control" wire:model.debounce.500ms="price" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <label for="quantity" class="form-label">Quantity <i class="text-danger">*</i></label>
                            <input type="text" id="quantity" class="form-control" wire:model.debounce.500ms="quantity" />
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" @disabled($disabled)>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
