@extends('layouts.app')
@section('content')
    <main>
        <section class="hero bg-slate-100 h-[600px] flex justify-center items-center">
            <div class="text-center w-6/12 flex flex-col gap-4 items-center">
                <h1 class="text-5xl text-gray-600 font-medium">Welcome, My World!</h1>
                <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dolore placeat
                    reiciendis, ipsum
                    cupiditate illo aspernatur, nihil dignissimos commodi reprehenderit unde aut fuga assumenda suscipit
                    fugit. Neque error dolores qui?</p>
                <a href="#" class="px-12 py-4 bg-rose-700 w-fit hover:bg-rose-800 rounded text-white">Learn
                    More.</a>
            </div>

        </section>

        <section class="px-24 py-8">
            <div class="w-6/12 mx-auto text-center">
                <h2 class="text-3xl font-bold mb-2">Our Features product</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla eos magni quam autem hic maxime alias
                    consequuntur quibusdam deleniti saepe eum quasi blanditiis sit repellendus explicabo temporibus ullam,
                    dolores modi.</p>
            </div>

            <div class="grid grid-cols-3 gap-8 mt-15">
                <div class="shadow-lg">
                    <img src="{{ asset('image/features/2.jpg') }}" class="object-cover h-75 w-full">
                    <div class="px-2 py-6">
                        <h4 class="text-xl font-bold mb-1">New Product</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium, beatae molestiae quasi
                            dignissimos perspiciatis aut ratione excepturi laboriosam maxime ipsam impedit ab porro nisi
                            illo
                            fuga, vitae non blanditiis cum.</p>

                        <button>Learn More</button>
                    </div>
                </div>
                <div class="shadow p-8">
                    sfsf
                </div>

                <div class="shadow p-8">
                    fsfs
                </div>

            </div>
        </section>
    </main>
@endsection
