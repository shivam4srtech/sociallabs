@extends('layouts.app')

@section('title','isi')

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
                                ISI Certification
                            </h1>
                            <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                                In India, products such as electrical appliances, toys, safety gear, LPG valves, tyres, tubes, and Portland cement must carry the ISI mark before they can be sold. For most other items, however, using the ISI mark is optional.
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
        <div class="bg-white">
            <div class="py-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-20">

                        {{-- Left Image --}}
                        <div class="relative">
                            <div class="aspect-[3/4] max-w-sm mx-auto relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-400 to-purple-500 rounded-3xl rotate-3 opacity-10"></div>
                                <div class="absolute inset-0 bg-gradient-to-r from-pink-400 to-red-500 rounded-3xl -rotate-3 opacity-10"></div>
                                <div class="relative bg-white rounded-3xl p-4 shadow-2xl border border-gray-100">
                                    <img 
                                        src="{{ asset('images/what-is-isi.png') }}" 
                                        alt="ISI Certification" 
                                        class="w-full h-full object-cover rounded-2xl"
                                    >
                                </div>
                            </div>
                        </div>

                        {{-- Right Content --}}
                        <div>
                            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">What is ISI Mark?</h2>
                            <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full mb-8"></div>
                            <p class="text-xl text-gray-600 leading-relaxed mb-8">
                               The ISI mark serves as India’s leading certification standard, guaranteeing that products comply with strict safety and quality requirements before they are made available to consumers.
                            </p>
                            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-6 border border-blue-100">
                                <p class="text-gray-700 leading-relaxed">
                                   The ISI mark, governed under Scheme-I of Schedule-II, is a certification provided for various domestic and industrial products in India, excluding electronics and IT goods. When this mark appears on a product, it signifies that the item complies with the relevant Indian Standard.
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Features --}}
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 border border-blue-100 group hover:shadow-lg transition-all duration-300">
                            <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <span class="text-2xl">🛡️</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Trusted Quality</h3>
                            <p class="text-gray-600">Every product goes through strict testing and evaluation to make sure it matches—or even surpasses—the standards set by the Bureau of Indian Standards.</p>
                        </div>

                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 border border-green-100 group hover:shadow-lg transition-all duration-300">
                            <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <span class="text-2xl">✅</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Built for Your Confidence</h3>
                            <p class="text-gray-600">The ISI mark reassures buyers that the product is dependable, safe to use, and performs as expected.</p>
                        </div>

                        <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border border-purple-100 group hover:shadow-lg transition-all duration-300">
                            <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                                <span class="text-2xl">🏆</span>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-900 mb-4">Wider Market Reach</h3>
                            <p class="text-gray-600">ISI certification helps businesses expand their presence by meeting regulatory norms and gaining broader acceptance.</p>
                        </div>
                    </div>

                    {{-- Info Box --}}
                    <div class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border border-gray-100">
                        <p class="text-lg text-gray-700 leading-relaxed">
                           In India, certain items such as electrical appliances, toys, safety equipment, LPG valves, tyres, tubes, and Portland cement must carry the ISI mark before they can be sold. For most other products, the certification is optional. However, having the ISI mark not only gives manufacturers an advantage in the market but also reassures customers about the product’s quality and safety.

                        </p>
                    </div>
                </div>
            </div>
            <div class="py-20">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Products Requiring Certification</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Items in this category must have ISI approval before being allowed for sale in India.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        {{-- Product Card --}}
                        <div class="group">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4 group-hover:scale-110 transition-transform">⚡</div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">Electrical Appliances</h3>
                                        <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Electronics</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4 group-hover:scale-110 transition-transform">🥽</div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">Safety Glasses</h3>
                                        <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Safety</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4 group-hover:scale-110 transition-transform">🔧</div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">LPG Valves</h3>
                                        <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Industrial</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4 group-hover:scale-110 transition-transform">🛞</div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">Tyres &amp; Tubes</h3>
                                        <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Automotive</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4 group-hover:scale-110 transition-transform">🏗️</div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">Portland Cement</h3>
                                        <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Construction</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-200 transition-all duration-300 h-full">
                                <div class="flex items-center mb-4">
                                    <div class="text-3xl mr-4 group-hover:scale-110 transition-transform">🧸</div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 group-hover:text-blue-600 transition-colors">Toys</h3>
                                        <span class="text-sm text-gray-500 bg-gray-100 px-2 py-1 rounded-full">Consumer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-20 bg-gray-50 tabsection">
                <div class="max-w-7xl mx-auto px-6">
                    <div class="text-center mb-16">
                        <h2 class="text-4xl font-bold text-gray-900 mb-6">Types of Certification</h2>
                        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                            Select the certification route that best fits your production setup and specific needs.
                        </p>
                    </div>

                    {{-- Tabs --}}
                    <div class="flex justify-center mb-12 tabBtns">
                        <div class="bg-white rounded-2xl p-2 inline-flex shadow-sm border border-gray-200">
                            <button class="tabBtn px-8 py-3 rounded-xl font-semibold transition-all active text-white shadow-sm">
                                Domestic Manufacturers
                            </button>
                            <button class="tabBtn px-8 py-3 rounded-xl font-semibold transition-all text-gray-600 hover:text-gray-900">
                                Foreign Manufacturers
                            </button>
                        </div>
                    </div>

                    <div class="tabContentBox">
                        {{-- Domestic Manufacturers --}}
                        <div class="max-w-4xl mx-auto  tabContent">
                            <div class="text-center mb-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Domestic Manufacturers</h3>
                                <p class="text-gray-600">For manufacturers located in India</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                {{-- Process Card --}}
                                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                                    <div class="flex items-center mb-6">
                                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center text-white font-bold mr-4">
                                            01
                                        </div>
                                        <h4 class="text-xl font-semibold text-gray-900">Standard Process</h4>
                                    </div>
                                    <p class="text-gray-600 mb-6 leading-relaxed">A detailed assessment that includes complete documentation along with all necessary testing.</p>
                                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                        <div>
                                            <span class="text-sm text-gray-500">Duration</span>
                                            <div class="font-semibold text-gray-900">8-12 weeks</div>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-500">Complexity</span>
                                            <div class="font-semibold text-gray-900">Standard</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                                    <div class="flex items-center mb-6">
                                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center text-white font-bold mr-4">
                                            02
                                        </div>
                                        <h4 class="text-xl font-semibold text-gray-900">Fast-Track Process</h4>
                                    </div>
                                    <p class="text-gray-600 mb-6 leading-relaxed">A quicker route designed for eligible manufacturers, requiring minimal documentation.</p>
                                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                        <div>
                                            <span class="text-sm text-gray-500">Duration</span>
                                            <div class="font-semibold text-gray-900">4-6 weeks</div>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-500">Complexity</span>
                                            <div class="font-semibold text-gray-900">Reduced</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        {{-- Foreign Manufacturers --}}
                        <div class="max-w-4xl mx-auto tabContent">
                            <div class="text-center mb-8">
                                <h3 class="text-2xl font-bold text-gray-900 mb-2">Foreign Manufacturers</h3>
                                <p class="text-gray-600">For Overseas Manufacturers</p>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                                {{-- Process Card --}}
                                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                                    <div class="flex items-center mb-6">
                                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center text-white font-bold mr-4">
                                            01
                                        </div>
                                        <h4 class="text-xl font-semibold text-gray-900">Global Certification</h4>
                                    </div>
                                    <p class="text-gray-600 mb-6 leading-relaxed">A dedicated route for international manufacturers aiming to obtain ISI approval.</p>
                                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                        <div>
                                            <span class="text-sm text-gray-500">Duration</span>
                                            <div class="font-semibold text-gray-900">8-12 weeks</div>
                                        </div>
                                        <div>
                                            <span class="text-sm text-gray-500">Complexity</span>
                                            <div class="font-semibold text-gray-900">Standard</div>
                                        </div>
                                    </div>
                                </div>

                              

                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 tabContent">
                                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                                    
                                    <!-- Header -->
                                    <div class="flex items-center mb-6">
                                    <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-500 rounded-xl flex items-center justify-center text-white font-bold mr-4">
                                        01
                                    </div>
                                    <h4 class="text-xl font-semibold text-gray-900">
                                        International Certification
                                    </h4>
                                    </div>

                                    <!-- Description -->
                                    <p class="text-gray-600 mb-6 leading-relaxed">
                                    Specialized pathway for overseas manufacturers seeking ISI certification
                                    </p>

                                    <!-- Footer Info -->
                                    <div class="flex justify-between items-center pt-4 border-t border-gray-100">
                                    <div>
                                        <span class="text-sm text-gray-500">Duration</span>
                                        <div class="font-semibold text-gray-900">10-16 weeks</div>
                                    </div>
                                    <div>
                                        <span class="text-sm text-gray-500">Complexity</span>
                                        <div class="font-semibold text-gray-900">Enhanced</div>
                                    </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>      
                </div>
            </div>
        </div>
        {{-- license process --}}
        <div class="py-24 px-4 bg-white">
            <div class="max-w-6xl mx-auto">

                <!-- Section Heading -->
                <div class="text-center mb-20">
                    <h1 class="text-4xl md:text-5xl font-light text-gray-900 mb-4 tracking-tight">
                        ISI License Process
                    </h1>
                    <p class="text-lg text-gray-600 font-light max-w-lg mx-auto">
                        Six essential steps to obtain your ISI certification
                    </p>
                </div>

                <!-- Desktop Timeline -->
                <div class="hidden lg:block">
                    <div class="relative">
                        <div class="absolute top-16 left-16 right-16 h-px bg-gray-200">
                        <div class="h-px bg-gray-900 w-0 transition-all duration-1000 ease-out"></div>
                        </div>
                        <div class="grid grid-cols-6 gap-4">

                        <!-- Step 1 -->
                        <div class="relative group">
                            <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 relative z-10">
                                <img src="{{ asset('images/application.webp') }}" alt="Document Preparation" class="w-full h-full object-contain">
                            </div>
                            <div class="text-sm font-medium text-gray-400 mb-3 tracking-wider">STEP 01</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3 leading-tight">Document Preparation</h3>
                            <p class="text-sm text-gray-600 leading-relaxed font-light">Collect all necessary paperwork and get your application materials ready.</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative group">
                            <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 relative z-10">
                                <img src="{{ asset('images/step-2.webp') }}" alt="Application Submission" class="w-full h-full object-contain">
                            </div>
                            <div class="text-sm font-medium text-gray-400 mb-3 tracking-wider">STEP 02</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3 leading-tight">Application Submission</h3>
                            <p class="text-sm text-gray-600 leading-relaxed font-light">Submit your application along with the required supporting documents.</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative group">
                            <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 relative z-10">
                                <img src="{{ asset('images/step-3.webp') }}" alt="Inspection Scheduling" class="w-full h-full object-contain">
                            </div>
                            <div class="text-sm font-medium text-gray-400 mb-3 tracking-wider">STEP 03</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3 leading-tight">Inspection Scheduling</h3>
                            <p class="text-sm text-gray-600 leading-relaxed font-light">Arrange and plan the on-site factory inspection.</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="relative group">
                            <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 relative z-10">
                                <img src="{{ asset('images/step-4.webp') }}" alt="Factory Audit" class="w-full h-full object-contain">
                            </div>
                            <div class="text-sm font-medium text-gray-400 mb-3 tracking-wider">STEP 04</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3 leading-tight">Factory Audit</h3>
                            <p class="text-sm text-gray-600 leading-relaxed font-light">An on-site evaluation is conducted to verify compliance and processes.</p>
                            </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="relative group">
                            <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 relative z-10">
                                <img src="{{ asset('images/step-5.webp') }}" alt="Product Testing" class="w-full h-full object-contain">
                            </div>
                            <div class="text-sm font-medium text-gray-400 mb-3 tracking-wider">STEP 05</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3 leading-tight">Product Testing</h3>
                            <p class="text-sm text-gray-600 leading-relaxed font-light">Independent lab testing ensures product quality and safety.</p>
                            </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="relative group">
                            <div class="text-center">
                            <div class="w-24 h-24 mx-auto mb-6 relative z-10">
                                <img src="{{ asset('images/step-6.webp') }}" alt="License Approval" class="w-full h-full object-contain">
                            </div>
                            <div class="text-sm font-medium text-gray-400 mb-3 tracking-wider">STEP 06</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-3 leading-tight">License Approval</h3>
                            <p class="text-sm text-gray-600 leading-relaxed font-light">Final review and official issuance of the ISI license.</p>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>

                <!-- Mobile Timeline -->
                <div class="lg:hidden">
                    <div class="max-w-md mx-auto space-y-10">
                        
                        <!-- Step 1 -->
                        <div class="flex items-start gap-6">
                            <div class="flex flex-col items-center flex-shrink-0">
                                <div class="w-16 h-16">
                                <img src="{{ asset('images/application.webp') }}" alt="Document Preparation" class="w-full h-full object-contain">
                                </div>
                                <div class="w-px h-16 bg-gray-200 mt-4"></div>
                            </div>
                        <div>
                            <div class="text-xs font-medium text-gray-400 mb-2 tracking-wider">STEP 01</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Document Preparation</h3>
                            <p class="text-sm text-gray-600 font-light leading-relaxed">Collect all necessary paperwork and get your application materials ready.</p>
                        </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex items-start gap-6">
                        <div class="flex flex-col items-center flex-shrink-0">
                            <div class="w-16 h-16">
                            <img src="{{ asset('images/step-2.webp') }}" alt="Application Submission" class="w-full h-full object-contain">
                            </div>
                            <div class="w-px h-16 bg-gray-200 mt-4"></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-400 mb-2 tracking-wider">STEP 02</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Application Submission</h3>
                            <p class="text-sm text-gray-600 font-light leading-relaxed">Submit your application along with the required supporting documents.</p>
                        </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex items-start gap-6">
                        <div class="flex flex-col items-center flex-shrink-0">
                            <div class="w-16 h-16">
                            <img src="{{ asset('images/step-3.webp') }}" alt="Inspection Scheduling" class="w-full h-full object-contain">
                            </div>
                            <div class="w-px h-16 bg-gray-200 mt-4"></div>
                        </div>
                        <div>
                            <div class="text-xs font-medium text-gray-400 mb-2 tracking-wider">STEP 03</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Inspection Scheduling</h3>
                            <p class="text-sm text-gray-600 font-light leading-relaxed">Arrange and plan the on-site factory inspection.</p>
                        </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex items-start gap-6">
                            <div class="flex flex-col items-center flex-shrink-0">
                                <div class="w-16 h-16">
                                <img src="{{ asset('images/step-4.webp') }}" alt="Factory Audit" class="w-full h-full object-contain">
                                </div>
                                <div class="w-px h-16 bg-gray-200 mt-4"></div>
                            </div>
                        <div>
                            <div class="text-xs font-medium text-gray-400 mb-2 tracking-wider">STEP 04</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Factory Audit</h3>
                            <p class="text-sm text-gray-600 font-light leading-relaxed">An on-site evaluation is conducted to verify compliance and processes.</p>
                        </div>
                        </div>

                        <!-- Step 5 -->
                        <div class="flex items-start gap-6">
                            <div class="flex flex-col items-center flex-shrink-0">
                                <div class="w-16 h-16">
                                <img src="{{ asset('images/step-5.webp') }}" alt="Product Testing" class="w-full h-full object-contain">
                                </div>
                                <div class="w-px h-16 bg-gray-200 mt-4"></div>
                            </div>
                        <div>
                            <div class="text-xs font-medium text-gray-400 mb-2 tracking-wider">STEP 05</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">Product Testing</h3>
                            <p class="text-sm text-gray-600 font-light leading-relaxed">Independent lab testing ensures product quality and safety.</p>
                        </div>
                        </div>

                        <!-- Step 6 -->
                        <div class="flex items-start gap-6">
                            <div class="flex flex-col items-center flex-shrink-0">
                                <div class="w-16 h-16">
                                <img src="{{ asset('images/step-6.webp') }}" alt="License Approval" class="w-full h-full object-contain">
                                </div>
                            </div>
                        <div>
                            <div class="text-xs font-medium text-gray-400 mb-2 tracking-wider">STEP 06</div>
                            <h3 class="text-lg font-medium text-gray-900 mb-2">License Approval</h3>
                            <p class="text-sm text-gray-600 font-light leading-relaxed">Final review and official issuance of the ISI license.</p>
                        </div>
                        </div>

                    </div>
                </div>

                <!-- CTA -->
                <div class="text-center mt-20">
                    <div class="max-w-lg mx-auto">
                        <h3 class="text-xl font-light text-gray-900 mb-4">Need Help with Your Application?</h3>
                        <p class="text-gray-600 font-light mb-8 leading-relaxed">
                        Our specialists are here to walk you through every stage of the certification journey.
                        </p>
                        <div class="relative">
                            <button class="group relative bg-[#000032] text-white px-10 py-4 text-sm font-medium tracking-wide uppercase transition-all duration-300 hover:bg-gray-800 border-2 border-black hover:border-gray-800 overflow-hidden rounded-md" onclick="document.getElementById('enquiryModal').classList.remove('hidden')">
                                <span class="relative z-10">Schedule Free Consultation</span>
                                <div class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out"></div>
                                <span class="absolute inset-0 flex items-center justify-center text-black font-medium tracking-wide uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">Schedule Free Consultation</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- bg gray --}}
        <div class="min-h-screen bg-gray-50">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16 lg:py-20">
                
                <!-- Header -->
                <div class="text-center mb-16">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-600 rounded-2xl mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-4">BIS-ISI Certification</h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Requirements for Obtaining a Domestic License
                </p>
                </div>

                <!-- Eligibility Criteria -->
                <div class="bg-white rounded-3xl p-8 sm:p-10 mb-12 shadow-sm border border-gray-100">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-blue-50 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    </div>
                    <div>
                    <h2 class="text-lg font-semibold text-gray-900 mb-3">Eligibility Criteria</h2>
                    <p class="text-gray-600 leading-relaxed">
                       Indian-based manufacturers are eligible to apply for a domestic license, provided the following conditions are fulfilled before application submission.
                    </p>
                    </div>
                </div>
                </div>

                <!-- Checklist of Requirements -->
                <div class="bg-white rounded-3xl p-8 sm:p-10 shadow-sm border border-gray-100">
                <div class="flex items-center gap-4 mb-10">
                    <div class="w-12 h-12 bg-gray-900 rounded-2xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                        d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    </div>
                    <div>
                    <h2 class="text-2xl font-bold text-gray-900">Checklist of Requirements</h2>
                    <p class="text-gray-500 mt-1">7 key conditions that must be met</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <!-- Requirement 1 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">1</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                        The product must comply with the relevant Indian Standard.
                    </p>
                    </div>

                    <!-- Requirement 2 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">2</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                        The factory should have a complete in-house manufacturing setup.
                    </p>
                    </div>

                    <!-- Requirement 3 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">3</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                        An in-house testing facility must be available for the specific Indian Standard being applied for, though limited outsourcing is permitted.
                    </p>
                    </div>

                    <!-- Requirement 4 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">4</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                       The manufacturer’s testing lab should have qualified and skilled quality control personnel to conduct tests as per the applicable Indian Standard.
                    </p>
                    </div>

                    <!-- Requirement 5 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">5</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                        The applicant must agree to follow the Scheme of Testing & Inspection (STI).
                    </p>
                    </div>

                    <!-- Requirement 6 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">6</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                        The annual marking fee, as determined by the competent authority, must be paid.
                    </p>
                    </div>

                    <!-- Requirement 7 -->
                    <div
                    class="group flex items-start gap-6 p-6 rounded-2xl border border-gray-100 hover:border-blue-200 hover:bg-blue-50/30 transition-all duration-200">
                    <div
                        class="flex-shrink-0 w-8 h-8 bg-gray-100 group-hover:bg-blue-600 rounded-xl flex items-center justify-center transition-colors duration-200">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-white">7</span>
                    </div>
                    <p class="text-gray-700 leading-relaxed pt-1">
                        A separate application must be filed for each product/Indian Standard and for every factory location.
                    </p>
                    </div>
                </div>
                </div>

                <!-- Important Reminder -->
                <div class="mt-12 bg-amber-50 rounded-2xl p-6 border border-amber-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-10 h-10 bg-amber-100 rounded-xl flex items-center justify-center">
                    <svg class="w-5 h-5 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                        d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                    </svg>
                    </div>
                    <div>
                    <h3 class="font-semibold text-amber-900 mb-2">Important Reminder</h3>
                    <p class="text-amber-800 leading-relaxed">
                       A separate application must be submitted for every product, Indian Standard, and factory location. Be prepared to apply individually if multiple certifications are needed.
                    </p>
                    </div>
                </div>
                </div>

            </div>
        </div>
        {{-- faqs --}}
        <div class="w-full max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-12">
                Frequently Asked Questions
            </h2>

            <div class="space-y-4">
                <!-- FAQ Item -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                    What is ISI Certification and why is it important?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
                <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                    <p class="text-gray-600 leading-relaxed">
                        ISI Certification is a quality standard mark issued by the Bureau of Indian Standards (BIS). It ensures that a product complies with Indian safety, reliability, and performance benchmarks. For consumers, it builds trust, while for manufacturers, it provides market credibility and compliance with regulations.
                    
                    </div>
                </div>
                </div>

                <!-- Duplicate the same structure for other FAQs -->
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Is ISI Certification mandatory for all products in India?
                        </h3>    
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                        No. ISI Certification is mandatory only for certain products such as electrical appliances, toys, LPG valves, tyres, tubes, and cement, among others. For most other products, it is voluntary but highly recommended for gaining consumer confidence and wider market acceptance.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                           Who can apply for ISI Certification?
                        </h3>   
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Both Indian and foreign manufacturers can apply for ISI Certification. Domestic manufacturers apply under the regular process, while overseas manufacturers follow a separate certification pathway designed for international applicants.
                        </p>
                        </div>
                    </div>
                </div>
               <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                           What is the process to obtain ISI Certification?
                        </h3>    
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            The process includes document preparation, application submission, factory inspection, product testing in a BIS-recognized lab, and final license approval. Once approved, the manufacturer can use the ISI mark on their certified products.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                           How long does it take to get ISI Certification?
                        </h3>   
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                                The time frame depends on the type of process (standard or simplified), readiness of documentation, and successful completion of testing and inspection. Typically, it can take anywhere between 4 to 8 weeks for approval, provided all requirements are met.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                           What are the costs involved in obtaining ISI Certification?
                        </h3>    
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                                The cost of ISI Certification includes application fees, product testing charges, inspection expenses, and the annual marking fee decided by BIS. The total amount may vary depending on the product type, number of applications, and factory location.
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
