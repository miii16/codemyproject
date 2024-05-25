<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - PadangFast</title>
    <link rel="shorcut icon" href="assets/images/favicon/favicon.ico">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body class="w-screen h-screen bg-white dark:bg-gray-900">
    <nav class="bg-gray-800">
        <div class="flex items-center justify-between flex-grow py-5 md:pl-12">
            <div class="flex items-center space-x-6 capitalize">
                <a href="index.html" class="text-gray-200 transition hover:text-white">home</a>
                <a href="shop.html" class="text-gray-200 transition hover:text-white">shop</a>
                <a href="index.html" class="text-gray-200 transition hover:text-white">about</a>
                <a href="index.html" class="text-gray-200 transition hover:text-white">contact</a>
                <button id="toggle" class="w-6/12 p-20 mx-auto h-fit rounded-xl text-9xl ">
                    <img src="assets/images/moon-fill.svg">
                </button>
                <script>
                    const btn = document.querySelector('#toggle').addEventListener('click', function(){
                        document.documentElement.classList.toggle('dark');
                    });
                </script>      
            </div>
            <a href="login.html" class="text-gray-200 transition hover:text-white">login</a>
        </div>
     </nav>
     <div class="container flex items-center w-screen h-screen gap-3 py-4 bg-white dark:bg-gray-900">
        <a href="#" class="text-base text-primary">
            <i class="fa-solid fa-house"></i>
        </a>
        <span class="text-sm text-gray-400">
            <i class="fa-solid fa-chevron-right"></i>
        </span>
        <p class="font-medium text-black dark:text-white">Shop</p>
     </div>
     <!--side bar-->
     <div class="hidden w-screen h-screen col-span-1 px-4 pb-6 overflow-hidden bg-white rounded md:block dark:bg-gray-900">
        <div class="space-y-5 divide-y divide-gray-200">
            <h3 class="mb-3 text-xl font-medium text-black uppercase dark:text-white">categories</h3>
            <div class="space-y-2">
                <div class="flex items-cennter">
                    <a href="shop.html" name="cat-1" id="cat-1" class="ml-3 text-black rounded-sm cursor-pointer dark:text-white focus:ring-0 ">
                   Promo </a>
                </div>
                <div class="flex items-center">
                    <a href="bestseller.html" name="cat-1" id="cat-1" class="ml-3 text-black rounded-sm cursor-pointer dark:text-white focus:ring-0">
                        Best seller</a>
                </div>
                <div class="flex items-center">
                    <a href="paketan.html" name="cat-1" id="cat-1" class="ml-3 text-gray-600 cursor-pointer text-primary">
                        Paketan</a>
                </div>
                <div class="flex items-center">
                    <a href="satuan.html" name="cat-1" id="cat-1" class="ml-3 text-black cursor-pointer dark:text-white ">
                        Satuan</a>
                </div>
                <div class="flex items-center">
                    <a href="drink.html" name="cat-1" id="cat-1" class="ml-3 text-black cursor-pointer dark:text-white ">
                        Drink</a>
                </div>
                <div class="flex items-center">
                    <a href="frozen.html" name="cat-1" id="cat-1" class="ml-3 text-black cursor-pointer dark:text-white ">
                        Frozen</a>
                </div>
                <!--Products-->
                <div class="col-span-3">
                    <div class="flex items-center mb-4">
                        <select name="sort" id="sort"
                        class="h-screen px-4 py-3 text-black bg-white border-gray-300 rounded shadow-sm dark:text-white teext-sm w-44 focus:ring-primary focus:border-primary dark:bg-gray-900">
                        <option value="low-to-high"> low to hight</option>
                        <option value="low-to-high"> hight to low</option>
                    </select>
                    </div>
                    </div>
                </div>
            </div>
     </div>
     <div class="grid grid-cols-2 gap-6 md:grid-cols-3">
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="{{ asset('images/hemat2.jpg') }}" alt="product 1" class="w-full">
                <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Paket nasi Hemat 1</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">25k</p>
                    <p class="text-sm text-gray-400 line-through">35k</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
        </div>
        <div class="overflow-hidden bg-white rounded shadow group">
            <div class="relative">
                <img src="{{ asset('images/paketan.jpg') }}" alt="product 1" class="w-full">
                <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="view product">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                    <a href="#"
                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                        title="add to wishlist">
                        <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
            </div>
            <div class="px-4 pt-4 pb-3">
                <a href="#">
                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                        Paket nasi Hemat 2</h4>
                </a>
                <div class="flex items-baseline mb-1 space-x-2">
                    <p class="text-xl font-semibold text-primary">20k</p>
                    <p class="text-sm text-gray-400 line-through">30k</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 text-sm text-yellow-400">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                </div>
            </div>
            <a href="#"
                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                to cart</a>
                </div>
                <div class="overflow-hidden bg-white rounded shadow group">
                    <div class="relative">
                        <img src="{{ asset('images/hemat3.jpg') }}" alt="product 1" class="w-full">
                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="view product">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                            <a href="#"
                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                title="add to wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="px-4 pt-4 pb-3">
                        <a href="#">
                            <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                                Paket nasi Hemat 3</h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2">
                            <p class="text-xl font-semibold text-primary">30</p>
                            <p class="text-sm text-gray-400 line-through">35k</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                        </div>
                    </div>
                    <a href="#"
                        class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                        to cart</a>
                        </div>
                        <div class="overflow-hidden bg-white rounded shadow group">
                            <div class="relative">
                                <img src="{{ asset('images/lokal.jpg') }}" alt="product 1" class="w-full">
                                <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                                    <a href="#"
                                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                        title="view product">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                    <a href="#"
                                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                        title="add to wishlist">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="px-4 pt-4 pb-3">
                                <a href="#">
                                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                                        Paket nasi padang Kearifan Lokal</h4>
                                </a>
                                <div class="flex items-baseline mb-1 space-x-2">
                                    <p class="text-xl font-semibold text-primary">15k</p>
                                    <p class="text-sm text-gray-400 line-through">30k</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="flex gap-1 text-sm text-yellow-400">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="ml-3 text-xs text-gray-500">(150)</div>
                                </div>
                            </div>
                            <a href="#"
                                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                                to cart</a>
                                </div>
                                <div class="overflow-hidden bg-white rounded shadow group">
                                    <div class="relative">
                                        <img src="{{ asset('images/talua.jpg') }}" alt="product 1" class="w-full">
                                        <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                                            <a href="#"
                                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                                title="view product">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </a>
                                            <a href="#"
                                                class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                                title="add to wishlist">
                                                <i class="fa-solid fa-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="px-4 pt-4 pb-3">
                                        <a href="#">
                                            <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                                                Combo Mix teh talua</h4>
                                        </a>
                                        <div class="flex items-baseline mb-1 space-x-2">
                                            <p class="text-xl font-semibold text-primary">75k</p>
                                            <p class="text-sm text-gray-400 line-through">100k</p>
                                        </div>
                                        <div class="flex items-center">
                                            <div class="flex gap-1 text-sm text-yellow-400">
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                                <span><i class="fa-solid fa-star"></i></span>
                                            </div>
                                            <div class="ml-3 text-xs text-gray-500">(150)</div>
                                        </div>
                                    </div>
                                    <a href="#"
                                        class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                                        to cart</a>
                                        </div>
                                        <div class="overflow-hidden bg-white rounded shadow group">
                                            <div class="relative">
                                                <img src="{{ asset('images/best.jpg') }}" alt="product 1" class="w-full">
                                                <div class="absolute inset-0 flex items-center justify-center gap-2 transition bg-black opacity-0 bg-opacity-40 group-hover:opacity-100">
                                                    <a href="#"
                                                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                                        title="view product">
                                                        <i class="fa-solid fa-magnifying-glass"></i>
                                                    </a>
                                                    <a href="#"
                                                        class="flex items-center justify-center h-8 text-lg text-white transition rounded-full w-9 bg-primary hover:bg-gray-800"
                                                        title="add to wishlist">
                                                        <i class="fa-solid fa-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="px-4 pt-4 pb-3">
                                                <a href="#">
                                                    <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">
                                                    Paket nasi padang Kumplit</h4>
                                                </a>
                                                <div class="flex items-baseline mb-1 space-x-2">
                                                    <p class="text-xl font-semibold text-primary">25k</p>
                                                    <p class="text-sm text-gray-400 line-through">30k</p>
                                                </div>
                                                <div class="flex items-center">
                                                    <div class="flex gap-1 text-sm text-yellow-400">
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                        <span><i class="fa-solid fa-star"></i></span>
                                                    </div>
                                                    <div class="ml-3 text-xs text-gray-500">(10)</div>
                                                </div>
                                            </div>
                                            <a href="#"
                                                class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                                                to cart</a>
                                                </div>
                                                <footer class="w-screen h-screen pt-16 pb-12 bg-white border-t border-gray-100 dark:bg-gray-900">
                                                    <div class="container grid grid-cols-1">
                                                        <div class="col-span-1 space-y-4">
                                                          <!---- <img src="assets/images/logo.svg" alt="logo" class="w-30"> -->
                                                          <div class="mr-2">
                                                            <p class="text-black dark:text-white">
                                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint ipsa amet minima odio eum! Exp
                                                            </p>
                                                          </div>
                                                          <div class="flex space-x-5">
                                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                <i class="fa-brands fa-facebook-square"></i>  
                                                            </a>
                                                            <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                                                class="fa-brands fa-instagram-square"></i></a>
                                                                <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                                                    class="fa-brands fa-twitter-square"></i></a> 
                                                                    <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                        <i class="fa-brands fa-github-square"></i>
                                                                    </a> 
                                                          </div>
                                                        </div>
                                                        <div class="flex space-x-5">
                                                            <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                                                    class="fa-brands fa-facebook-square"></i></a>
                                                            <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                                                    class="fa-brands fa-instagram-square"></i></a>
                                                            <a href="#" class="text-gray-400 hover:text-gray-500"><i
                                                                    class="fa-brands fa-twitter-square"></i></a>
                                                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                                                <i class="fa-brands fa-github-square"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                            
                                                    <div class="grid grid-cols-2 col-span-2 gap-4">
                                                        <div class="grid grid-cols-2 gap-4 md:gap-8">
                                                            <div>
                                                                <h3 class="text-sm font-semibold tracking-wider text-black uppercase dark:text-white">Solutions</h3>
                                                                <div class="mt-4 space-y-4">
                                                                    <a href="#" class="block text-base text-black dark:text-white">Marketing</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">businness</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">Commerce</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">Insights</a>
                                                                </div>
                                                            </div>
                                            
                                                            <div>
                                                                <h3 class="text-sm font-semibold tracking-wider text-black uppercase dark:text-white">Support</h3>
                                                                <div class="mt-4 space-y-4">
                                                                    <a href="#" class="block text-base text-black dark:text-white">Pricing</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">Guides</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">location</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="grid grid-cols-2 gap-8">
                                                            <div>
                                                                <h3 class="text-sm font-semibold tracking-wider text-black uppercase dark:text-white">contact</h3>
                                                                <div class="mt-4 space-y-4">
                                                                    <a href="#" class="block text-base text-black dark:text-white">supplier</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">reseller authorized</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">Commerce</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">Insights</a>
                                                                </div>
                                                            </div>
                                            
                                                            <div>
                                                                <h3 class="text-sm font-semibold tracking-wider text-black uppercase dark:text-white">Support</h3>
                                                                <div class="mt-4 space-y-4">
                                                                    <a href="#" class="block text-base text-black dark:text-white">supermarket</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white ">minimarket</a>
                                                                    <a href="#" class="block text-base text-black dark:text-white">umkm</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </footer>            
</body>
</html>