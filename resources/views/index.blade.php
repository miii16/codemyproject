<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PadangFast</title>
    <link rel="shortcut icon" href="assets/images/favicon/favicon.ico" type="image/x-icon">
    @vite('resources/css/app.css')

        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
        <script>

            // It's best to inline this in `head` to avoid FOUC (flash of unstyled content) when changing pages or themes
            if (
              localStorage.getItem('color-theme') === 'dark' ||
              (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
            ) {
              document.documentElement.classList.add('dark');
            } else {
              document.documentElement.classList.remove('dark');
            }
          </script>
          <script src="darkmode.js"></script>
</head>
<body class="w-screen h-screen bg-white dark:bg-gray-900">
     <!-- navbar -->
     <nav class="bg-gray-800">
        <div class="flex items-center justify-between flex-grow py-5 md:pl-12">
            <div class="flex items-center space-x-6 capitalize">
                <a href="index.blade.php" class="text-gray-200 transition hover:text-white">home</a>
                <a href="promo.blade.php" class="text-gray-200 transition hover:text-white">shop</a>
                <a href="index.html" class="text-gray-200 transition hover:text-white">about</a>
                <a href="index.html" class="text-gray-200 transition hover:text-white">contact</a>
                <button id="toggle" class="w-6/12 p-20 mx-auto text-black h-fit rounded-xl dark:text-white text-9xl ">
                    <img src="{{ asset('images/moon.svg') }}" alt="Example Image">
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
<!--banner-->
<div class="bg-center bg-no-repeat bg-cover py-36" style="background-image: url('{{ asset('images/mobile.jpg') }}');">
                <div class="container">
                    <h1 class="mb-4 text-6xl font-medium text-white capitalize">
                        choose your <br> padang food in PadangFast
                    </h1>
                    <p class="text-white">
                lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam <br>
                accusantium perspiciatis, sapiente
                magni eos dolorum ex quos dolores odio.</p>
                <div class="mt-12">
                    <a href="#" class="px-8 py-3 font-medium text-white rounded-md bg-primary border-primary hover:bg-transparent hover:text-primary">order now</a>
                </div>
                </div>
            </div>
            <!--features-->
            <div class="container py-16 text-black dark:text-white">
                <div class="grid justify-center w-10/12 grid-cols-1 gap-6 mx-auto md:grid-cols-3">
                    <div class="flex justify-center gap-5 px-3 py-6 border rounded-sm border-primary items center">
                        <img src="{{ asset('images/delivery-van.svg') }}" alt="Example Image" class="object-contain w-12 h-12">
                        <div>
                            <h4 class="text-lg font-medium text-black capitalize dark:text-white">Free delivery</h4>
                            <p class="text-sm text-gray-500">order over 100k</p>
                        </div>
                    </div>
                    <div class="flex justify-center gap-5 px-3 py-6 border rounded-sm border-primary items center">
                        <img src="{{ asset('images/money-back.svg') }}" alt="Example Image" class="object-contain w-12 h-12">
                        <div>
                            <h4 class="text-lg font-medium capitalize">Money Returns</h4>
                            <p class="text-sm text-gray-500">not good money returs</p>
                        </div>
                    </div>
                    <div class="flex items-center justify-center gap-5 px-3 py-6 border rounded-sm border-primary dark:text-white">
                        <img src="{{ asset('images/service-hours.svg') }}" alt="Example Image" class="object-contain w-12 h-12">
                        <div>
                            <h4 class="text-lg font-medium capitalize">24/7 Support</h4>
                            <p class="text-sm text-gray-500">Customer support</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--categories-->
            <div class="container py-16">
                <h2 class="mb-6 text-2xl font-medium text-black uppercase dark:text-white ">order of category</h2>
                <div class="grid grid-cols-3 gap-3">
                    <div class="relative overflow-hidden rounded-sm group">
                        <img src="{{ asset('images/promo.jpg') }}" alt="Example Image" class="w-full">
                        <a href="shop.html" class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">Promo</a>
                    </div>
                    <div class="relative overflow-hidden rounded-sm group">
                        <img src="{{ asset('images/best.jpg') }}" alt="Example Image" class="w-full">
                        <a href="bestseller.html" class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">best seller</a>
                    </div>
                    <div class="relative overflow-hidden rounded-sm group">
                        <img src="{{ asset('images/paketan.jpg') }}" alt="Example Image"   class="w-full">
                        <a href="paketan.html" class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">paketan</a>
                    </div>
                    <div class="relative overflow-hidden rounded-sm group">
                        <img src="{{ asset('images/rendang.jpg') }}" alt="Example Image" class="w-full">
                        <a href="satuan.html" class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">satuan</a>
                    </div>
                    <div class="relative overflow-hidden rounded-sm group">
                        <img src="{{ asset('images/drink.jpg') }}" alt="Example Image" class="w-full">
                        <a href="drink.html" class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">drinks</a>
                    </div>
                    <div class="relative overflow-hidden rounded-sm group">
                        <img src="{{ asset('images/frozen.jpg') }}" alt="Example Image" class="w-full">
                        <a href="frozen.html" class="absolute inset-0 flex items-center justify-center text-xl font-medium text-white transition bg-black bg-opacity-40 font-roboto group-hover:bg-opacity-60">frozen</a>
                    </div>
                </div>
            </div>
            <!--new arrival-->
            <div class="container pb-16">
                <h2 class="mb-6 text-2xl font-medium text-black uppercase dark:text-white">Menu best seller hari ini</h2>
                <div class="grid grid-cols-1 gap-6 md:grid-cols-4">
                    <div class="overflow-hidden bg-white rounded shadow group">
                        <div class="relative">
                            <img src="{{ asset('images/paketan.jpg') }}" alt="Example Image" class="w-full">
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
                                <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">paket nasi
                                    hemat</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl font-semibold text-primary">30k</p>
                                <p class="text-sm text-gray-400 line-through">45k</p>
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
                            <img src="{{ asset('images/rendang.jpg') }}" alt="Example Image"class="w-full">
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
                                <h4 class="mb-2 text-xl font-medium text-gray-800 uppercase transition hover:text-primary">rendang
                                    sapi</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl font-semibold text-primary">15k</p>
                                <p class="text-sm text-gray-400 line-through">25k</p>
                            </div>
                            <div class="flex items-center">
                                <div class="flex gap-1 text-sm text-yellow-400">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="ml-3 text-xs text-gray-500">(300)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                            to cart</a>
                    </div>
                    <div class="overflow-hidden bg-white rounded shadow group">
                        <div class="relative">
                            <img src="{{ asset('images/tunjang.jpg') }}" alt="Example Image"class="w-full">
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
                                    gulai tunjang</h4>
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
                                <div class="ml-3 text-xs text-gray-500">(200)</div>
                            </div>
                        </div>
                        <a href="#"
                            class="block w-full py-1 text-center text-white transition border rounded-b bg-primary border-primary hover:bg-transparent hover:text-primary">Add
                            to cart</a>
                    </div>
                    <div class="overflow-hidden bg-white rounded shadow group">
                        <div class="relative">
                            <img src="{{ asset('images/talua.jpg') }}" alt="Example Image" class="w-full">
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
                                    teh talua</h4>
                            </a>
                            <div class="flex items-baseline mb-1 space-x-2">
                                <p class="text-xl font-semibold text-primary">15k</p>
                                <p class="text-sm text-gray-400 line-through">20k</p>
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
                </div>
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
                                <a href="#" class="block text-base text-black dark:text-white ">Marketing</a>
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
                            <h3 class="text-sm font-semibold tracking-wider text-gray-400 uppercase">contact</h3>
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
                                <a href="#" class="block text-base text-black dark:text-white">minimarket</a>
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
            <script src="darkmode.js"></script>
</body>
</html>