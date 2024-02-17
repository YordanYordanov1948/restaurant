@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
<div class="menu-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-3">Food Menu</h2>
        <h3 class="section-subtitle text-center text-muted mb-5">Most Popular Items</h3>

        <!-- Nav tabs for categories -->
        <ul class="nav nav-pills justify-content-center mb-4" id="menuTabs" role="tablist">
            @foreach($menuItemsByCategory as $category => $items)
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{ $category }}-tab" data-bs-toggle="tab" href="#{{ $category }}" role="tab" aria-controls="{{ $category }}" aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ ucwords(str_replace('_', ' ', $category)) }}</a>
            </li>
            @endforeach
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="menuTabsContent">
            @foreach($menuItemsByCategory as $category => $items)
            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="{{ $category }}" role="tabpanel" aria-labelledby="{{ $category }}-tab">
                <div class="row g-4">
                    @foreach($items as $item)
                    <div class="col-md-4">
                        <div class="menu-item card border-0 shadow-sm">
                            <img src="{{ asset('images/' . $item->image) }}" class="card-img-top" alt="{{ $item->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
