@extends('layouts.app')

@section('title','scheme-x-certification')
@push('pagecss')
<link rel="stylesheet" href="{{ asset('css/service.css') }}" as="style">
@endpush

@section('content')
  <div class="pt-[69px]">
      <div class="min-h-screen bg-white font-sans text-gray-800">
          {{-- Top section --}}
          <section class="relative py-16 sm:py-20 lg:py-24 flex items-center justify-center bg-gradient-to-br from-gray-50 to-white overflow-hidden">
            <div class="absolute inset-0 opacity-[0.02]">
              <img alt="" decoding="async" data-nimg="fill" class="object-cover" sizes="100vw" src="{{asset('images/robo.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
            </div>
            <div class="relative z-10 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="space-y-8 text-center lg:text-left">
                  <div class="space-y-6">
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">FSSAI: Food License and Registration</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                       Our experts provide end-to-end assistance for the WPC certification process in India, offering dedicated support at every stage to ensure a seamless and hassle-free experience.
                    </p>
                  </div>
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
                <div class="relative flex justify-center lg:justify-end">
                  <div class="relative">
                    <div class="relative w-80 h-80 sm:w-96 sm:h-96 lg:w-[28rem] lg:h-[28rem] rounded-full overflow-hidden shadow-2xl ring-1 ring-gray-100">
                      <img alt="Our Team Collaboration" class="object-cover" sizes="100vw" src="{{asset('images/fssai.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 lg:-bottom-8 lg:-left-8">
                      <div class="relative w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40">
                        <img 
                            src="{{ asset('images/fssai-logo.webp') }}" 
                            alt="Company Logo" 
                            class="object-contain p-2 w-full h-full"
                        >
                      </div>
                    </div>
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-blue-500 rounded-full opacity-20 animate-pulse"></div>
                    <div class="absolute top-1/4 -left-8 w-4 h-4 bg-green-400 rounded-full opacity-30"></div>
                    <div class="absolute bottom-1/3 -right-6 w-6 h-6 bg-purple-400 rounded-full opacity-25"></div>
                  </div>
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
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What is FSSAI registration?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            FSSAI registration is a basic food safety requirement for small food businesses, ensuring compliance with food safety standards in India.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Who needs an FSSAI license?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Any food business operator involved in manufacturing, processing, storing, distributing, or selling food products must obtain an FSSAI license.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What are the types of FSSAI licenses?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            FSSAI offers three types of licenses – Basic Registration, State License, and Central License – depending on the scale and turnover of the business.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Is FSSAI registration mandatory for home-based food businesses?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Yes, even small and home-based food businesses need FSSAI registration to legally operate and maintain consumer trust.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What documents are required for FSSAI registration?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Basic documents include identity proof, address proof, passport-sized photographs, and details of the food business.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        How long is an FSSAI license valid?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            FSSAI licenses are typically valid for 1 to 5 years, after which they must be renewed.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Can I operate without an FSSAI license?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            No, running a food business without an FSSAI license is illegal and can lead to heavy penalties and closure of the business.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        How can I check the status of my FSSAI license application?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            You can track the application status online on the official FSSAI website using your application reference number.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What is the difference between FSSAI registration and FSSAI license?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            FSSAI registration is for small-scale food businesses, while FSSAI licenses (State or Central) are required for medium and large-scale food businesses.
                        </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        How long does it take to get an FSSAI license?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Generally, it takes around 7–60 days to get an FSSAI license, depending on the type of license and approval process.
                        </p>
                        </div>
                    </div>
                </div>

                  
              </div>
          </div>
          {{-- btn --}}
          <div class="flex justify-center py-10">
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



@push('scripts_custom')
<script src="{{ asset('js/service.js') }}" defer></script>
@endpush
@endsection
