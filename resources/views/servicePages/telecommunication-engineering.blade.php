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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">Mandatory Testing & Certification of Telecommunication Equipment</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                       Legal Metrology Certification guarantees the accuracy and compliance of weights, measures, and measuring instruments used in commerce. Mandatory for manufacturers, importers, and sellers in India, it helps maintain fair trade practices, protects consumer rights, and ensures all products adhere to the regulatory requirements of the Legal Metrology Act.
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
                      <img alt="Our Team Collaboration" class="object-cover" sizes="100vw" src="{{asset('images/telecommunication.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 lg:-bottom-8 lg:-left-8">
                      <div class="relative w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40">
                        <img 
                            src="{{ asset('images/tele-logo.webp') }}" 
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

          {{-- intro --}}
          <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-8 md:p-12 mb-10">
            <div class="prose prose-lg max-w-none">
                
                <p class="text-gray-700 leading-relaxed mb-6">
                The <strong>Telecommunication Engineering Centre (TEC)</strong>, the technical body of the Department of Telecommunications (DoT), Government of India, develops technical standards and specifications for telecom equipment and networks. Its goal is to ensure quality, safety, and seamless interoperability across India’s telecom infrastructure.
                </p>
                
                <p class="text-gray-700 leading-relaxed mb-6">
                As per the <strong>Mandatory Testing and Certification of Telecom Equipment (MTCTE)</strong> scheme, all telecom and ICT products that connect to telecom networks must obtain certification based on Essential Requirements before being marketed or deployed in India. Covered products include routers, switches, modems, IoT devices, PABX systems, Wi-Fi access points, and more.
                </p>
                
                <p class="text-gray-700 leading-relaxed mb-6">
                Testing is conducted through TEC-designated or accredited laboratories, and certification is mandatory under the Indian Telegraph (Amendment) Rules, 2017. Non-compliance may lead to penalties, rejection at customs, and restrictions on sale or usage within India.
                </p>
            </div>
          </div>
          {{-- types --}}
          <section class="relative bg-gradient-to-br from-gray-50 to-white py-8">
                <div class="max-w-6xl mx-auto px-6 sm:px-8 mb-6">
                    
                    <!-- Section Header -->
                    <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold tracking-tight text-gray-900 mb-4">
                        Our TEC Approval Services
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        At VINCULAR, we provide complete assistance for a variety of TEC approval services, 
                        ensuring your products comply fully with Indian telecom regulatory standards.
                    </p>
                    </div>
                    
                    <!-- Services Grid -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- MTCTE Certification -->
                    <button class="group w-full bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-lg hover:-translate-y-1 hover:border-indigo-200 transition-all duration-200 text-left">
                        <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">
                            MTCTE Certification
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                            Mandatory Testing & Certification of Telecom Equipment
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-chevron-right w-6 h-6 text-gray-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                        </div>
                    </button>
                    
                    <!-- GR & IR Approval -->
                    <button class="group w-full bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-lg hover:-translate-y-1 hover:border-indigo-200 transition-all duration-200 text-left">
                        <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">
                            GR & IR Approval
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                            Compliance with General & Interface Requirements
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-chevron-right w-6 h-6 text-gray-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                        </div>
                    </button>
                    
                    <!-- TSEC Certification -->
                    <button class="group w-full bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-lg hover:-translate-y-1 hover:border-indigo-200 transition-all duration-200 text-left">
                        <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">
                            TSEC Certification
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                            Compliance with Telecom Security Standards
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-chevron-right w-6 h-6 text-gray-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                        </div>
                    </button>
                    
                    <!-- COMSEC Approval -->
                    <button class="group w-full bg-white/70 backdrop-blur-lg p-6 rounded-2xl border border-gray-200 shadow-md hover:shadow-lg hover:-translate-y-1 hover:border-indigo-200 transition-all duration-200 text-left">
                        <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">
                            COMSEC Approval (NCCS)
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">
                            Communication Security Clearance
                            </p>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="lucide lucide-chevron-right w-6 h-6 text-gray-400 group-hover:text-indigo-600 group-hover:translate-x-1 transition-all duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                        </div>
                    </button>
                    
                    </div>
                </div>
                <div class="max-w-6xl mx-auto px-6 sm:px-8">
                    <div class="mb-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">MTCTE Certification</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                          <strong> MTCTE Certification (Mandatory Testing & Certification of Telecom Equipment)</strong> is a compulsory approval process introduced by the Telecommunication Engineering Centre (TEC) under the Department of Telecommunications (DoT), Government of India. It ensures that telecom and ICT equipment comply with prescribed Essential Requirements related to safety, electromagnetic compatibility, interoperability, and quality.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Products such as routers, switches, modems, IoT devices, Wi-Fi access points, and PABX systems must undergo testing in TEC-designated or accredited labs before being marketed or used in India. MTCTE certification guarantees compliance with national standards, prevents substandard equipment entry, protects consumer interests, and facilitates a secure and reliable telecom ecosystem.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">GR & IR Approval</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                          <strong>GR & IR Approval (General and Interface Requirements Approval)</strong> is a regulatory process mandated by the Telecommunication Engineering Centre (TEC), Department of Telecommunications (DoT), Government of India. It ensures that telecom equipment complies with defined General Requirements (GRs) and Interface Requirements (IRs) before deployment in Indian telecom networks.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-6">
                           GRs specify technical standards, safety, and quality benchmarks, while IRs focus on seamless connectivity and interoperability across diverse network elements. Products such as transmission systems, switching equipment, and access devices must obtain this approval. GR & IR compliance assures network reliability, enhances service quality, safeguards user interests, and supports a secure telecom ecosystem.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">TSEC Certification</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                          <strong>TSEC Certification (Telecom Security Standards Certification)</strong> is a mandatory approval process established by the Telecommunication Engineering Centre (TEC) under the Department of Telecommunications (DoT), Government of India. It ensures telecom equipment complies with defined security standards to protect networks against vulnerabilities, cyber threats, and unauthorized access.
                        </p>
                        <p class="text-gray-700 leading-relaxed mb-6">
                           Products such as routers, switches, firewalls, and other critical telecom infrastructure must meet TSEC requirements before being introduced into Indian networks. This certification guarantees data integrity, network resilience, and user safety, while promoting a secure digital environment. TSEC certification is vital for manufacturers and service providers to ensure trusted, compliant, and robust telecom solutions.
                        </p>
                    </div>
                    <div class="mb-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">COMSEC Approval (NCCS)</h2>
                        <p class="text-gray-700 leading-relaxed mb-6">
                         <strong> COMSEC Approval (Communication Security Clearance)</strong>, issued by the National Centre for Communication Security (NCCS) under the Department of Telecommunications (DoT), is a mandatory certification for telecom equipment handling encrypted communication or sensitive data. It ensures compliance with national security standards, safeguarding networks from interception, data breaches, and unauthorized access.
                        </p>
                       
                         <p class="text-gray-700 leading-relaxed mb-6">
                                Equipment such as encryption devices, secure communication systems, and critical network elements require COMSEC approval before deployment in India. This certification validates that products meet stringent security benchmarks, enabling safe handling of classified communication. COMSEC approval is crucial for protecting national security, ensuring data confidentiality, and supporting a secure telecom ecosystem.
                        </p>
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
                            What is MTCTE and why is it required?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            MTCTE (Mandatory Testing and Certification of Telecommunication Equipment) is a certification scheme by the TEC that ensures telecom equipment meets prescribed technical and safety standards before being marketed or used in India.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Who issues MTCTE certification in India?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            The Telecommunication Engineering Centre (TEC), under the Department of Telecommunications (DoT), is the authority responsible for granting MTCTE certification in India.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Which telecom equipment requires MTCTE certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Devices such as mobile handsets, routers, modems, switches, transmission equipment, and other telecom gear notified by TEC require MTCTE certification before sale or usage in India.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What are the different certification schemes under MTCTE?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            MTCTE has two certification schemes: 
                            <strong>General Certification Scheme (GCS)</strong> for most telecom equipment, and 
                            <strong>Simplified Certification Scheme (SCS)</strong> for equipment with minimal compliance requirements.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What documents are needed for MTCTE certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Key documents include the application form, technical specifications, product test reports from TEC-designated labs, user manuals, and company authorization certificates.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            How long does it take to obtain MTCTE certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            The timeline varies depending on equipment type and testing requirements. On average, it can take 4 to 8 weeks from submission of documents and test reports to issuance of certification.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Is foreign telecom equipment also required to have MTCTE certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Yes, all telecom equipment—whether manufactured in India or imported—must comply with MTCTE requirements before being sold or used in the Indian market.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What is the validity of an MTCTE certificate?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            MTCTE certificates are generally valid for 5 years. Renewal is required before expiry to continue marketing and selling the equipment in India.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What happens if equipment is sold without MTCTE certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Selling telecom equipment without valid MTCTE certification is a violation of DoT regulations and can result in penalties, cancellation of licenses, or seizure of equipment.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            How can your experts assist with MTCTE certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Our team provides end-to-end support including document preparation, coordination with TEC-approved labs, application submission, and ensuring timely certification to help you enter the market without delays.
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
