<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>Kategoriler</h1>

    <ul id="category-list">
        <!-- Kategoriler burada listelenecek -->
    </ul>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Axios ile API'ye istek yapılıyor
            axios.get('/api/categories')
                .then(function (response) {
                    // API'den dönen kategoriler alınıyor
                    const categories = response.data;
                    const categoryList = document.getElementById('category-list');

                    // Her kategoriyi listeye ekliyoruz
                    categories.forEach(function (category) {
                        const li = document.createElement('li');
                        li.textContent = category.name; // Category name field
                        categoryList.appendChild(li);
                    });
                })
                .catch(function (error) {
                    console.error('API isteği başarısız oldu:', error);
                });
        });
    </script>

</x-app-layout>
