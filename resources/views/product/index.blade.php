@extends('layouts.app')
@section('title', 'Product Create Page')
@section('content')

    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Pitchfork Kickstarter
                        Taxidermy</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
                <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
                    bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach ($products as $pro)
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-gray-100 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6" src="/{{ $pro->product_img }}"
                                alt="content">
                            <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">
                                {{ $pro->first_name }}</h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">{{ $pro->username }}</h2>
                            <p class="leading-relaxed text-base">{{ $pro->email }}</p>
                            <div class="d-flex justify-around">
                                <a href="{{ route('product.create') }}" class="btn btn-dark mx-1">Back</a>
                                <a href="{{ route('product.edit', $pro->id) }}" class="btn btn-success mx-1">Edit</a>

                                <form action="{{ route('product.destroy', $pro->id) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger mx-1">
                                        Delete
                                    </button>
                                </form>
                            </div>
                            <div class="btn">
                                <a href="{{ route('product.show', $pro->id) }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
