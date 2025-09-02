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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">ARAI Certification</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                       ARAI Certification validates automotive components and vehicles for safety, performance, and environmental standards in India. It ensures compliance with regulatory requirements, enabling legal market entry and building trust in product quality.
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
                        {{-- <img 
                            src="{{ asset('images/fssai-logo.webp') }}" 
                            alt="Company Logo" 
                            class="object-contain p-2 w-full h-full"
                        > --}}
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
          {{-- intro --}}
          <section class="py-16 sm:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 sm:p-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8">What is ARAI?</h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    The Automotive Research Association of India (ARAI), founded in 1966, is a premier automotive research, development, and testing organization. It was established through collaboration between the Indian automotive industry and the Government of India, operating as an autonomous body under the Ministry of Heavy Industries.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    ARAI provides homologation, certification, and compliance testing for vehicles, automotive parts, and engines across diverse sectors. As an authorized certifying agency, it ensures products conform to both national and international regulatory standards.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                    Additionally, ARAI supports manufacturers with export homologation, enabling Indian automotive products to access and compete in global markets.
                    </p>
                </div>
                </div>
            </div>
          </section>
          {{-- steps --}}
          <section class="py-16 sm:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <!-- Heading -->
                <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4">
                    The Process of Obtaining an ARAI Certificate
                </h2>
                <p class="text-lg text-gray-600">
                    A step-by-step guide to the ARAI certification process
                </p>
                </div>

                <!-- Steps -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8">
                <div class="space-y-6">

                    <!-- Step 1 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">1</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Engine/Model Family Identification</h3>
                        <p class="text-gray-600 text-sm">
                        Identify the engine or model family as per ISO 8178-7 guidelines. Final classification is determined by the certification authority.
                        </p>
                    </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">2</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Type Approval Application</h3>
                        <p class="text-gray-600 text-sm">
                        Submit a Type Approval application under Rule 6 of GSR 771(E) to validate Conformity of Production (COP).
                        </p>
                    </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">3</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Application Form Completion</h3>
                        <p class="text-gray-600 text-sm">
                        Complete the required forms based on vehicle type, following Annexures II and V, including details of the parent model and prior test reports.
                        </p>
                    </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">4</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Application Review</h3>
                        <p class="text-gray-600 text-sm">
                        The certification authority reviews the application to confirm the family, parent model, and variant details provided by the manufacturer.
                        </p>
                    </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">5</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Parent Model Testing</h3>
                        <p class="text-gray-600 text-sm">
                        The parent model undergoes testing to verify compliance and check whether it belongs to an already certified engine family.
                        </p>
                    </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">6</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Engine Sample Testing</h3>
                        <p class="text-gray-600 text-sm">
                        The manufacturer submits an engine sample for emission assessment and performance testing by the certifying authority.
                        </p>
                    </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="flex items-start">
                    <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center mr-4 mt-1 text-sm font-bold flex-shrink-0">7</div>
                    <div>
                        <h3 class="font-semibold text-gray-900 mb-2">Certificate Issuance</h3>
                        <p class="text-gray-600 text-sm">
                        If all tests are successful, the Type Approval Certificate (ARAI Certificate) is issued. In case of failure, modifications must be made within 3 months, or a new application is required.
                        </p>
                    </div>
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
                     <!-- FAQ 1 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What is ARAI Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            ARAI Certification is issued by the Automotive Research Association of India (ARAI) to ensure that
                            vehicles, automotive components, and systems meet safety, environmental, and performance standards
                            mandated by the Government of India.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Who needs to obtain ARAI Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Manufacturers and importers of vehicles, auto parts, and electronic systems must obtain ARAI
                            Certification before launching their products in the Indian market.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What types of products require ARAI testing and approval?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Vehicles, engines, automotive electronic systems, safety equipment, fuel systems, and
                            eco-friendly technologies such as EV batteries require ARAI testing and approval.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What documents are required for ARAI Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Documents include technical specifications, test reports, quality certifications, safety compliance
                            reports, company registration details, and product drawings or manuals.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            How long does it take to get ARAI Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            The timeline varies depending on product type, testing requirements, and documentation accuracy.
                            Generally, certification can take between 4 to 12 weeks.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Is ARAI Certification mandatory for imported vehicles and components?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Yes, imported vehicles and automotive components must also undergo ARAI testing and obtain
                            certification before being sold in India.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What are the benefits of ARAI Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Certification enhances product credibility, ensures compliance with safety and emission standards,
                            enables legal market entry, and builds consumer trust.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Can electric vehicles and EV components be certified by ARAI?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Yes, ARAI is actively involved in testing and certifying electric vehicles, charging systems,
                            and batteries to ensure safety and performance compliance.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What happens if a product fails ARAI testing?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            If a product fails testing, manufacturers must correct the issues and re-submit the product for
                            testing until compliance is achieved.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Does ARAI Certification have international recognition?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Yes, ARAI is recognized globally and its certifications are valued in several international
                            markets, making it easier for Indian manufacturers to export vehicles and components.
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
