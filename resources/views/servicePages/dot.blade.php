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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">TAC Approval & IMEI Certification</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                       End-to-end TAC registration and IMEI support are included in our expert services.
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
                      <img alt="Department of telecommunication" class="object-cover" sizes="100vw" src="{{asset('images/dot.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 lg:-bottom-8 lg:-left-8">
                      <div class="relative w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40">
                        <img 
                            src="{{ asset('images/dot-logo.webp') }}" 
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
                    <!-- FAQ 1 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        What is TAC approval and how does it relate to IMEI certification?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          TAC approval is the regulatory sign-off that a device type meets required technical and network standards. 
          IMEI certification ensures each device’s identity (the IMEI) is correctly registered and traceable. 
          Both are usually required before devices can be legally marketed or activated on networks.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 2 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        Who must apply for TAC approval and IMEI certification — the manufacturer or the importer?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          Responsibility typically lies with the entity that places the device on the market — often the 
          manufacturer or the authorised importer/agent. We help manufacturers and importers prepare and 
          submit the required documentation and testing evidence.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 3 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        What documents and test reports are usually required?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          Common requirements include device specifications, user manual, test reports (radio/EMC/SAR if applicable), 
          prototype photos, block diagram, declaration of conformity, and company authorization documents. 
          Exact lists vary by regulator and device category.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 4 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        How long does the TAC approval and IMEI certification process usually take?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          Timelines depend on device complexity and regulator workload. Simple approvals may take a few weeks, 
          while complex devices or additional testing can extend the timeline. 
          We provide realistic time estimates after reviewing your device and documents.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 5 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        Are laboratory tests mandatory and can you arrange them?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          For many wireless or radio devices, accredited lab tests (radio performance, EMC, SAR) are mandatory. 
          Yes — we coordinate with accredited test labs, manage sample logistics, 
          and ensure reports meet regulator expectations.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 6 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        What are the costs involved — application fees, testing, and other charges?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          Costs vary by device and scope: regulator application fees, lab testing fees (often the largest variable), 
          sample shipping, and service charges. After an initial review we provide a clear, itemised quote.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 7 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        What happens if a device or IMEI is rejected or non-compliant?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          If an application is rejected, regulators provide reasons for non-conformity. 
          We assist by interpreting findings, proposing corrective actions, arranging retests if needed, 
          and preparing resubmissions or appeals where applicable.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 8 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        Is TAC approval / IMEI certification valid indefinitely or does it need renewal?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          Validity depends on the regulator and approval terms. Some approvals are long-lived, 
          while others require periodic renewal or re-validation after major hardware/firmware changes. 
          We track expiry and advise on renewals.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 9 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        Do firmware updates or hardware changes require re-approval or re-registration of IMEIs?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          Minor firmware updates often do not need full re-approval, 
          but significant hardware changes or modifications affecting radio performance usually do. 
          We evaluate each change and advise whether re-testing or re-registration is required.
        </p>
      </div>
    </div>
  </div>

  <!-- FAQ 10 -->
  <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
      <h3 class="text-lg font-semibold text-gray-900 pr-4">
        How do you support IMEI allocation and bulk IMEI registration?
      </h3>
      <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
           xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
      </svg>
    </button>
    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
      <div class="px-6 pb-5">
        <p class="text-gray-600 leading-relaxed">
          We help obtain TAC allocations where required, prepare IMEI lists in the regulator’s required format, 
          support secure bulk uploads or API-based registration, and ensure IMEIs are correctly linked 
          to the approved device type.
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
