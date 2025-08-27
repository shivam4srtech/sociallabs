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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">Wireless Planning and Coordination</h1>
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
                      <img alt="Our Team Collaboration" class="object-cover" sizes="100vw" src="{{asset('images/energy-saving.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 lg:-bottom-8 lg:-left-8">
                      <div class="relative w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40">
                        <img 
                            src="{{ asset('images/energy-logo.webp') }}" 
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
          {{-- introsection --}}
           <div class="max-w-7xl mx-auto p-8 bg-white">
                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">Introduction</h2>
                    <p class="text-gray-700 leading-relaxed text-base">
                    The Bureau of Energy Efficiency (BEE) was established by the Government of India on 
                    <strong>March 1, 2002</strong>, under the Ministry of Power, in line with the provisions of the 
                    <em>Energy Conservation Act, 2001</em>. Its primary role is to design policies and strategies aimed at 
                    lowering the energy intensity of the Indian economy.
                    </p>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">BEE Star Label</h2>
                    <div class="space-y-8">
                    <div class="border-l-2 border-gray-200 pl-6">
                        <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">S&amp;L Certification Scheme</h3>
                        <p class="text-gray-700 leading-relaxed text-base">
                        To promote energy efficiency and reduce power consumption in household appliances, 
                        BEE introduced the Standards &amp; Labeling (S&amp;L) program. This scheme helps achieve 
                        the broader goal of reducing the nation’s overall energy usage.
                        </p>
                    </div>

                    <div class="border-l-2 border-gray-200 pl-6">
                        <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">Objective</h3>
                        <p class="text-gray-700 leading-relaxed text-base">
                        The regulation is designed to empower consumers with transparent information on the 
                        energy efficiency of products, enabling them to make cost-effective and environmentally 
                        conscious choices.
                        </p>
                    </div>

                    <div class="border-l-2 border-gray-200 pl-6">
                        <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">Requirements</h3>
                        <p class="text-gray-700 leading-relaxed text-base">
                        Any product falling under BEE’s scope must be registered and display an official 
                        <strong>star label</strong> before being sold in India. It is the obligation of the manufacturer, 
                        importer, or distributor to comply with the performance benchmarks specified by BEE.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-8 mb-16">
                    <div class="text-center">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-6 h-6 bg-gray-400 rounded-sm"></div>
                    </div>
                    <h3 class="text-gray-900 font-medium mb-2">Government Initiative</h3>
                    <p class="text-gray-500 text-sm">Ministry of Power</p>
                    </div>

                    <div class="text-center">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-6 h-6 border-2 border-gray-400 rounded-full"></div>
                    </div>
                    <h3 class="text-gray-900 font-medium mb-2">Energy Efficiency</h3>
                    <p class="text-gray-500 text-sm">Lower energy use</p>
                    </div>

                    <div class="text-center">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-3 h-3 bg-gray-400 rounded-full"></div>
                    </div>
                    <h3 class="text-gray-900 font-medium mb-2">Star Labeling</h3>
                    <p class="text-gray-500 text-sm">Informed consumer choice</p>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-100">
                    <p class="text-gray-400 text-sm text-center">
                    Founded March 1, 2002 · Under Energy Conservation Act, 2001
                    </p>
                </div>
            </div>
            {{-- more info --}}
            <div class="max-w-4xl mx-auto p-8 bg-white">
                <div class="mb-16">
                    <h1 class="text-4xl font-light text-gray-900 mb-3">Dealer Possession License (DPL)</h1>
                    <p class="text-gray-500 text-lg font-light">Authorization for Wireless Product Dealers</p>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">Dealer Possession License (DPL)</h2>
                    <div class="border-l-2 border-blue-200 pl-6">
                    <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">Purpose &amp; Scope</h3>
                    <p class="text-gray-700 leading-relaxed text-base mb-4">
                        A DPL is granted to prospective distributors and dealers of wireless equipment. This license allows an entity to hold and trade in wireless products that function within licensed frequency bands.
                    </p>

                    <div class="bg-blue-50 rounded-lg p-4 mb-4">
                        <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-700 text-sm font-medium mb-1">Key Authority</p>
                            <p class="text-gray-600 text-sm">
                            A DPL holder can distribute devices to customers, but each end-user must already hold a valid WPC-issued Operating License or equivalent authorization.
                            </p>
                        </div>
                        </div>
                    </div>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 rounded-r-lg">
                        <p class="text-gray-700 text-sm">
                        <strong>Important:</strong> Applicants seeking a Demonstration License must already have a DPL. If not, they are required to apply for a DPL first.
                        </p>
                    </div>
                    </div>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">Documentation for DPL License</h2>
                    <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5 mr-4 flex-shrink-0">
                        <span class="text-blue-600 text-sm font-medium">1</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">Duly filled Application Form</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5 mr-4 flex-shrink-0">
                        <span class="text-blue-600 text-sm font-medium">2</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">Valid identity proof of the signatory (Aadhar, PAN, etc.)</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5 mr-4 flex-shrink-0">
                        <span class="text-blue-600 text-sm font-medium">3</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">Photograph &amp; signature specimen of the signatory</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5 mr-4 flex-shrink-0">
                        <span class="text-blue-600 text-sm font-medium">4</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">Technical datasheet of the wireless product</p>
                    </div>
                    <div class="flex items-start">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center mt-0.5 mr-4 flex-shrink-0">
                        <span class="text-blue-600 text-sm font-medium">5</span>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-base">Company Incorporation Certificate (CIN)</p>
                    </div>
                    </div>

                    <div class="mt-6 bg-red-50 border-l-4 border-red-400 p-4 rounded-r-lg">
                    <p class="text-gray-700 text-sm">
                        <strong>Important:</strong> All submitted documents must be digitally signed by the applicant.
                    </p>
                    </div>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">Validity &amp; Renewal</h2>
                    <div class="bg-green-50 rounded-lg p-6">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                        <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                            <div class="w-4 h-4 border-2 border-green-500 rounded-full"></div>
                        </div>
                        </div>
                        <div>
                        <h3 class="text-gray-900 font-medium mb-2">Annual Validity</h3>
                        <p class="text-gray-700 text-sm">
                            The license is valid until the end of December each year and must be renewed before its expiry date.
                        </p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">Non-Dealer Possession License (NDPL)</h2>
                    <div class="border-l-2 border-purple-200 pl-6">
                    <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">Purpose &amp; Scope</h3>
                    <p class="text-gray-700 leading-relaxed text-base mb-4">
                        An NDPL is issued to an individual or organization that is not a dealer of wireless products and does not hold any other WPC license but still intends to keep wireless equipment in their possession.
                    </p>
                    <div class="bg-purple-50 rounded-lg p-4">
                        <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                            <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <p class="text-gray-700 text-sm font-medium mb-1">Pre-requisite</p>
                            <p class="text-gray-600 text-sm">
                            Before applying for NDPL, the applicant must already have a DL (Decision Letter), WOL (Wireless Operating License), or a WOC Reference Letter.
                            </p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">DPL vs NDPL Comparison</h2>
                    <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-blue-50 rounded-lg p-6">
                        <h3 class="text-gray-900 font-medium mb-4 flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>DPL (Dealer Possession License)
                        </h3>
                        <div class="space-y-3">
                        <div class="border-l-2 border-blue-200 pl-4">
                            <h4 class="text-gray-700 text-sm font-medium">For</h4>
                            <p class="text-gray-600 text-sm">Distributors &amp; authorized dealers</p>
                        </div>
                        <div class="border-l-2 border-blue-200 pl-4">
                            <h4 class="text-gray-700 text-sm font-medium">Authority</h4>
                            <p class="text-gray-600 text-sm">Permits possession &amp; trading of wireless devices</p>
                        </div>
                        <div class="border-l-2 border-blue-200 pl-4">
                            <h4 class="text-gray-700 text-sm font-medium">Documents</h4>
                            <p class="text-gray-600 text-sm">Five key documents required</p>
                        </div>
                        </div>
                    </div>

                    <div class="bg-purple-50 rounded-lg p-6">
                        <h3 class="text-gray-900 font-medium mb-4 flex items-center">
                        <div class="w-3 h-3 bg-purple-500 rounded-full mr-3"></div>NDPL (Non-Dealer Possession License)
                        </h3>
                        <div class="space-y-3">
                        <div class="border-l-2 border-purple-200 pl-4">
                            <h4 class="text-gray-700 text-sm font-medium">For</h4>
                            <p class="text-gray-600 text-sm">Non-dealers retaining equipment</p>
                        </div>
                        <div class="border-l-2 border-purple-200 pl-4">
                            <h4 class="text-gray-700 text-sm font-medium">Authority</h4>
                            <p class="text-gray-600 text-sm">Allows possession of wireless apparatus</p>
                        </div>
                        <div class="border-l-2 border-purple-200 pl-4">
                            <h4 class="text-gray-700 text-sm font-medium">Pre-requisite</h4>
                            <p class="text-gray-600 text-sm">DL, WOL, or WOC Reference Letter required</p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">Examples of Products Covered</h2>
                    <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-gray-900 font-medium mb-4">DPL and NDPL Coverage</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="bg-white rounded-lg p-4 text-center">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <div class="w-6 h-6 bg-gray-400 rounded-sm"></div>
                        </div>
                        <p class="text-gray-700 text-sm font-medium">Wireless Telegraphy Equipment</p>
                        <p class="text-gray-500 text-xs mt-1">Licensed spectrum usage</p>
                        </div>
                        <div class="bg-white rounded-lg p-4 text-center">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <div class="w-6 h-6 bg-gray-400 rounded-lg"></div>
                        </div>
                        <p class="text-gray-700 text-sm font-medium">Walkie Talkie</p>
                        <p class="text-gray-500 text-xs mt-1">Portable two-way device</p>
                        </div>
                        <div class="bg-white rounded-lg p-4 text-center">
                        <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-3">
                            <div class="w-6 h-6 bg-gray-400 rounded-full"></div>
                        </div>
                        <p class="text-gray-700 text-sm font-medium">Two-way Radio</p>
                        <p class="text-gray-500 text-xs mt-1">Used in professional communication</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-8 mb-16">
                    <div class="text-center">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-6 h-6 border-2 border-gray-400 rounded-full flex items-center justify-center">
                        <div class="w-2 h-2 bg-gray-400 rounded-full"></div>
                        </div>
                    </div>
                    <h3 class="text-gray-900 font-medium mb-2">Licensed Frequency</h3>
                    <p class="text-gray-500 text-sm">Operates within approved spectrum bands</p>
                    </div>

                    <div class="text-center">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-6 h-6 bg-gray-400 rounded-lg"></div>
                    </div>
                    <h3 class="text-gray-900 font-medium mb-2">Annual Renewal</h3>
                    <p class="text-gray-500 text-sm">Valid till December, requires timely renewal</p>
                    </div>

                    <div class="text-center">
                    <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <div class="w-6 h-6 border-2 border-gray-400 rounded-sm"></div>
                    </div>
                    <h3 class="text-gray-900 font-medium mb-2">Digital Signature</h3>
                    <p class="text-gray-500 text-sm">Mandatory for document authentication</p>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-100">
                    <p class="text-gray-400 text-sm text-center">
                    WPC License Compliance · Licensed Spectrum Usage · Annual Renewal Obligation
                    </p>
                </div>
            </div>
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
                            <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What is BEE Certification?
                            </h3>
                            <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                            </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                            <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                                BEE Certification is issued by the Bureau of Energy Efficiency, Government of India, to ensure that products meet energy efficiency standards and display the BEE Star Label.
                            </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Why is BEE Certification mandatory?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            BEE Certification is mandatory for certain appliances like air conditioners, refrigerators, and LED lamps to promote energy savings and reduce electricity consumption in India.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Which products require BEE Star Label Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Appliances like air conditioners, refrigerators, televisions, ceiling fans, LED lamps, washing machines, and many others fall under mandatory or voluntary BEE labeling programs.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What does the BEE Star Rating mean?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            The Star Rating ranges from 1-Star to 5-Star, with 5-Star being the most energy-efficient. Higher star ratings indicate lower electricity consumption and better performance.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Who issues BEE Certification in India?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            The Bureau of Energy Efficiency (BEE), under the Ministry of Power, Government of India, is the authority responsible for granting BEE Certification and Star Labels.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What is the process for obtaining BEE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            The manufacturer must apply to BEE with product test reports from NABL-accredited labs, submit required documents, and obtain approval before affixing the BEE Star Label.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        How long is a BEE License valid?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            BEE Licenses are generally valid for 3 years and must be renewed by submitting updated test reports and compliance documents before expiry.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What happens if a product is sold without BEE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Selling appliances that fall under mandatory BEE labeling without certification is illegal and may result in penalties, product seizure, and cancellation of market approvals.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        Can foreign manufacturers apply for BEE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            Yes, foreign manufacturers can apply for BEE Certification through an Authorized Indian Representative (AIR) who will coordinate with BEE on their behalf.
                        </p>
                        </div>
                    </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                    <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                        What are the benefits of obtaining BEE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                        <p class="text-gray-600 leading-relaxed">
                            BEE Certification improves consumer trust, ensures regulatory compliance, increases product competitiveness, and highlights the brand’s commitment to energy efficiency.
                        </p>
                        </div>
                    </div>
                    </div>

                </div>
           </div>
          </div>
  </div>    
  @push('scripts_custom')

<script src="{{ asset('js/service.js') }}" defer></script>


@endpush
@endsection
