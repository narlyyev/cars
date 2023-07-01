<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-xl">
        <a class="navbar-brand text-white" href="{{ route('home')}}">
            <i class="bi-car-front pe-1"></i>Cars
        </a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($categories as $category)
                                <div>
                                    <a class="dropdown-item" href="{{ route('category.show', $category->id) }}">
                                        {{ $category->name }}
                                    </a>
                                </div>
                            @endforeach
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @foreach($brands as $brand)
                                <div>
                                    <a class="dropdown-item" href="{{ route('brand.show', $brand->slug )}}">
                                        {{ $brand->name }}
                                    </a>
                                </div>
                            @endforeach
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>