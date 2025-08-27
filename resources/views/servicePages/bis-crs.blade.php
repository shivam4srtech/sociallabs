@extends('layouts.app')

@section('title','isi')
@push('pagecss')
<link rel="stylesheet" href="{{ asset('css/service.css') }}" as="style">
@endpush

@section('content')
<div class="pt-[69px]">
    <div class="min-h-screen bg-white font-sans text-gray-800">
        {{-- Top Section --}}
        <section class="relative py-16 sm:py-20 lg:py-24 flex items-center justify-center bg-gradient-to-br from-gray-50 to-white overflow-hidden">
    
            {{-- Background Image --}}
            <div class="absolute inset-0 opacity-[0.02]">
                <img 
                    src="{{ asset('homepage/herosection/herobg.png') }}" 
                    alt="Hero Background" 
                    class="object-cover w-full h-full"
                >
            </div>

            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                    
                    {{-- Left Content --}}
                    <div class="space-y-8 text-center lg:text-left">
                        <div class="space-y-6">
                            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">
                               Compulsory Registration Scheme
                            </h1>
                            <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                                We provide complete end-to-end assistance for BIS CRS Certification, taking care of all requirements to make the compliance process seamless and stress-free.
                            </p>
                        </div>

                        {{-- CTA Button --}}
                        <div class="flex justify-center lg:justify-start">
                            <div class="relative">
                                <button class="group relative bg-[#000032] text-white px-10 py-4 text-sm font-medium tracking-wide uppercase transition-all duration-300 hover:bg-gray-800 border-2 border-black hover:border-gray-800 overflow-hidden rounded-md" onclick="document.getElementById('enquiryModal').classList.remove('hidden')">
                                    <span class="relative z-10">Schedule Free Consultation</span>
                                    <div class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out"></div>
                                    <span class="absolute inset-0 flex items-center justify-center text-black font-medium tracking-wide uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">Schedule Free Consultation</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Right Content (Image + Logo + Shapes) --}}
                    <div class="relative flex justify-center lg:justify-end">
                        <div class="relative">
                            
                            {{-- Main Image --}}
                            <div class="relative w-80 h-80 sm:w-96 sm:h-96 lg:w-[28rem] lg:h-[28rem] rounded-full overflow-hidden shadow-2xl ring-1 ring-gray-100">
                                <img 
                                    src="{{ asset('images/isi-idustry.webp') }}" 
                                    alt="Our Team Collaboration" 
                                    class="object-cover w-full h-full"
                                >
                            </div>

                            {{-- Logo Overlay --}}
                            <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 lg:-bottom-8 lg:-left-8">
                                <div class="relative w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40">
                                    <img 
                                        src="{{ asset('images/comp-logo.webp') }}" 
                                        alt="Company Logo" 
                                        class="object-contain p-2 w-full h-full"
                                    >
                                </div>
                            </div>

                            {{-- Decorative Elements --}}
                            <div class="absolute -top-4 -right-4 w-8 h-8 bg-blue-500 rounded-full opacity-20 animate-pulse"></div>
                            <div class="absolute top-1/4 -left-8 w-4 h-4 bg-green-400 rounded-full opacity-30"></div>
                            <div class="absolute bottom-1/3 -right-6 w-6 h-6 bg-purple-400 rounded-full opacity-25"></div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- bg white --}}
        <div class="max-w-6xl mx-auto px-6 py-12">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl text-gray-900 mb-4">CRS Overview</h1>
                <div class="w-16 h-1 bg-blue-500 mx-auto"></div>
            </div>

            <!-- Intro + Categories -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 mb-10">
                <div class="lg:grid lg:grid-cols-4 lg:gap-12 items-start">
                
                <!-- Left: Intro + Image -->
                <div class="lg:col-span-2 mb-8 lg:mb-0">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        The Compulsory Registration Scheme (CRS) was introduced by the Bureau of Indian Standards (BIS) to regulate electronic and IT products sold in India. Under this scheme, manufacturers must register their products with BIS to confirm that they meet the prescribed Indian safety standards before being made available in the market.
                    </p>
                    <img 
                    src="{{asset('images/what-is-crs.png')}}" 
                    alt="BIS-CRS Certification Process Flow" 
                    class="w-full h-auto object-contain max-w-xs mx-auto block"
                    >
                </div>

                <!-- Right: Categories -->
                <div class="lg:col-span-2">
                    <div class="bg-blue-50 rounded-lg p-6 mb-6">
                    <p class="text-gray-800">
                        At present, BIS-CRS includes <span class="font-semibold text-blue-600">73 product categories</span> , which cover a wide range of electronic and IT devices such as: 
                     
                        covered under BIS-CRS, including:
                    </p>
                    </div>

                    <div class="space-y-3">
                    <!-- Electronics -->
                    <div class="flex items-start space-x-3 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                        <div class="flex-shrink-0 p-2 bg-blue-100 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-zap w-5 h-5" 
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>
                        </svg>
                        </div>
                        <div>
                        <h3 class="font-semibold text-gray-900">Electronics &amp; IT</h3>
                        <p class="text-sm text-gray-600">Examples include mobile phones, laptops, and batteries.</p>
                        </div>
                    </div>

                    <!-- Solar Products -->
                    <div class="flex items-start space-x-3 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                        <div class="flex-shrink-0 p-2 bg-blue-100 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-shield w-5 h-5" 
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"/>
                        </svg>
                        </div>
                        <div>
                        <h3 class="font-semibold text-gray-900">Solar Products</h3>
                        <p class="text-sm text-gray-600">Covers photovoltaic modules, solar power inverters, and related equipment.</p>
                        </div>
                    </div>

                    <!-- Chemicals -->
                    <div class="flex items-start space-x-3 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                        <div class="flex-shrink-0 p-2 bg-blue-100 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-circle-check-big w-5 h-5" 
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.801 10A10 10 0 1 1 17 3.335"/>
                            <path d="m9 11 3 3L22 4"/>
                        </svg>
                        </div>
                        <div>
                        <h3 class="font-semibold text-gray-900">Chemicals</h3>
                        <p class="text-sm text-gray-600">Includes items like ortho phosphoric acid and polyphosphoric acid.</p>
                        </div>
                    </div>

                    <!-- Textiles -->
                    <div class="flex items-start space-x-3 p-4 rounded-lg hover:bg-gray-50 transition-colors">
                        <div class="flex-shrink-0 p-2 bg-blue-100 rounded-lg text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-clock w-5 h-5" 
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        </div>
                        <div>
                        <h3 class="font-semibold text-gray-900">Textile Products</h3>
                        <p class="text-sm text-gray-600">Encompasses cotton bales and other related materials.</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Compliance Info -->
            <div class="space-y-4 text-gray-700 leading-relaxed mt-8 border-t pt-8 border-gray-100">
                <p>
                CRS compliance is compulsory for both Indian and overseas manufacturers aiming to sell their products in the Indian market. It not only ensures smoother entry into India but also strengthens consumer confidence.
                </p>
                <p>
                 All products listed under BIS-CRS must strictly adhere to the relevant Indian Standards. Non-compliance can lead to restrictions at customs, preventing products from entering the country. Additionally, if uncertified products are identified during market surveillance, the manufacturer’s license may face cancellation.
                </p>
            </div>

            <!-- Certificate Validity -->
            <div class="bg-white rounded-xl border border-gray-200 shadow-sm p-6 mt-10">
                <div class="flex flex-col items-center justify-center space-y-3">
                <div class="p-2 bg-gray-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-calendar-days w-6 h-6 text-gray-600" 
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M8 2v4"/>
                    <path d="M16 2v4"/>
                    <rect width="18" height="18" x="3" y="4" rx="2"/>
                    <path d="M3 10h18"/>
                    <path d="M8 14h.01"/>
                    <path d="M12 14h.01"/>
                    <path d="M16 14h.01"/>
                    <path d="M8 18h.01"/>
                    <path d="M12 18h.01"/>
                    <path d="M16 18h.01"/>
                    </svg>
                </div>

                <h2 class="text-xl font-semibold text-gray-900">Certificate Validity</h2>
                
                <div class="text-center">
                    <p class="text-md text-gray-700 mb-1">
                    The initial validity of a BIS-CRS certificate is :
                    <span class="font-bold text-gray-900 text-xl">2 Years</span>
                    </p>
                    <p class="text-sm text-gray-600 max-w-sm mx-auto leading-tight">
                    It can then be renewed for an additional <span class="font-medium">2, 3, 4, or 5 years</span>, based on the manufacturer’s preference and requirements.
                     
                    
                    </p>
                </div>
                </div>
            </div>
        </div>

        {{-- license process --}}
        <div class="max-w-6xl mx-auto px-6 py-12 bg-white">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-4xl md:text-5xl text-gray-900 mb-4">Certification Process</h2>
                <div class="w-16 h-1 bg-blue-500 mx-auto"></div>
            </div>

            <!-- Process Steps -->
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-6">

                <!-- Step 01: Testing -->
                <div class="flex-1 max-w-sm w-full">
                    <div class="bg-white rounded-xl p-6 text-center transition-shadow duration-300">
                        <div class="mb-6">
                            <img 
                                src="{{ asset('images/bis-process-testing.jpg') }}" 
                                alt="Testing" 
                                class="w-64 h-64 mx-auto object-contain rounded-lg"
                            >
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">
                            <span class="inline-block bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-2">01</span>
                            Testing
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Product samples undergo testing in a BIS-accredited laboratory in accordance with the relevant safety standards.
                        </p>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="flex-shrink-0 hidden lg:block">
                    <div class="p-3 bg-blue-50 rounded-full border border-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Step 02: BIS Evaluation -->
                <div class="flex-1 max-w-sm w-full">
                    <div class="bg-white rounded-xl p-6 text-center transition-shadow duration-300">
                        <div class="mb-6">
                            <img 
                                src="{{ asset('images/bis-building.png') }}" 
                                alt="BIS Evaluation" 
                                class="w-64 h-64 mx-auto object-contain rounded-lg"
                            >
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">
                            <span class="inline-block bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-2">02</span>
                            BIS Evaluation
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                           BIS authorities review the product test report along with all relevant documents related to the brand and manufacturer.
                        </p>
                    </div>
                </div>

                <!-- Arrow -->
                <div class="flex-shrink-0 hidden lg:block">
                    <div class="p-3 bg-blue-50 rounded-full border border-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>

                <!-- Step 03: Granting of R-No. -->
                <div class="flex-1 max-w-sm w-full">
                    <div class="bg-white rounded-xl p-6 text-center transition-shadow duration-300">
                        <div class="mb-6">
                            <img 
                                src="{{ asset('images/bis-process-approval.jpg') }}" 
                                alt="Granting of R-No." 
                                class="w-64 h-64 mx-auto object-contain rounded-lg"
                            >
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">
                            <span class="inline-block bg-blue-100 text-blue-600 text-sm font-bold px-3 py-1 rounded-full mr-2">03</span>
                            Granting of R-No.
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            A registration certificate is issued, along with a unique R-number for the specific manufacturer, brand, and product combination.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        
        {{-- bg gray --}}
        <div class="isiBox min-h-screen bg-gray-100 flex flex-col items-center py-8 px-4 sm:px-6 lg:px-8 font-sans">
            <h1 class="text-4xl md:text-5xl text-gray-900 text-center mb-6">Product Standards by Ministry</h1>

            <div class="w-full max-w-2xl mb-8">
                <input placeholder="Search products within the active tab..."
                    class="searchisiItems w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-base text-gray-700"
                    type="text" value="">
            </div>

            <div class="w-full max-w-6xl mb-8">
                <div class="border-b border-gray-200">
                    <nav class="buttons -mb-px flex space-x-8 overflow-x-auto pb-2" aria-label="Tabs">
                        <button class="active   whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                            Electronics and Information Technology
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                            New and Renewable Energy
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                            Chemical and Fertilizers
                        </button>
                        <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                            Textiles
                        </button>
                    </nav>
                </div>
            </div>

            <div class="isiTables w-full max-w-6xl overflow-x-auto shadow-lg rounded-lg border border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">S.No.</th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Indian Standard number (IS No.)</th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">Date of Implementation</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                            <td class="px-4 py-2 text-sm text-gray-700">AMPLIFIERS WITH INPUT POWER 2000W AND ABOVE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 616:2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                            <td class="px-4 py-2 text-sm text-gray-700">AUTOMATIC DATA PROCESSING MACHINE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                            <td class="px-4 py-2 text-sm text-gray-700">ELECTRONIC CLOCKS WITH MAINS POWER</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 302-2-26:2014*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                            <td class="px-4 py-2 text-sm text-gray-700">ELECTRONIC GAMES (VIDEO)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 616:2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                            <td class="px-4 py-2 text-sm text-gray-700">ELECTRONIC MUSICAL SYSTEMS WITH INPUT POWER 200W AND ABOVE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 616:2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                            <td class="px-4 py-2 text-sm text-gray-700">LAPTOP/NOTEBOOK/TABLET</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">7</td>
                            <td class="px-4 py-2 text-sm text-gray-700">MICROWAVE OVENS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 302-2-25:2014*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">8</td>
                            <td class="px-4 py-2 text-sm text-gray-700">OPTICAL DISC PLAYERS WITH BUILT IN AMPLIFIERS OF INPUT POWER 200W AND ABOVE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 616:2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">9</td>
                            <td class="px-4 py-2 text-sm text-gray-700">PLASMA/LCD/LED TELEVISIONS OF SCREEN SIZE 32"; AND ABOVE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 616:2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">10</td>
                            <td class="px-4 py-2 text-sm text-gray-700">PRINTERS, PLOTTERS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">11</td>
                            <td class="px-4 py-2 text-sm text-gray-700">SCANNERS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">12</td>
                            <td class="px-4 py-2 text-sm text-gray-700">SET TOP BOX</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">13</td>
                            <td class="px-4 py-2 text-sm text-gray-700">TELEPHONE ANSWERING MACHINES</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">14</td>
                            <td class="px-4 py-2 text-sm text-gray-700">VISUAL DISPLAY UNITS, VIDEOS MONITORS OF SCREEN SIZE 32" AND ABOVE</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">15</td>
                            <td class="px-4 py-2 text-sm text-gray-700">WIRELESS KEYBOARDS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 July 2013</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">16</td>
                            <td class="px-4 py-2 text-sm text-gray-700">CASH REGISTERS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">13 May 2015</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">17</td>
                            <td class="px-4 py-2 text-sm text-gray-700">COPYING MACHINES/DUPLICATORS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">13 May 2015</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">18</td>
                            <td class="px-4 py-2 text-sm text-gray-700">PASSPORT READER</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">13 May 2015</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">19</td>
                            <td class="px-4 py-2 text-sm text-gray-700">POINT OF SALE TERMINALS</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">13 May 2015</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">20</td>
                            <td class="px-4 py-2 text-sm text-gray-700">MAIL PROCESSING MACHINES/POSTAGE MACHINES/FRANKING MACHINES</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 13252(Part 1):2010*</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">13 May 2015</td>
                        </tr>
                        
                    </tbody>
                </table>

                <table class="min-w-full divide-y divide-gray-200" style="display: none">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                            S.No.
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Indian Standard number (IS No.)
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                            Date of Implementation
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            Crystalline Silicon Terrestrial Photovoltaic (PV) modules (Si wafer based)
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                            IS 14286: 2010 / IEC 61215: 2005, IS/IEC 61730 (Part 1): 2004 & IS/IEC 61730 (Part 2): 2004
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">31 March 2019</td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                            Thin-Film Terrestrial Photovoltaic (PV) Modules (a-Si, CiGs and CdTe)
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">
                            IS 16077: 2013 / IEC 61646: 2008, IS/IEC 61730 (Part 1): 2004 & IS/IEC 61730 (Part 2): 2004
                        </td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">31 March 2019</td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Power Invertors for use in photovoltaic power system</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 16221 (Part 2): 2015</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">30 June 2021</td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Utility-Interconnected Photovoltaic inverters</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 16221 (Part 2): 2015 & IS 16169: 2014</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">30 June 2021</td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Storage battery</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 16270: 2014</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">01 January 2019</td>
                        </tr>
                    </tbody>
                </table>
                <table class="min-w-full divide-y divide-gray-200" style="display: none">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                            S.No.
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Indian Standard number (IS No.)
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                            Date of Implementation
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Ortho Phosphoric Acid</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 798: 2020</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">12 December 2021</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Polyphosphoric Acid</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 17439:2020</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">24 December 2021</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Trimethyl Phosphite Technical Grade</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 17412:2020</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 March 2023</td>
                        </tr>
                    </tbody>
                </table>
                <table class="min-w-full divide-y divide-gray-200" style="display: none">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                            S.No.
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Product
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Indian Standard number (IS No.)
                        </th>
                        <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                            Date of Implementation
                        </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Cotton Bales</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">IS 12171:2019</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">03 March 2023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{--  --}}
        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- Who can apply for BIS-CRS Certificate -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Who is Eligible for BIS-CRS Certification?</h2>
                    <p class="text-gray-700 leading-relaxed mb-4 text-sm">
                        Any manufacturing unit or factory producing the notified products that intends to sell or export to the Indian market must obtain an 8-digit Registration Number from BIS. This registration number is unique for the following combination:
                    </p>
                    <div class="space-y-2 mb-4 ml-2">
                        <p class="text-gray-700 text-sm"><span class="font-semibold">(A)</span> Name and location of the manufacturer</p>
                        <p class="text-gray-700 text-sm"><span class="font-semibold">(B)</span> Brand name</p>
                        <p class="text-gray-700 text-sm"><span class="font-semibold">(C)</span> Product category</p>
                    </div>
                    <div class="bg-blue-50 rounded-lg p-3">
                        <p class="text-gray-800 text-sm">
                            <strong>BIS certification</strong> enables manufacturers to display the Standard Mark along with their unique 8-digit R-number on the certified product until the certificate expires.
                        </p>
                    </div>
                </div>

                <!-- Testing requirements for BIS-CRS -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">BIS-CRS Testing Requirements</h2>
                    <p class="text-gray-700 mb-4 text-sm">
                        The following items are typically requested by the laboratory to begin product testing:
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Product sample complying with relevant IS standards</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">CDF-CCL (Construction Data Format - Critical Component List)</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Marking labels with all mandatory details</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">PCB layout diagram</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Schematic diagram</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Technical specification sheet of the product</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Operating instructions for lab personnel</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-blue-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Accessories required to operate the product in the lab</span>
                        </li>
                    </ul>
                </div>
                <!-- Importance of BIS certification -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                    <h2 class="text-xl font-bold text-gray-900 mb-4">Significance of BIS Certification</h2>
                    <p class="text-gray-700 mb-4 text-sm">
                        Obtaining a BIS certificate represents a mark of safety and quality. Key advantages include:
                    </p>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Provides manufacturers with easier market access</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Assures the market of high-quality products</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-green-500 rounded-full mt-2 mr-2"></span>
                            <span class="text-gray-700 text-sm">Guarantees safety for the end consumer</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Certification Services --}}
        <section class="py-20 px-6 bg-gradient-to-br from-gray-50 via-white to-gray-100">
            <div class="max-w-7xl mx-auto">

                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl text-gray-900 mb-4 tracking-tight">Our CRS Certification Services</h2>
                    <div class="mx-auto w-24 h-1 bg-indigo-600 rounded-full mb-4"></div>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        End-to-end compliance and certification support by domain experts, tailored to your product.
                    </p>
                </div>

                <!-- Cards Grid -->
                <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

                    <!-- Card 01: Planning & Product Assessment -->
                    <div class="group relative bg-white/70 backdrop-blur-md border border-gray-200 rounded-2xl shadow-md hover:shadow-lg hover:-translate-y-1 transition-transform duration-300 p-6 flex flex-col">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gradient-to-tr from-indigo-500 to-indigo-700 text-white flex items-center justify-center text-lg font-bold shadow-lg">01</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-check ml-4 w-6 h-6 text-indigo-600" aria-hidden="true">
                                <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <path d="m9 14 2 2 4-4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 leading-snug">Product Planning & Assessment</h3>
                        <p class="text-gray-700 text-sm flex-1 mb-4">
                            Our process starts with a thorough evaluation of the product to verify CRS compliance. Once confirmed, we create a customized certification plan specific to your product.
                        </p>
                        <ul class="text-sm text-gray-700 space-y-1 mb-3">
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Detailed Product Evaluation</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Sample Preparation & Handling</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Selecting Labs & Defining Scope</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Testing as per IS Standards</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Document Preparation & Submission</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Query Handling & Certificate Issuance</span>
                            </li>
                        </ul>
                    </div>


                    <!-- Card 02: Sample Handling & Custom Clearance -->
                    <div class="group relative bg-white/70 backdrop-blur-md border border-gray-200 rounded-2xl shadow-md hover:shadow-lg hover:-translate-y-1 transition-transform duration-300 p-6 flex flex-col">
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gradient-to-tr from-indigo-500 to-indigo-700 text-white flex items-center justify-center text-lg font-bold shadow-lg">02</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-boxes ml-4 w-6 h-6 text-indigo-600" aria-hidden="true">
                                <path d="M2.97 12.92A2 2 0 0 0 2 14.63v3.24a2 2 0 0 0 .97 1.71l3 1.8a2 2 0 0 0 2.06 0L12 19v-5.5l-5-3-4.03 2.42Z"></path>
                                <path d="m7 16.5-4.74-2.85"></path>
                                <path d="m7 16.5 5-3"></path>
                                <path d="M7 16.5v5.17"></path>
                                <path d="M12 13.5V19l3.97 2.38a2 2 0 0 0 2.06 0l3-1.8a2 2 0 0 0 .97-1.71v-3.24a2 2 0 0 0-.97-1.71L17 10.5l-5 3Z"></path>
                                <path d="m17 16.5-5-3"></path>
                                <path d="m17 16.5 4.74-2.85"></path>
                                <path d="M17 16.5v5.17"></path>
                                <path d="M7.97 4.42A2 2 0 0 0 7 6.13v4.37l5 3 5-3V6.13a2 2 0 0 0-.97-1.71l-3-1.8a2 2 0 0 0-2.06 0l-3 1.8Z"></path>
                                <path d="M12 8 7.26 5.15"></path>
                                <path d="m12 8 4.74-2.85"></path>
                                <path d="M12 13.5V8"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 leading-snug">Sample Logistics & Clearance</h3>
                        <p class="text-gray-700 text-sm flex-1 mb-4">
                            Our team oversees the complete logistics process—from import clearance to delivery of samples at the testing lab—ensuring both compliance and secure handling at every step.
                        </p>
                    </div>


                    <!-- Card 03: Product Testing -->
                    <div class="group relative bg-white/70 backdrop-blur-md border border-gray-200 rounded-2xl shadow-md hover:shadow-lg hover:-translate-y-1 transition-transform duration-300 p-6 flex flex-col">

                        <!-- Card Header -->
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gradient-to-tr from-indigo-500 to-indigo-700 text-white flex items-center justify-center text-lg font-bold shadow-lg">
                                03
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package-check ml-4 w-6 h-6 text-indigo-600" aria-hidden="true">
                                <path d="m16 16 2 2 4-4"></path>
                                <path d="M21 10V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l2-1.14"></path>
                                <path d="m7.5 4.27 9 5.15"></path>
                                <polyline points="3.29 7 12 12 20.71 7"></polyline>
                                <line x1="12" x2="12" y1="22" y2="12"></line>
                            </svg>
                        </div>

                        <!-- Card Title -->
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 leading-snug">Comprehensive Product Testing</h3>

                        <!-- Card Description -->
                        <p class="text-gray-700 text-sm flex-1 mb-4">
                            We manage complete product testing—including safety, language, and security evaluations—aligned with relevant BIS standards, while coordinating seamlessly with testing labs.
                        </p>

                        <!-- Card List -->
                        <ul class="text-sm text-gray-700 space-y-1 mb-3">
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>IS 13252 / IEC 60950-1 for IT Equipment</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>IS 616 / IEC 60065 for AV Devices</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Average testing duration: 1–2 weeks</span>
                            </li>
                        </ul>

                        <!-- Card Footer / Note -->
                        <p class="text-xs text-gray-500 italic">
                            Dedicated support for lab coordination and review of test reports.
                        </p>
                    </div>

                    {{-- 4 --}}
                    <div class="group relative bg-white/70 backdrop-blur-md border border-gray-200 rounded-2xl shadow-md hover:shadow-lg hover:-translate-y-1 transition-transform duration-300 p-6 flex flex-col">

                        <!-- Card Header -->
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gradient-to-tr from-indigo-500 to-indigo-700 text-white flex items-center justify-center text-lg font-bold shadow-lg">
                                04
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big ml-4 w-6 h-6 text-indigo-600" aria-hidden="true">
                                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                <path d="m9 11 3 3L22 4"></path>
                            </svg>
                        </div>

                        <!-- Card Title -->
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 leading-snug">Certification & Approvals</h3>

                        <!-- Card Description -->
                        <p class="text-gray-700 text-sm flex-1 mb-4">
                            We handle end-to-end documentation, application submission, and liaise with BIS authorities to secure approvals, including resolving queries efficiently.
                        </p>

                    </div>

                    {{-- 5 --}}
                    <div class="group relative bg-white/70 backdrop-blur-md border border-gray-200 rounded-2xl shadow-md hover:shadow-lg hover:-translate-y-1 transition-transform duration-300 p-6 flex flex-col">

                        <!-- Card Header -->
                        <div class="flex items-center mb-4">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gradient-to-tr from-indigo-500 to-indigo-700 text-white flex items-center justify-center text-lg font-bold shadow-lg">
                                05
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock ml-4 w-6 h-6 text-indigo-600" aria-hidden="true">
                                <rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                            </svg>
                        </div>

                        <!-- Card Title -->
                        <h3 class="text-xl font-semibold text-gray-800 mb-3 leading-snug">CCTV & ER 01:2024 Compliance</h3>

                        <!-- Card Description -->
                        <p class="text-gray-700 text-sm flex-1 mb-4">
                            We assist with ER 01:2024 adherence for CCTV cameras, addressing data security, system audits, penetration tests, and factory inspection support.
                        </p>

                        <!-- Features List -->
                        <ul class="text-sm text-gray-700 space-y-1 mb-3">
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Physical Security</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Access Control</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Network & Software Security</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check w-4 h-4 text-indigo-500 mt-1" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
                                <span>Penetration Testing</span>
                            </li>
                        </ul>

                        <!-- Note -->
                        <p class="text-xs text-gray-500 italic">
                            Pre-compliance templates and audit guidance are also provided.
                        </p>

                    </div>

                </div>
            </div>
        </section>
        <section class="py-20 px-6 bg-white border-t border-gray-200">
            <div class="max-w-7xl mx-auto">

                <!-- Section Header -->
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                        Typical Challenges &amp; Vincular’s Solutions
                    </h2>
                    <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                        Obtaining CRS certification on schedule can be tricky for many companies. Vincular guides you through each hurdle, ensuring a smooth and confident certification process.
                    </p>
                </div>

                <!-- Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                <!-- Common Challenges Card -->
                <div class="bg-red-50 border border-red-200 rounded-2xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert w-6 h-6 text-red-500 mr-2" aria-hidden="true">
                            <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path>
                            <path d="M12 9v4"></path>
                            <path d="M12 17h.01"></path>
                        </svg>
                        <h3 class="text-xl font-semibold text-red-700">Typical Obstacles</h3>
                    </div>
                    <ul class="list-disc list-inside text-red-800 space-y-3 pl-2">
                        <li>Complex regulatory updates – Keeping up with changing compliance rules.</li>
                        <li>Sample selection errors – Incorrect products sent for testing.</li>
                        <li>Certification delays – Lack of clear guidance prolonging timelines.</li>
                        <li>Customs & clearance issues – Missing or incomplete documentation.</li>
                    </ul>
                </div>

                <!-- How Vincular Helps Card -->
                <div class="bg-green-50 border border-green-200 rounded-2xl p-6 shadow-sm">
                    <div class="flex items-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lightbulb w-6 h-6 text-green-600 mr-2" aria-hidden="true">
                            <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"></path>
                            <path d="M9 18h6"></path>
                            <path d="M10 22h4"></path>
                        </svg>
                        <h3 class="text-xl font-semibold text-green-700">Vincular’s Approach</h3>
                    </div>
                    <ul class="list-disc list-inside text-green-900 space-y-3 pl-2">
                        <li>Conducting pre-assessment and regulatory guidance.</li>
                        <li>Guaranteeing accurate documentation and smooth application filing.</li>
                        <li>Liaising with certified labs to accelerate testing approvals.</li>
                        <li>Managing sample logistics and customs clearance efficiently.</li>
                        <li>Providing full support from testing to final certification.</li>
                    </ul>
                </div>


                </div>
            </div>
        </section>



        {{-- faqs --}}
        <div class="w-full max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-12">
                Frequently Asked Questions
            </h2>

            <div class="space-y-4">
                <!-- FAQ Item -->
                <!-- FAQ 1 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">What is the Compulsory Registration Scheme (CRS)?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        CRS is a regulatory framework by BIS that mandates registration and certification of specific electronic and IT products before they can be sold in India.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">Which products fall under CRS?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        CRS applies to electronic items like IT equipment, CCTV cameras, AV devices, and other notified products that require BIS registration before sale.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">Is CRS mandatory for all electronic products in India?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        No, CRS is only mandatory for the products notified by BIS. Manufacturers and importers must check the list of products under CRS before selling.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">What is the process to register under CRS?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        Manufacturers or importers need to submit product details, test reports, and technical documents to BIS. BIS verifies the information and issues a registration certificate upon approval.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 5 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">How long does CRS registration take?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        The average CRS registration process takes 1–2 weeks depending on document completeness, lab testing schedules, and BIS verification timelines.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 6 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">Can CRS registration be canceled or suspended?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        Yes, BIS can suspend or cancel CRS registration in cases of non-compliance, submission of false documents, or failure to meet product safety standards.
                    </p>
                    </div>
                </div>
                </div>
                <!-- FAQ 7 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">Who is responsible for CRS compliance?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        The manufacturer or importer of the product is responsible for ensuring CRS compliance and obtaining the necessary BIS registration before selling the product in India.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 8 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">Are there penalties for non-compliance with CRS?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        Yes, selling products without BIS registration under CRS can lead to fines, product confiscation, or legal action by authorities.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 9 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">Can imported products be sold if not registered under CRS?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        No, imported products must also comply with CRS. BIS registration is mandatory before selling them in India, regardless of origin.
                    </p>
                    </div>
                </div>
                </div>

                <!-- FAQ 10 -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">How does CRS benefit consumers?</h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        CRS ensures that products sold in India meet safety and quality standards. Consumers get reliable, tested, and certified products, reducing the risk of unsafe or substandard items.
                    </p>
                    </div>
                </div>
                </div>
                <!-- Add more FAQ items here in same structure -->
            </div>
        </div>
    </div>
</div>



</section>
@push('scripts_custom')

<script src="{{ asset('js/service.js') }}" defer></script>


@endpush
@endsection
