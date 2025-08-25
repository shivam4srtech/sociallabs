@extends('layouts.app')
@section('title','Welcome')
@push('pagecss')
<link rel="stylesheet" href="{{ asset('css/home.css') }}" as="style">
@endpush

@section('content')
<div class="pt-[69px]">
    <div>
        <section id="hero2-section" class="w-full">
            <div class="relative flex flex-col items-start h-[50vh] sm:h-[60vh] md:h-[calc(100vh-48px)] w-full shadow-lg overflow-hidden">

                <!-- Video Backgrounds -->
                <video 
                    autoplay 
                    muted 
                    loop 
                    playsinline 
                    preload="auto" 
                    poster="{{ asset('images/testing.jpg') }}"
                    class="absolute inset-0 w-full h-full object-cover z-0 transition-all duration-1000 ease-out opacity-100"
                    style="will-change: opacity; backface-visibility: hidden; filter: brightness(1) contrast(1.05);"
                >
                    <source src="{{ asset('vid/testing.webm') }}" type="video/webm">
                    <source src="{{ asset('vid/testing.mp4') }}" type="video/mp4">
                </video>


                <video 
                 autoplay 
                 muted 
                loop 
                playsinline 
                preload="metadata" 
                poster="/homepage/herosection/poster/certification.jpg"
                class="absolute inset-0 w-full h-full object-cover z-0 transition-all duration-1000 ease-out opacity-0"
                style="will-change: auto; backface-visibility: hidden; filter: brightness(0.9);"
                >
                <source src="{{asset('images/certification.webm')}}" type="video/webm">
                <source src="{{asset('vid/certification.mp4')}}" type="video/mp4">
                </video>

                <video 
                loop 
                playsinline 
                preload="metadata" 
                poster="/homepage/herosection/poster/consulting.jpg"
                class="absolute inset-0 w-full h-full object-cover z-0 transition-all duration-1000 ease-out opacity-0"
                style="will-change: auto; backface-visibility: hidden; filter: brightness(0.9);"
                >
                <source src="{{asset('images/consulting.webm')}}" type="video/webm">
                <source src="{{asset('vid/consulting.mp4')}}" type="video/mp4">
                </video>

                <!-- Poster Fallback -->
                <div 
                class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat transition-opacity duration-700 ease-in-out opacity-0" 
                style="background-image: url('/homepage/herosection/poster/testing.jpg');">
                </div>

                <!-- Overlays -->
                <div class="absolute inset-0 z-10 hidden md:block" style="background: linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%);"></div>
                <div class="absolute inset-0 z-10 bg-black/40 md:hidden"></div>

                <!-- Hero Content -->
                <div class="absolute inset-0 z-20 flex flex-col w-full h-full px-4 sm:px-6 md:px-8 lg:px-12 py-4 sm:py-6 justify-center md:justify-end items-start">

                <!-- Headline Words -->
                <div class="flex flex-col sm:flex-row sm:space-x-2 space-y-2 sm:space-y-0 mb-6 sm:mb-4 items-start sm:items-center justify-start">
                    <div class="relative px-1 py-2 rounded-lg flex-shrink-0 cursor-pointer text-2xl sm:text-3xl md:text-7xl whitespace-nowrap font-poppins professional-transition transform-gpu word-active"
                        style="transform: scale(1.05) translateY(-2px); letter-spacing: 0.02em; color: #fff";>
                    Testing.
                    </div>
                    <div class="relative px-1 py-2 rounded-lg flex-shrink-0 cursor-pointer text-2xl sm:text-3xl md:text-7xl whitespace-nowrap font-poppins professional-transition transform-gpu word-inactive text-white">
                    Certification.
                    </div>
                    <div class="relative px-1 py-2 rounded-lg flex-shrink-0 cursor-pointer text-2xl sm:text-3xl md:text-7xl whitespace-nowrap font-poppins professional-transition transform-gpu word-inactive text-white">
                    Consultation.
                    </div>
                </div>

                <!-- Desktop Paragraph -->
                <div class="hidden md:block font-light text-lg md:text-2xl max-w-5xl md:pl-1 md:mb-4 text-justify paragraph-enter text-white"
                    style="text-shadow: rgba(0, 0, 0, 0.5) 0px 1px 4px; line-height: 1.6; letter-spacing: 0.01em;">
                    <p>We help provide accurate and reliable product testing to ensure your offerings meet all regulatory and quality standards, helping you reduce risk and launch with confidence.</p>
                </div>
                </div>
            </div>

            <!-- Mobile Paragraph -->
            <div class="block md:hidden bg-white px-4 sm:px-6 py-6 sm:py-8">
                <div class="text-gray-800 font-light text-base sm:text-lg leading-relaxed text-justify paragraph-enter subtle-highlight pl-4 py-3">
                <p>We help provide accurate and reliable product testing to ensure your offerings meet all regulatory and quality standards, helping you reduce risk and launch with confidence.</p>
                </div>
            </div>
        </section>
        <section class="py-6 relative">
            <!-- Background pattern -->
            <div class="absolute inset-0 opacity-40"
                style="background-image: radial-gradient(circle at 2px 2px, rgba(0, 0, 0, 0.7) 1px, transparent 0px); background-size: 24px 24px;">
            </div>

            <div class="max-w-4xl mx-auto px-6 relative">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-12 items-center justify-items-center">

                    <!-- ISO 27001 -->
                    <div class="flex flex-col items-center space-y-3">
                        <div class="hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/iso27001.webp') }}"
                                alt="ISO 27001 Certification Logo"
                                width="130" height="80"
                                class="object-contain">
                        </div>
                    </div>

                    <!-- ISO 9001 -->
                    <div class="flex flex-col items-center space-y-3">
                        <div class="hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/iso9001.webp') }}"
                                alt="ISO 9001 Certification Logo"
                                width="120" height="80"
                                class="object-contain">
                        </div>
                    </div>

                    <!-- MAIT -->
                    <div class="flex flex-col items-center space-y-3">
                        <div class="hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/mait.webp') }}"
                                alt="MAIT Member Logo"
                                width="140" height="80"
                                class="object-contain">
                        </div>
                    </div>

                    <!-- GPTW -->
                    <div class="flex flex-col items-center space-y-3">
                        <div class="hover:scale-105 transition-transform duration-300">
                            <img src="{{ asset('images/gptw.webp') }}"
                                alt="Great Place to Work Certified Logo"
                                width="160" height="80"
                                class="object-contain">
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- number counter --}}
        <section class="bg-white py-2 md:py-10">
            <div class="max-w-7xl mx-auto px-6 md:px-16">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 lg:gap-20 items-start">

                    <!-- Left Content -->
                    <div class="lg:col-span-6 space-y-12">
                        <div class="space-y-8 transition-all duration-1000 ease-out opacity-100 translate-y-0">

                            <!-- Since 2012 -->
                            <div class="inline-flex items-center">
                                <div class="w-12 h-px bg-black mr-4"></div>
                                <span class="text-sm font-medium tracking-wider text-gray-600 uppercase">
                                    Since 2012
                                </span>
                            </div>

                            <!-- Heading -->
                            <div class="space-y-6">
                                <h2 class="text-4xl md:text-5xl lg:text-5xl font-thin text-black leading-[1.1] tracking-tight font-poppins">
                                    Trusted Partner in
                                    <em class="block font-semibold text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600 not-italic py-1">
                                        Regulatory Excellence
                                    </em>
                                </h2>
                            </div>

                            <!-- Description -->
                            <div class="space-y-6 text-gray-600 leading-relaxed max-w-2xl text-justify font-poppins">
                                <p class="text-lg">
                                    Vincular has established itself as a trusted partner in India's regulatory framework
                                    by facilitating approvals for a wide range of consumer products.
                                </p>
                                <p class="text-lg">
                                    Our expertise enables businesses to confidently enter and succeed in the Indian market
                                    with strict adherence to safety and environmental norms.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Stats -->
                    <div class="lg:col-span-6 flex justify-center lg:justify-start items-center md:pl-24 font-bold">
                        <div class="grid grid-cols-2 gap-0 max-w-lg">

                            <!-- Stat 1 -->
                            <div class="group relative transition-all duration-1000 ease-out opacity-100 translate-y-0" style="transition-delay: 0ms;">
                                <div class="py-8">
                                    <div class="space-y-3">
                                        <div class="text-5xl md:text-6xl font-bold text-black tabular-nums"> <span class="counter" data-target="800">0</span>+</div>
                                        <div class="text-xs text-gray-500 font-bold tracking-[0.15em] uppercase leading-relaxed">
                                            <div class="block">HAPPY CLIENTS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stat 2 -->
                            <div class="group relative transition-all duration-1000 ease-out opacity-100 translate-y-0" style="transition-delay: 150ms;">
                                <div class="py-8">
                                    <div class="space-y-3">
                                        <div class="text-5xl md:text-6xl font-bold text-black tabular-nums"><span class="counter" data-target="35000">0</span>+</div>
                                        <div class="text-xs text-gray-500 font-bold tracking-[0.15em] uppercase leading-relaxed">
                                            <div class="block">TOTAL PROJECTS</div>
                                            <div class="block">HANDLED</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stat 3 -->
                            <div class="group relative transition-all duration-1000 ease-out opacity-100 translate-y-0" style="transition-delay: 300ms;">
                                <div class="py-8">
                                    <div class="space-y-3">
                                        <div class="text-5xl md:text-6xl font-bold text-black tabular-nums"><span class="counter" data-target="12">0</span>+</div>
                                        <div class="text-xs text-gray-500 font-bold tracking-[0.15em] uppercase leading-relaxed">
                                            <div class="block">YEARS OF</div>
                                            <div class="block">TRUSTED SERVICE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stat 4 -->
                            <div class="group relative transition-all duration-1000 ease-out opacity-100 translate-y-0" style="transition-delay: 450ms;">
                                <div class="py-8">
                                    <div class="space-y-3">
                                        <div class="text-5xl md:text-6xl font-bold text-black tabular-nums"><span class="counter" data-target="80">0</span>+</div>
                                        <div class="text-xs text-gray-500 font-bold tracking-[0.15em] uppercase leading-relaxed">
                                            <div class="block">EXPERTS AT YOUR</div>
                                            <div class="block">SERVICE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <!-- CTA Button -->
                <div class="flex justify-center mt-10">
                    <div class="relative">
                        <button
                            class="group relative bg-[#000032] text-white px-10 py-4 text-sm font-medium tracking-wide uppercase transition-all duration-300 hover:bg-gray-800 border-2 border-black hover:border-gray-800 overflow-hidden rounded-md">
                            <span class="relative z-10">Start Free Consultation</span>
                            <div
                                class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out">
                            </div>
                            <span
                                class="absolute inset-0 flex items-center justify-center text-black font-medium tracking-wide uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">
                                Start Free Consultation
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- testimonial --}}
        <section class="py-14 bg-gray-50">
            <div class="container mx-auto px-4 max-w-7xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6">
                        Trusted by Industry
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">
                        Leaders Worldwide
                        </span>
                    </h2>
                    
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Join hundreds of satisfied clients who have transformed their business with our expert solutions
                    </p>
                </div>
                <div class="mb-12 relative">
                    <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-0">
                        
                        <!-- Testimonial 1 -->
                        <div>
                            <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 
                                        hover:shadow-xl hover:border-gray-200 transition-all duration-300 
                                        hover:-translate-y-1 break-inside-avoid mb-6">
                                <div class="flex flex-col">
                                
                                <!-- Stars -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex space-x-1">
                                        <!-- 5 Stars -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Feedback -->
                                <blockquote class="text-gray-700 leading-relaxed mb-6">
                                    "Quite good experience for working with Vincular. Your response to both BIS
                                    inquires and applications are of high efficiency and very clear. Appreciated
                                    if you may give us more instruction/explanation to the updated regulation of
                                    India in future."
                                </blockquote>
                                
                                <!-- Author -->
                                <div class="flex items-center space-x-3">
                                    <img 
                                    class="rounded-full"
                                    alt="Judy Wu"
                                    loading="lazy"
                                    width="40"
                                    height="40"
                                    src="{{asset('images/judy.webp')}}"
                                    >
                                    <div>
                                    <h4 class="font-medium text-gray-900 text-sm">Judy Wu</h4>
                                    <p class="text-gray-500 text-xs">Intertek Testing Services Ltd, Shanghai</p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-2 -->
                        <div>
                            <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 
                                        hover:shadow-xl hover:border-gray-200 transition-all duration-300 
                                        hover:-translate-y-1 break-inside-avoid mb-6">
                                <div class="flex flex-col">
                                
                                <!-- Stars -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex space-x-1">
                                        <!-- 5 Stars -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Feedback -->
                                <blockquote class="text-gray-700 leading-relaxed mb-6">
                                    "Quite good experience for working with Vincular. Your response to both BIS
                                    inquires and applications are of high efficiency and very clear. Appreciated
                                    if you may give us more instruction/explanation to the updated regulation of
                                    India in future."
                                </blockquote>
                                
                                <!-- Author -->
                                <div class="flex items-center space-x-3">
                                    <img 
                                    class="rounded-full"
                                    alt="Judy Wu"
                                    loading="lazy"
                                    width="40"
                                    height="40"
                                    src="{{asset('images/judy.webp')}}"
                                    >
                                    <div>
                                    <h4 class="font-medium text-gray-900 text-sm">Judy Wu</h4>
                                    <p class="text-gray-500 text-xs">Intertek Testing Services Ltd, Shanghai</p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-2 -->
                        <div>
                            <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 
                                        hover:shadow-xl hover:border-gray-200 transition-all duration-300 
                                        hover:-translate-y-1 break-inside-avoid mb-6">
                                <div class="flex flex-col">
                                
                                <!-- Stars -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex space-x-1">
                                        <!-- 5 Stars -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Feedback -->
                                <blockquote class="text-gray-700 leading-relaxed mb-6">
                                    "Quite good experience for working with Vincular. Your response to both BIS
                                    inquires and applications are of high efficiency and very clear. Appreciated
                                    if you may give us more instruction/explanation to the updated regulation of
                                    India in future."
                                </blockquote>
                                
                                <!-- Author -->
                                <div class="flex items-center space-x-3">
                                    <img 
                                    class="rounded-full"
                                    alt="Judy Wu"
                                    loading="lazy"
                                    width="40"
                                    height="40"
                                    src="{{asset('images/judy.webp')}}"
                                    >
                                    <div>
                                    <h4 class="font-medium text-gray-900 text-sm">Judy Wu</h4>
                                    <p class="text-gray-500 text-xs">Intertek Testing Services Ltd, Shanghai</p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        
                        

                        <!-- Repeat for other testimonials (2, 3, 4...) -->
                        
                    </div>
                    <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-0">
                        
                        <!-- Testimonial 1 -->
                        <div>
                            <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 
                                        hover:shadow-xl hover:border-gray-200 transition-all duration-300 
                                        hover:-translate-y-1 break-inside-avoid mb-6">
                                <div class="flex flex-col">
                                
                                <!-- Stars -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex space-x-1">
                                        <!-- 5 Stars -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Feedback -->
                                <blockquote class="text-gray-700 leading-relaxed mb-6">
                                    "Quite good experience for working with Vincular. Your response to both BIS
                                    inquires and applications are of high efficiency and very clear. Appreciated
                                    if you may give us more instruction/explanation to the updated regulation of
                                    India in future."
                                </blockquote>
                                
                                <!-- Author -->
                                <div class="flex items-center space-x-3">
                                    <img 
                                    class="rounded-full"
                                    alt="Judy Wu"
                                    loading="lazy"
                                    width="40"
                                    height="40"
                                    src="{{asset('images/judy.webp')}}"
                                    >
                                    <div>
                                    <h4 class="font-medium text-gray-900 text-sm">Judy Wu</h4>
                                    <p class="text-gray-500 text-xs">Intertek Testing Services Ltd, Shanghai</p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-2 -->
                        <div>
                            <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 
                                        hover:shadow-xl hover:border-gray-200 transition-all duration-300 
                                        hover:-translate-y-1 break-inside-avoid mb-6">
                                <div class="flex flex-col">
                                
                                <!-- Stars -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex space-x-1">
                                        <!-- 5 Stars -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Feedback -->
                                <blockquote class="text-gray-700 leading-relaxed mb-6">
                                    "Quite good experience for working with Vincular. Your response to both BIS
                                    inquires and applications are of high efficiency and very clear. Appreciated
                                    if you may give us more instruction/explanation to the updated regulation of
                                    India in future."
                                </blockquote>
                                
                                <!-- Author -->
                                <div class="flex items-center space-x-3">
                                    <img 
                                    class="rounded-full"
                                    alt="Judy Wu"
                                    loading="lazy"
                                    width="40"
                                    height="40"
                                    src="{{asset('images/judy.webp')}}"
                                    >
                                    <div>
                                    <h4 class="font-medium text-gray-900 text-sm">Judy Wu</h4>
                                    <p class="text-gray-500 text-xs">Intertek Testing Services Ltd, Shanghai</p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial-2 -->
                        <div>
                            <div class="group relative bg-white rounded-2xl p-6 shadow-sm border border-gray-100 
                                        hover:shadow-xl hover:border-gray-200 transition-all duration-300 
                                        hover:-translate-y-1 break-inside-avoid mb-6">
                                <div class="flex flex-col">
                                
                                <!-- Stars -->
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex space-x-1">
                                        <!-- 5 Stars -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 fill-amber-400 text-amber-400" aria-hidden="true">
                                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                                        </svg>
                                    </div>
                                </div>
                                
                                <!-- Feedback -->
                                <blockquote class="text-gray-700 leading-relaxed mb-6">
                                    "Quite good experience for working with Vincular. Your response to both BIS
                                    inquires and applications are of high efficiency and very clear. Appreciated
                                    if you may give us more instruction/explanation to the updated regulation of
                                    India in future."
                                </blockquote>
                                
                                <!-- Author -->
                                <div class="flex items-center space-x-3">
                                    <img 
                                    class="rounded-full"
                                    alt="Judy Wu"
                                    loading="lazy"
                                    width="40"
                                    height="40"
                                    src="{{asset('images/judy.webp')}}"
                                    >
                                    <div>
                                    <h4 class="font-medium text-gray-900 text-sm">Judy Wu</h4>
                                    <p class="text-gray-500 text-xs">Intertek Testing Services Ltd, Shanghai</p>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="bg-white rounded-3xl py-8 md:p-12 shadow-sm border border-gray-100">
                    <!-- Heading & Subtext -->
                    <div class="mt-2 text-center">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        Ready to Join Our Success Stories?
                        </h3>
                        <p class="text-gray-600 mb-8 max-w-2xl mx-auto">
                        Experience the same exceptional service that our clients rave about.
                        Let's discuss how we can help transform your business.
                        </p>
                    </div>
                    
                    <!-- CTA Button -->
                    <div class="flex justify-center">
                        <div class="relative">
                        <button 
                            class="group relative bg-[#000032] text-white px-10 py-4 text-sm font-medium 
                                tracking-wide uppercase transition-all duration-300 hover:bg-gray-800 
                                border-2 border-black hover:border-gray-800 overflow-hidden rounded-md">
                            
                            <!-- Default Button Text -->
                            <span class="relative z-10">Start Free Consultation</span>
                            
                            <!-- Hover Background Animation -->
                            <div class="absolute inset-0 bg-white transform -translate-x-full 
                                        group-hover:translate-x-0 transition-transform duration-500 ease-out">
                            </div>
                            
                            <!-- Hover Text -->
                            <span class="absolute inset-0 flex items-center justify-center text-black 
                                        font-medium tracking-wide uppercase opacity-0 group-hover:opacity-100 
                                        transition-opacity duration-300 z-20">
                            Start Free Consultation
                            </span>
                        </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="jsx-e1fb4e9d91308d96 py-16 lg:py-14 bg-slate-900">
            <div class="jsx-e1fb4e9d91308d96 max-w-7xl mx-auto px-6 lg:px-8">

                <!-- Section Header -->
                <div class="jsx-e1fb4e9d91308d96 mb-12">
                <div class="jsx-e1fb4e9d91308d96 flex items-baseline justify-between mb-6">
                    <h2 class="jsx-e1fb4e9d91308d96 text-5xl lg:text-6xl font-light text-white tracking-tight">
                    Services
                    </h2>
                </div>

                <div class="jsx-e1fb4e9d91308d96 flex flex-col lg:flex-row lg:items-center justify-between gap-6">
                    <p class="jsx-e1fb4e9d91308d96 text-xl text-gray-400 font-light max-w-2xl leading-relaxed">
                    Comprehensive compliance solutions across regulatory bodies in India and international markets.
                    </p>

                    <!-- Search Bar -->
                    <div class="jsx-e1fb4e9d91308d96 relative max-w-xs">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-search absolute left-0 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500"
                        aria-hidden="true">
                        <path d="m21 21-4.34-4.34"></path>
                        <circle cx="11" cy="11" r="8"></circle>
                    </svg>

                    <input
                        type="text"
                        placeholder="Search services..."
                        value=""
                        class="jsx-e1fb4e9d91308d96 w-full bg-transparent border-0 border-b border-gray-700 
                            focus:border-gray-500 pl-7 pr-0 py-3 text-white placeholder-gray-500 
                            focus:outline-none transition-colors duration-300 text-base"
                    />
                    </div>
                </div>
                </div>

                <!-- Masonry Grid -->
                <div class="jsx-e1fb4e9d91308d96 masonry-grid">

                    <!-- Example Service Group -->
                    <div class="jsx-e1fb4e9d91308d96 group">
                        <div class="jsx-e1fb4e9d91308d96 flex items-start gap-4 mb-6">
                        <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-lg font-mono mt-0 w-8">01</span>
                        <div class="jsx-e1fb4e9d91308d96 flex-1 min-w-0">
                            <h3 class="jsx-e1fb4e9d91308d96 text-xl font-poppins text-white mb-3 leading-tight">
                            Bureau of Indian Standards (BIS)
                            </h3>
                            <div class="jsx-e1fb4e9d91308d96 h-px bg-gray-700 group-hover:bg-gray-600 transition-colors duration-500"></div>
                        </div>
                        </div>

                        <div class="jsx-e1fb4e9d91308d96 ml-12 space-y-3">
                        <!-- Service Link -->
                        <div class="jsx-e1fb4e9d91308d96 group/service">
                            <a href="/isi"
                            class="flex items-start justify-between py-1 hover:bg-white/[0.8] 
                                    -mx-3 px-3 rounded-md transition-all duration-300 group/link">
                            
                            <div class="jsx-e1fb4e9d91308d96 flex items-start gap-3 flex-1 min-w-0">
                                <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-sm font-mono mt-1 w-6 flex-shrink-0">01</span>
                                <span class="jsx-e1fb4e9d91308d96 text-white font-poppins text-base leading-relaxed 
                                            group-hover/link:text-black transition-colors duration-300">
                                ISI Mark Certification (Scheme-1)
                                </span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-up-right w-4 h-4 text-gray-100 
                                        opacity-0 group-hover/link:opacity-100 group-hover/link:text-black 
                                        transition-all duration-300 flex-shrink-0 mt-1"
                                aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="jsx-e1fb4e9d91308d96 group">
                        <div class="jsx-e1fb4e9d91308d96 flex items-start gap-4 mb-6">
                        <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-lg font-mono mt-0 w-8">02</span>
                        <div class="jsx-e1fb4e9d91308d96 flex-1 min-w-0">
                            <h3 class="jsx-e1fb4e9d91308d96 text-xl font-poppins text-white mb-3 leading-tight">
                            Bureau of Indian Standards (BIS)
                            </h3>
                            <div class="jsx-e1fb4e9d91308d96 h-px bg-gray-700 group-hover:bg-gray-600 transition-colors duration-500"></div>
                        </div>
                        </div>

                        <div class="jsx-e1fb4e9d91308d96 ml-12 space-y-3">
                        <!-- Service Link -->
                        <div class="jsx-e1fb4e9d91308d96 group/service">
                            <a href="/isi"
                            class="flex items-start justify-between py-1 hover:bg-white/[0.8] 
                                    -mx-3 px-3 rounded-md transition-all duration-300 group/link">
                            
                            <div class="jsx-e1fb4e9d91308d96 flex items-start gap-3 flex-1 min-w-0">
                                <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-sm font-mono mt-1 w-6 flex-shrink-0">01</span>
                                <span class="jsx-e1fb4e9d91308d96 text-white font-poppins text-base leading-relaxed 
                                            group-hover/link:text-black transition-colors duration-300">
                                ISI Mark Certification (Scheme-1)
                                </span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-up-right w-4 h-4 text-gray-100 
                                        opacity-0 group-hover/link:opacity-100 group-hover/link:text-black 
                                        transition-all duration-300 flex-shrink-0 mt-1"
                                aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="jsx-e1fb4e9d91308d96 group">
                        <div class="jsx-e1fb4e9d91308d96 flex items-start gap-4 mb-6">
                        <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-lg font-mono mt-0 w-8">02</span>
                        <div class="jsx-e1fb4e9d91308d96 flex-1 min-w-0">
                            <h3 class="jsx-e1fb4e9d91308d96 text-xl font-poppins text-white mb-3 leading-tight">
                            Bureau of Indian Standards (BIS)
                            </h3>
                            <div class="jsx-e1fb4e9d91308d96 h-px bg-gray-700 group-hover:bg-gray-600 transition-colors duration-500"></div>
                        </div>
                        </div>

                        <div class="jsx-e1fb4e9d91308d96 ml-12 space-y-3">
                        <!-- Service Link -->
                        <div class="jsx-e1fb4e9d91308d96 group/service">
                            <a href="/isi"
                            class="flex items-start justify-between py-1 hover:bg-white/[0.8] 
                                    -mx-3 px-3 rounded-md transition-all duration-300 group/link">
                            
                            <div class="jsx-e1fb4e9d91308d96 flex items-start gap-3 flex-1 min-w-0">
                                <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-sm font-mono mt-1 w-6 flex-shrink-0">01</span>
                                <span class="jsx-e1fb4e9d91308d96 text-white font-poppins text-base leading-relaxed 
                                            group-hover/link:text-black transition-colors duration-300">
                                ISI Mark Certification (Scheme-1)
                                </span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-up-right w-4 h-4 text-gray-100 
                                        opacity-0 group-hover/link:opacity-100 group-hover/link:text-black 
                                        transition-all duration-300 flex-shrink-0 mt-1"
                                aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="jsx-e1fb4e9d91308d96 group">
                        <div class="jsx-e1fb4e9d91308d96 flex items-start gap-4 mb-6">
                        <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-lg font-mono mt-0 w-8">02</span>
                        <div class="jsx-e1fb4e9d91308d96 flex-1 min-w-0">
                            <h3 class="jsx-e1fb4e9d91308d96 text-xl font-poppins text-white mb-3 leading-tight">
                            Bureau of Indian Standards (BIS)
                            </h3>
                            <div class="jsx-e1fb4e9d91308d96 h-px bg-gray-700 group-hover:bg-gray-600 transition-colors duration-500"></div>
                        </div>
                        </div>

                        <div class="jsx-e1fb4e9d91308d96 ml-12 space-y-3">
                        <!-- Service Link -->
                        <div class="jsx-e1fb4e9d91308d96 group/service">
                            <a href="/isi"
                            class="flex items-start justify-between py-1 hover:bg-white/[0.8] 
                                    -mx-3 px-3 rounded-md transition-all duration-300 group/link">
                            
                            <div class="jsx-e1fb4e9d91308d96 flex items-start gap-3 flex-1 min-w-0">
                                <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-sm font-mono mt-1 w-6 flex-shrink-0">01</span>
                                <span class="jsx-e1fb4e9d91308d96 text-white font-poppins text-base leading-relaxed 
                                            group-hover/link:text-black transition-colors duration-300">
                                ISI Mark Certification (Scheme-1)
                                </span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-up-right w-4 h-4 text-gray-100 
                                        opacity-0 group-hover/link:opacity-100 group-hover/link:text-black 
                                        transition-all duration-300 flex-shrink-0 mt-1"
                                aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="jsx-e1fb4e9d91308d96 group">
                        <div class="jsx-e1fb4e9d91308d96 flex items-start gap-4 mb-6">
                        <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-lg font-mono mt-0 w-8">02</span>
                        <div class="jsx-e1fb4e9d91308d96 flex-1 min-w-0">
                            <h3 class="jsx-e1fb4e9d91308d96 text-xl font-poppins text-white mb-3 leading-tight">
                            Bureau of Indian Standards (BIS)
                            </h3>
                            <div class="jsx-e1fb4e9d91308d96 h-px bg-gray-700 group-hover:bg-gray-600 transition-colors duration-500"></div>
                        </div>
                        </div>

                        <div class="jsx-e1fb4e9d91308d96 ml-12 space-y-3">
                        <!-- Service Link -->
                        <div class="jsx-e1fb4e9d91308d96 group/service">
                            <a href="/isi"
                            class="flex items-start justify-between py-1 hover:bg-white/[0.8] 
                                    -mx-3 px-3 rounded-md transition-all duration-300 group/link">
                            
                            <div class="jsx-e1fb4e9d91308d96 flex items-start gap-3 flex-1 min-w-0">
                                <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-sm font-mono mt-1 w-6 flex-shrink-0">01</span>
                                <span class="jsx-e1fb4e9d91308d96 text-white font-poppins text-base leading-relaxed 
                                            group-hover/link:text-black transition-colors duration-300">
                                ISI Mark Certification (Scheme-1)
                                </span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-up-right w-4 h-4 text-gray-100 
                                        opacity-0 group-hover/link:opacity-100 group-hover/link:text-black 
                                        transition-all duration-300 flex-shrink-0 mt-1"
                                aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>
                    <div class="jsx-e1fb4e9d91308d96 group">
                        <div class="jsx-e1fb4e9d91308d96 flex items-start gap-4 mb-6">
                        <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-lg font-mono mt-0 w-8">02</span>
                        <div class="jsx-e1fb4e9d91308d96 flex-1 min-w-0">
                            <h3 class="jsx-e1fb4e9d91308d96 text-xl font-poppins text-white mb-3 leading-tight">
                            Bureau of Indian Standards (BIS)
                            </h3>
                            <div class="jsx-e1fb4e9d91308d96 h-px bg-gray-700 group-hover:bg-gray-600 transition-colors duration-500"></div>
                        </div>
                        </div>

                        <div class="jsx-e1fb4e9d91308d96 ml-12 space-y-3">
                        <!-- Service Link -->
                        <div class="jsx-e1fb4e9d91308d96 group/service">
                            <a href="/isi"
                            class="flex items-start justify-between py-1 hover:bg-white/[0.8] 
                                    -mx-3 px-3 rounded-md transition-all duration-300 group/link">
                            
                            <div class="jsx-e1fb4e9d91308d96 flex items-start gap-3 flex-1 min-w-0">
                                <span class="jsx-e1fb4e9d91308d96 text-gray-400 text-sm font-mono mt-1 w-6 flex-shrink-0">01</span>
                                <span class="jsx-e1fb4e9d91308d96 text-white font-poppins text-base leading-relaxed 
                                            group-hover/link:text-black transition-colors duration-300">
                                ISI Mark Certification (Scheme-1)
                                </span>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-arrow-up-right w-4 h-4 text-gray-100 
                                        opacity-0 group-hover/link:opacity-100 group-hover/link:text-black 
                                        transition-all duration-300 flex-shrink-0 mt-1"
                                aria-hidden="true">
                                <path d="M7 7h10v10"></path>
                                <path d="M7 17 17 7"></path>
                            </svg>
                            </a>
                        </div>
                        </div>
                    </div>

                <!-- Repeat same structure for BEE, WPC, TEC, STQC, GMA, Consumer Affairs, CDSCO, etc. -->
                </div>

            </div>
        </section>
        <section class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-slate-100 py-14">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">

                <!-- Section Header -->
                <div class="text-center mb-16">
                <div
                    class="inline-flex items-center gap-2 bg-gradient-to-r from-indigo-500 to-purple-600 bg-clip-text text-transparent text-sm font-semibold tracking-wide uppercase mb-4">
                    <div class="w-12 h-px bg-gradient-to-r from-transparent via-purple-600 to-transparent"></div>
                    Why Choose Us
                    <div class="w-12 h-px bg-gradient-to-r from-transparent via-purple-600 to-transparent"></div>
                </div>

                <h2 class="text-5xl md:text-6xl font-bold text-slate-900 leading-tight mb-6">
                    Built for
                    <span class="block bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
                    Excellence
                    </span>
                </h2>

                <p class="text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed">
                    Discover the core strengths that make us the ultimate choice for your success.
                </p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Feature 01 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 lg:mt-8">
                    <div class="absolute inset-0 bg-gradient-to-br from-amber-400 to-orange-500 opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>

                    <div class="relative p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                        class="p-3 rounded-xl bg-gradient-to-br from-amber-400 to-orange-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-award w-6 h-6 text-white" aria-hidden="true">
                            <path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"></path>
                            <circle cx="12" cy="8" r="6"></circle>
                        </svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-xs font-mono text-slate-400 tracking-wider">01</span>
                        <span class="text-xs uppercase tracking-wider font-semibold text-slate-500">Heritage</span>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-slate-800 transition-colors duration-300">
                        Delivering value since 2012
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm group-hover:text-slate-700 transition-colors duration-300">
                        Over a decade of consistent excellence, building trust and partnerships that stand the test of time.
                    </p>
                    </div>
                </div>

                <!-- Feature 02 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-400 to-teal-500 opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>

                    <div class="relative p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                        class="p-3 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-trending-up w-6 h-6 text-white" aria-hidden="true">
                            <path d="M16 7h6v6"></path>
                            <path d="m22 7-8.5 8.5-5-5L2 17"></path>
                        </svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-xs font-mono text-slate-400 tracking-wider">02</span>
                        <span class="text-xs uppercase tracking-wider font-semibold text-slate-500">Performance</span>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-slate-800 transition-colors duration-300">
                        Reduced cost of compliance and faster time to market
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm group-hover:text-slate-700 transition-colors duration-300">
                        Streamlined processes that cut costs significantly while accelerating your journey to market success.
                    </p>
                    </div>
                </div>

                <!-- Feature 03 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 lg:mt-8">
                    <div class="absolute inset-0 bg-gradient-to-br from-fuchsia-400 to-pink-500 opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>

                    <div class="relative p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                        class="p-3 rounded-xl bg-gradient-to-br from-fuchsia-400 to-pink-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-shield-check w-6 h-6 text-white" aria-hidden="true">
                            <path d="M9 12l2 2 4-4"></path>
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-xs font-mono text-slate-400 tracking-wider">03</span>
                        <span class="text-xs uppercase tracking-wider font-semibold text-slate-500">Security</span>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-slate-800 transition-colors duration-300">
                        Enterprise-grade protection
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm group-hover:text-slate-700 transition-colors duration-300">
                        Your data and operations are safeguarded by cutting-edge security protocols and compliance measures.
                    </p>
                    </div>
                </div>

                <!-- Feature 04 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-blue-500 opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>

                    <div class="relative p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                        class="p-3 rounded-xl bg-gradient-to-br from-sky-400 to-blue-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-users w-6 h-6 text-white" aria-hidden="true">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-xs font-mono text-slate-400 tracking-wider">04</span>
                        <span class="text-xs uppercase tracking-wider font-semibold text-slate-500">Community</span>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-slate-800 transition-colors duration-300">
                        Trusted by 35,000+ professionals
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm group-hover:text-slate-700 transition-colors duration-300">
                        A vibrant global network of experts, innovators, and leaders collaborating for success.
                    </p>
                    </div>
                </div>

                <!-- Feature 05 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 lg:mt-8">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-violet-600 opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>

                    <div class="relative p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                        class="p-3 rounded-xl bg-gradient-to-br from-purple-400 to-violet-600 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-zap w-6 h-6 text-white" aria-hidden="true">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path>
                        </svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-xs font-mono text-slate-400 tracking-wider">05</span>
                        <span class="text-xs uppercase tracking-wider font-semibold text-slate-500">Innovation</span>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-slate-800 transition-colors duration-300">
                        Cutting-edge solutions
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm group-hover:text-slate-700 transition-colors duration-300">
                        Continuously evolving technologies and services designed to keep you ahead of the curve.
                    </p>
                    </div>
                </div>

                <!-- Feature 06 -->
                <div
                    class="group relative overflow-hidden rounded-2xl bg-white/70 backdrop-blur-sm border border-white/20 shadow-xl hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <div class="absolute inset-0 bg-gradient-to-br from-lime-400 to-green-500 opacity-0 group-hover:opacity-5 transition-opacity duration-500"></div>

                    <div class="relative p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div
                        class="p-3 rounded-xl bg-gradient-to-br from-lime-400 to-green-500 shadow-lg group-hover:scale-110 transition-transform duration-300">
                        <!-- Icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"
                            class="lucide lucide-globe-2 w-6 h-6 text-white" aria-hidden="true">
                            <path d="M3 12h18"></path>
                            <path d="M12 21a9 9 0 0 0 0-18 9 9 0 0 0 0 18z"></path>
                            <path d="M12 3a9 9 0 0 0 0 18"></path>
                        </svg>
                        </div>
                        <div class="flex flex-col">
                        <span class="text-xs font-mono text-slate-400 tracking-wider">06</span>
                        <span class="text-xs uppercase tracking-wider font-semibold text-slate-500">Global Reach</span>
                        </div>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900 leading-tight mb-4 group-hover:text-slate-800 transition-colors duration-300">
                        Serving 50+ countries worldwide
                    </h3>
                    <p class="text-slate-600 leading-relaxed text-sm group-hover:text-slate-700 transition-colors duration-300">
                        Expanding horizons with a strong international presence and global customer satisfaction.
                    </p>
                    </div>
                </div>

                </div>
            </div>
        </section>
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                
                <!-- Section Heading -->
                <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Latest Insights & Updates
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Stay ahead with our expert articles, tips, and industry news.
                </p>
                </div>

                <!-- Blog Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

                <!-- Post 1 -->
                <article class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('images/blog-bg.webp') }}" alt="Post 1" class="w-full h-56 object-cover">
                    <div class="p-8">
                        <span class="text-sm text-indigo-600 font-semibold">Business</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-4">
                            How to Scale Your Business Globally
                        </h3>
                        <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-between">
                                <!-- Left: Date -->
                                <div class="jsx-b4dbca514fa1d9e1 flex items-center gap-2 text-sm text-slate-500">
                                    <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-center w-7 h-7 rounded-full bg-slate-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" 
                                        fill="none" 
                                        stroke="currentColor" 
                                        stroke-width="2" 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        class="lucide lucide-calendar w-3.5 h-3.5" 
                                        aria-hidden="true">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    </div>
                                    <span class="jsx-b4dbca514fa1d9e1 font-medium">Mar 12, 2025</span>
                                </div>

                                <!-- Right: Read More -->
                                <div class="jsx-b4dbca514fa1d9e1 flex items-center gap-2 text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors duration-300">
                                    <span class="jsx-b4dbca514fa1d9e1">Read</span>
                                    <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-center w-7 h-7 rounded-full bg-slate-100 group-hover:bg-slate-900 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" 
                                        fill="none" 
                                        stroke="currentColor" 
                                        stroke-width="2" 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        class="lucide lucide-arrow-right w-3.5 h-3.5 text-slate-600 group-hover:text-white group-hover:translate-x-0.5 transition-all duration-300" 
                                        aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                    </div>
                                </div>
                            </div>
                    </div>
                </article>

                <!-- Post 2 -->
                <article class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('images/blog-bg.webp') }}" alt="Post 2" class="w-full h-56 object-cover">
                    <div class="p-8">
                        <span class="text-sm text-purple-600 font-semibold">Technology</span>
                        <h3 class="text-xl font-bold text-gray-900 mt-3 mb-4">
                            Emerging Tech Trends to Watch in 2025
                        </h3>
                        <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-between">
                                <!-- Left: Date -->
                                <div class="jsx-b4dbca514fa1d9e1 flex items-center gap-2 text-sm text-slate-500">
                                    <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-center w-7 h-7 rounded-full bg-slate-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" 
                                        fill="none" 
                                        stroke="currentColor" 
                                        stroke-width="2" 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        class="lucide lucide-calendar w-3.5 h-3.5" 
                                        aria-hidden="true">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    </div>
                                    <span class="jsx-b4dbca514fa1d9e1 font-medium">Mar 12, 2025</span>
                                </div>

                                <!-- Right: Read More -->
                                <div class="jsx-b4dbca514fa1d9e1 flex items-center gap-2 text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors duration-300">
                                    <span class="jsx-b4dbca514fa1d9e1">Read</span>
                                    <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-center w-7 h-7 rounded-full bg-slate-100 group-hover:bg-slate-900 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" 
                                        fill="none" 
                                        stroke="currentColor" 
                                        stroke-width="2" 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        class="lucide lucide-arrow-right w-3.5 h-3.5 text-slate-600 group-hover:text-white group-hover:translate-x-0.5 transition-all duration-300" 
                                        aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                    </div>
                                </div>
                            </div>
                    </article>

                    <!-- Post 3 -->
                    <article class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition-shadow">
                        <img src="{{ asset('images/blog-bg.webp') }}" alt="Post 3" class="w-full h-56 object-cover">
                        <div class="p-8">
                            <span class="text-sm text-green-600 font-semibold">Strategy</span>
                            <h3 class="text-xl font-bold text-gray-900 mt-3 mb-4">
                                Building a Winning Growth Strategy
                            </h3>
                            <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-between">
                                <!-- Left: Date -->
                                <div class="jsx-b4dbca514fa1d9e1 flex items-center gap-2 text-sm text-slate-500">
                                    <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-center w-7 h-7 rounded-full bg-slate-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" 
                                        fill="none" 
                                        stroke="currentColor" 
                                        stroke-width="2" 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        class="lucide lucide-calendar w-3.5 h-3.5" 
                                        aria-hidden="true">
                                        <path d="M8 2v4"></path>
                                        <path d="M16 2v4"></path>
                                        <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                                        <path d="M3 10h18"></path>
                                    </svg>
                                    </div>
                                    <span class="jsx-b4dbca514fa1d9e1 font-medium">Mar 12, 2025</span>
                                </div>

                                <!-- Right: Read More -->
                                <div class="jsx-b4dbca514fa1d9e1 flex items-center gap-2 text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors duration-300">
                                    <span class="jsx-b4dbca514fa1d9e1">Read</span>
                                    <div class="jsx-b4dbca514fa1d9e1 flex items-center justify-center w-7 h-7 rounded-full bg-slate-100 group-hover:bg-slate-900 transition-all duration-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="24" height="24" 
                                        viewBox="0 0 24 24" 
                                        fill="none" 
                                        stroke="currentColor" 
                                        stroke-width="2" 
                                        stroke-linecap="round" 
                                        stroke-linejoin="round" 
                                        class="lucide lucide-arrow-right w-3.5 h-3.5 text-slate-600 group-hover:text-white group-hover:translate-x-0.5 transition-all duration-300" 
                                        aria-hidden="true">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="py-16 md:py-24 bg-gradient-to-b from-white to-slate-50 relative overflow-hidden">
            <!-- Background gradients -->
            <div class="jsx-395c320bb81947fe absolute inset-0 bg-gradient-radial from-blue-100/20 via-transparent to-transparent"></div>
            <div class="jsx-395c320bb81947fe absolute inset-0 bg-gradient-radial from-emerald-100/20 via-transparent to-transparent"></div>

            <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl relative">
                <!-- Header -->
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-end mb-12 md:mb-16">
                    <div class="mb-8 sm:mb-0">
                        <div class="flex items-center gap-3 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-gradient-to-br from-slate-900 to-slate-700 shadow-lg">
                            <!-- File Icon -->
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            <path d="M10 9H8"></path>
                            <path d="M16 13H8"></path>
                            <path d="M16 17H8"></path>
                            </svg>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-emerald-500" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063L2.365 12.48a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                            <path d="M20 3v4"></path>
                            <path d="M22 5h-4"></path>
                            <path d="M4 17v2"></path>
                            <path d="M5 18H3"></path>
                            </svg>
                            <span class="text-sm font-medium text-slate-600 uppercase tracking-wider">Latest Research</span>
                        </div>
                        </div>
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 tracking-tight leading-tight">
                        Our <span class="relative">
                            <span class="bg-gradient-to-r from-slate-900 via-slate-700 to-slate-900 bg-clip-text text-transparent">Publications</span>
                            <div class="absolute -bottom-2 left-0 right-0 h-1 bg-gradient-to-r from-transparent via-slate-300 to-transparent rounded-full"></div>
                        </span>
                        </h2>
                        <p class="text-slate-600 mt-4 text-lg max-w-md">
                        Discover our latest research findings and insights from industry experts
                        </p>
                    </div>

                    <a href="/publications" class="group inline-flex items-center gap-3 px-6 py-3 bg-white border border-slate-200 rounded-2xl hover:border-slate-300 hover:shadow-lg transition-all duration-300 hover:-translate-y-0.5">
                        <span class="text-slate-700 font-medium">View All Publications</span>
                        <div class="flex items-center justify-center w-8 h-8 rounded-full bg-slate-100 group-hover:bg-slate-900 transition-colors duration-300">
                        <svg class="w-4 h-4 text-slate-600 group-hover:text-white group-hover:translate-x-0.5 transition-all duration-300" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                        </div>
                    </a>
                </div>
                <div class="relative">
                    <!-- Mobile layout -->
                    <div class="block sm:hidden space-y-6">
                        <!-- Card 1 -->
                        <a href="/mandatory-bis-scheme-x-for-motor-controllers-starters-and-soft-starters" class="block group">
                        <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-slate-300 hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                            <div class="relative w-full bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
                                <img src="https://wp.vincular.in/wp-content/uploads/2025/08/Day-6-IS_IEC-60947_-Part-4_-Section-2_-2020.jpg"
                                    alt="Mandatory BIS Scheme X certification applies to low-voltage switchgear and control gear, including contactors and motor starters"
                                    class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-slate-900 leading-tight group-hover:text-slate-700 transition-colors duration-300 line-clamp-2 mb-4">
                                    Mandatory BIS Scheme X for Motor Controllers, Starters, and Soft Starters
                                </h3>
                                <div class="jsx-395c320bb81947fe flex items-center justify-between">
                                    <div
                                        class="jsx-395c320bb81947fe flex items-center gap-2 text-sm font-medium text-slate-700 
                                            group-hover:text-slate-900 transition-colors duration-300"
                                    >
                                        <span class="jsx-395c320bb81947fe">Read</span>

                                        <div
                                        class="jsx-395c320bb81947fe flex items-center justify-center w-7 h-7 rounded-lg 
                                                bg-slate-100 group-hover:bg-slate-900 transition-all duration-300"
                                        >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-3.5 h-3.5 
                                                text-slate-600 group-hover:text-white 
                                                group-hover:translate-x-0.5 transition-all duration-300"
                                            aria-hidden="true"
                                        >
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        </a>

                        <!-- Card 2 -->
                        <a href="/bis-scheme-x-mandatory-for-contactors-and-motor-starters" class="block group">
                        <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-slate-300 hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                            <div class="relative w-full bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
                            <img src="https://wp.vincular.in/wp-content/uploads/2025/08/Day-5-IS_IEC-60947_-Part-4_-Section-1.jpg"
                                alt="BIS Scheme X Mandatory certification for low-voltage switchgear and Control gear such as Contactors and Motor-Starters."
                                class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-6">
                            <h3 class="text-lg font-semibold text-slate-900 leading-tight group-hover:text-slate-700 transition-colors duration-300 line-clamp-2 mb-4">
                                BIS Scheme X Mandatory for Electromechanical Contactors and Motor-Starters
                            </h3>
                             <div class="jsx-395c320bb81947fe flex items-center justify-between">
                                    <div
                                        class="jsx-395c320bb81947fe flex items-center gap-2 text-sm font-medium text-slate-700 
                                            group-hover:text-slate-900 transition-colors duration-300"
                                    >
                                        <span class="jsx-395c320bb81947fe">Read</span>

                                        <div
                                        class="jsx-395c320bb81947fe flex items-center justify-center w-7 h-7 rounded-lg 
                                                bg-slate-100 group-hover:bg-slate-900 transition-all duration-300"
                                        >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-3.5 h-3.5 
                                                text-slate-600 group-hover:text-white 
                                                group-hover:translate-x-0.5 transition-all duration-300"
                                            aria-hidden="true"
                                        >
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        </a>

                        <!-- Card 3 -->
                        <a href="/bis-scheme-x-mandatory-for-switches-disconnectors" class="block group">
                        <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-slate-300 hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                            <div class="relative w-full bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
                            <img src="https://wp.vincular.in/wp-content/uploads/2025/08/Day-4-IS_IEC-60947_-Part-5_-Sec-1_-2016.jpg"
                                alt="BIS Scheme X Mandatory certification for low-voltage switchgear and Control gear such as switches, disconnectors."
                                class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-6">
                            <h3 class="text-lg font-semibold text-slate-900 leading-tight group-hover:text-slate-700 transition-colors duration-300 line-clamp-2 mb-4">
                                BIS Scheme X Mandatory for Switches & Disconnectors
                            </h3>
                                <div class="jsx-395c320bb81947fe flex items-center justify-between">
                                    <div
                                        class="jsx-395c320bb81947fe flex items-center gap-2 text-sm font-medium text-slate-700 
                                            group-hover:text-slate-900 transition-colors duration-300"
                                    >
                                        <span class="jsx-395c320bb81947fe">Read</span>

                                        <div
                                        class="jsx-395c320bb81947fe flex items-center justify-center w-7 h-7 rounded-lg 
                                                bg-slate-100 group-hover:bg-slate-900 transition-all duration-300"
                                        >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-3.5 h-3.5 
                                                text-slate-600 group-hover:text-white 
                                                group-hover:translate-x-0.5 transition-all duration-300"
                                            aria-hidden="true"
                                        >
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        </a>
                    </div>

                    <!-- Desktop grid layout -->
                    <div class="hidden sm:block">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 items-start">
                        <!-- Card 1 -->
                        <a href="/mandatory-bis-scheme-x-for-motor-controllers-starters-and-soft-starters" class="block group">
                            <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-slate-300 hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                                <div class="relative w-full bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
                                    <img src="https://wp.vincular.in/wp-content/uploads/2025/08/Day-6-IS_IEC-60947_-Part-4_-Section-2_-2020.jpg"
                                        alt="Mandatory BIS Scheme X certification applies to low-voltage switchgear and control gear, including contactors and motor starters"
                                        class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                                </div>
                                <div class="p-6">
                                    <h3 class="text-lg font-semibold text-slate-900 leading-tight group-hover:text-slate-700 transition-colors duration-300 line-clamp-2 mb-4">
                                        Mandatory BIS Scheme X for Motor Controllers, Starters, and Soft Starters
                                    </h3>
                                    <div class="jsx-395c320bb81947fe flex items-center justify-between">
                                        <div
                                            class="jsx-395c320bb81947fe flex items-center gap-2 text-sm font-medium text-slate-700 
                                                group-hover:text-slate-900 transition-colors duration-300"
                                        >
                                            <span class="jsx-395c320bb81947fe">Read</span>

                                            <div
                                            class="jsx-395c320bb81947fe flex items-center justify-center w-7 h-7 rounded-lg 
                                                    bg-slate-100 group-hover:bg-slate-900 transition-all duration-300"
                                            >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-3.5 h-3.5 
                                                    text-slate-600 group-hover:text-white 
                                                    group-hover:translate-x-0.5 transition-all duration-300"
                                                aria-hidden="true"
                                            >
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </article>
                        </a>

                        <!-- Card 2 -->
                        <a href="/bis-scheme-x-mandatory-for-contactors-and-motor-starters" class="block group">
                            <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-slate-300 hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                            <div class="relative w-full bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
                                <img src="https://wp.vincular.in/wp-content/uploads/2025/08/Day-5-IS_IEC-60947_-Part-4_-Section-1.jpg"
                                    alt="BIS Scheme X Mandatory certification for low-voltage switchgear and Control gear such as Contactors and Motor-Starters."
                                    class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-slate-900 leading-tight group-hover:text-slate-700 transition-colors duration-300 line-clamp-2 mb-4">
                                BIS Scheme X Mandatory for Electromechanical Contactors and Motor-Starters
                                </h3>
                                  <div class="jsx-395c320bb81947fe flex items-center justify-between">
                                        <div
                                            class="jsx-395c320bb81947fe flex items-center gap-2 text-sm font-medium text-slate-700 
                                                group-hover:text-slate-900 transition-colors duration-300"
                                        >
                                            <span class="jsx-395c320bb81947fe">Read</span>

                                            <div
                                            class="jsx-395c320bb81947fe flex items-center justify-center w-7 h-7 rounded-lg 
                                                    bg-slate-100 group-hover:bg-slate-900 transition-all duration-300"
                                            >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="lucide lucide-arrow-right w-3.5 h-3.5 
                                                    text-slate-600 group-hover:text-white 
                                                    group-hover:translate-x-0.5 transition-all duration-300"
                                                aria-hidden="true"
                                            >
                                                <path d="M5 12h14"></path>
                                                <path d="m12 5 7 7-7 7"></path>
                                            </svg>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </article>
                        </a>

                        <!-- Card 3 -->
                        <a href="/bis-scheme-x-mandatory-for-switches-disconnectors" class="block group">
                            <article class="bg-white rounded-3xl border border-slate-200 overflow-hidden hover:border-slate-300 hover:shadow-xl transition-all duration-500 hover:-translate-y-1">
                            <div class="relative w-full bg-gradient-to-br from-slate-50 via-white to-slate-100 overflow-hidden">
                                <img src="https://wp.vincular.in/wp-content/uploads/2025/08/Day-4-IS_IEC-60947_-Part-5_-Sec-1_-2016.jpg"
                                    alt="BIS Scheme X Mandatory certification for low-voltage switchgear and Control gear such as switches, disconnectors."
                                    class="w-full h-auto group-hover:scale-105 transition-transform duration-700">
                            </div>
                            <div class="p-6">
                                <h3 class="text-lg font-semibold text-slate-900 leading-tight group-hover:text-slate-700 transition-colors duration-300 line-clamp-2 mb-4">
                                BIS Scheme X Mandatory for Switches & Disconnectors
                                </h3>
                                <div class="jsx-395c320bb81947fe flex items-center justify-between">
                                    <div
                                        class="jsx-395c320bb81947fe flex items-center gap-2 text-sm font-medium text-slate-700 
                                            group-hover:text-slate-900 transition-colors duration-300"
                                    >
                                        <span class="jsx-395c320bb81947fe">Read</span>

                                        <div
                                        class="jsx-395c320bb81947fe flex items-center justify-center w-7 h-7 rounded-lg 
                                                bg-slate-100 group-hover:bg-slate-900 transition-all duration-300"
                                        >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                            stroke="currentColor"
                                            stroke-width="2"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            class="lucide lucide-arrow-right w-3.5 h-3.5 
                                                text-slate-600 group-hover:text-white 
                                                group-hover:translate-x-0.5 transition-all duration-300"
                                            aria-hidden="true"
                                        >
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </article>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section
                class="my-12 mx-4 md:mx-auto max-w-4xl px-4 md:px-6 py-6 md:py-10 
                bg-gradient-to-br from-slate-900 via-slate-800 to-black 
                text-white rounded-3xl shadow-xl border border-slate-700/50 
                backdrop-blur-md"
            >
            <div class="text-center">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight mb-3">
                Stay in the Loop
                </h2>

                <p class="text-slate-300 text-base md:text-lg mb-6">
                Get insights and updates right in your inbox.
                </p>

                <a
                href="https://www.linkedin.com/build-relation/newsletter-follow?entityUrn=7026514322746937344"
                target="_blank"
                rel="noopener noreferrer"
                class="group inline-flex items-center gap-3 px-6 py-3 
                        bg-slate-700/40 hover:bg-slate-600/40 
                        text-white text-base md:text-lg font-medium 
                        rounded-full transition-all duration-300 shadow-lg 
                        hover:scale-105 ring-1 ring-white/10 hover:ring-white/20"
                >
                Subscribe Now
                <svg
                    class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M17 8l4 4m0 0l-4 4m4-4H3"
                    ></path>
                </svg>
                </a>
            </div>
        </section>
    </div>
</div>

@endsection
@push('scripts_custom')
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");
  const speed = 200; // smaller = faster

  const animateCounter = (counter) => {
    const updateCount = () => {
      const target = +counter.getAttribute("data-target");
      const count = +counter.innerText.replace(/,/g, ""); // remove commas

      const increment = Math.ceil(target / speed);

      if (count < target) {
        const newValue = count + increment;
        counter.innerText = newValue.toLocaleString(); // add commas
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target.toLocaleString(); // final formatted value
      }
    };
    updateCount();
  };

  // Animate only when visible
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.6 }
  );

  counters.forEach((counter) => observer.observe(counter));
});
</script>

@endpush