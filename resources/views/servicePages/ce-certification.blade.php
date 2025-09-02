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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">CE Certification</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                       CE Certification demonstrates that a product complies with European Union safety, health, and environmental standards. It ensures free movement within the EU market, boosting consumer trust and enabling manufacturers’ legal market access.
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
                    {{-- <div class="relative w-80 h-80 sm:w-96 sm:h-96 lg:w-[28rem] lg:h-[28rem] rounded-full overflow-hidden shadow-2xl ring-1 ring-gray-100">
                      <img alt="Our Team Collaboration" class="object-cover" sizes="100vw" src="{{asset('images/fssai.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div> --}}
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
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-8">About CE Certification</h2>
                <div class="prose prose-lg max-w-none">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                   CE Certification, also known as the CE Marking, is a mandatory conformity mark required for certain products sold within the European Economic Area (EEA). It signifies that the product meets the European Union’s essential requirements for safety, health, and environmental protection. By affixing the CE mark, manufacturers declare that their products comply with all applicable EU directives and regulations.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                  The CE mark covers a wide range of product categories including electronics, machinery, medical devices, construction materials, toys, and personal protective equipment. Obtaining CE Certification often involves product testing, risk assessment, documentation preparation, and in some cases, third-party assessment by a Notified Body. This ensures that products are not only safe for consumers but also standardized for fair trade within the EU.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                   For manufacturers, CE Certification is more than just regulatory compliance—it is a gateway to accessing one of the world’s largest markets. It allows unrestricted movement of goods across EU member states and builds consumer trust in product quality. Without CE marking, businesses risk penalties, recalls, or a ban on product sales in the European market.
                    </p>
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
                            What is CE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            CE Certification is a mandatory conformity mark for products sold within the European Economic Area (EEA). It ensures that the product meets EU safety, health, and environmental protection requirements.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Is CE marking mandatory for all products in Europe?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            No, CE marking is mandatory only for products that fall under specific EU directives or regulations, such as machinery, toys, medical devices, electronics, and construction products.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Who is responsible for affixing the CE mark?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            The manufacturer or their authorized representative within the EU is responsible for ensuring compliance and affixing the CE mark to the product before it is placed on the market.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What are the benefits of CE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            CE Certification allows manufacturers to freely market their products within the EEA, demonstrates compliance with EU standards, increases consumer trust, and reduces barriers to trade.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 5 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What documents are required for CE marking?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Key documents include the Declaration of Conformity, technical documentation (test reports, design drawings, risk assessments), and evidence of compliance with relevant EU directives or harmonized standards.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 6 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Do all products require third-party testing for CE Certification?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Not always. Some products can be self-certified by the manufacturer through internal testing and documentation, while others require evaluation and testing by a notified body depending on risk category.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 7 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            How long does the CE Certification process take?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            The time varies depending on product complexity, applicable directives, and testing requirements. Simple self-certification may take a few weeks, while third-party assessments can take several months.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 8 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Is CE Certification valid worldwide?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            CE Certification is mandatory for the European Economic Area (EEA), but it is also recognized in some non-EU markets as proof of compliance with international safety and quality standards.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 9 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            What happens if a product does not have CE marking?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            Products without CE marking cannot be legally sold in the EEA. Authorities may impose fines, order recalls, ban sales, or take legal action against the manufacturer or importer.
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- FAQ 10 -->
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200 mb-4">
                        <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 pr-4">
                            Can CE Certification expire?
                        </h3>
                        <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                        </svg>
                        </button>
                        <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                        <div class="px-6 pb-5">
                            <p class="text-gray-600 leading-relaxed">
                            CE Certification itself does not have a fixed expiry date, but it must remain valid as long as the product is sold. If directives change or the product design is modified, re-evaluation may be required.
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
