<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="bg-white rounded-top shadow-sm mb-3">

    <div class="row g-0">
        <div class="col col-lg-7 mt-6 p-4">

            <h2 class="mt-2 text-dark fw-light">
                Админ панель
            </h2>

            <p>
                Данная панель нужно для администрирование интернет магазина.
            </p>
        </div>
        <div class="d-none d-lg-block col align-self-center text-end text-muted p-4">
            <x-orchid-icon path="orchid" width="6em" height="100%"/>
        </div>
    </div>

    <div class="row bg-light m-0 p-md-4 p-3 border-top rounded-bottom">
        <div class="container mx-auto">
            <article class="prose prose-slate mb-3" >
                <h1> Категории </h1>
            </article>
            <x-table.index>
                <x-slot name="heading">
                    <x-table.heading> Категория</x-table.heading>
                    <x-table.heading>Ключевые слова</x-table.heading>
                    <x-table.heading>Описание</x-table.heading>
                </x-slot>
                @foreach($categories as $category)
                    <x-table.row>
                        <x-table.cell>{{ $category->title }}</x-table.cell>
                        <x-table.cell>{{ $category->keywords }}</x-table.cell>
                        <x-table.cell>{{ $category->description }}</x-table.cell>
                    </x-table.row>
                @endforeach
            </x-table.index>
            {{ $categories->links() }}
        </div>
            <div class="container mx-auto">
                <article class="prose prose-slate mb-3" >
                    <h1> Бренды </h1>
                </article>
                <x-table.index>
                    <x-slot name="heading">
                        <x-table.heading> Бренды</x-table.heading>
                        <x-table.heading>URL</x-table.heading>
                        <x-table.heading>Описание</x-table.heading>
                    </x-slot>
                    @foreach($brands as $brand)
                        <x-table.row>
                            <x-table.cell>{{ $brand->title }}</x-table.cell>
                            <x-table.cell>{{ $brand->alias }}</x-table.cell>
                            <x-table.cell>{{ $brand->description }}</x-table.cell>
                        </x-table.row>
                    @endforeach
                </x-table.index>
                {{ $brands->links() }}
            </div>

            <div class="container mx-auto">
                <article class="prose prose-slate mb-3" >
                    <h1> Товары </h1>
                </article>
                <x-table.index>
                    <x-slot name="heading">
                        <x-table.heading> Категория товара</x-table.heading>
                        <x-table.heading> Бренд товара</x-table.heading>
                        <x-table.heading> Наименование товара</x-table.heading>
                    </x-slot>
                    @foreach($products as $product)
                        <x-table.row>
                            <x-table.cell>{{ $product->categories->title }}</x-table.cell>
                            <x-table.cell>{{ $product->brands->title }}</x-table.cell>
                            <x-table.cell>{{ $product->title }}</x-table.cell>
                        </x-table.row>
                    @endforeach
                </x-table.index>
                {{ $products->links() }}
            </div>
        </div>


</div>
<script src="{{ asset('js/app.js')}}"></script>
