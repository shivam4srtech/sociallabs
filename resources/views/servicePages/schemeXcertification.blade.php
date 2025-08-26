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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">Scheme-X</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                      We make it effortless to stay BIS Scheme X compliant by managing all certification steps in line with Indian safety standards for machinery and electrical devices.
                    </p>
                  </div>
                  <div class="flex justify-center lg:justify-start">
                    <div class="relative">
                      <button class="group relative bg-[#000032] text-white px-10 py-4 text-sm font-medium tracking-wide uppercase transition-all duration-300 hover:bg-gray-800 border-2 border-black hover:border-gray-800 overflow-hidden rounded-md">
                        <span class="relative z-10">Schedule Free Consultation</span>
                        <div class="absolute inset-0 bg-white transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out"></div>
                        <span class="absolute inset-0 flex items-center justify-center text-black font-medium tracking-wide uppercase opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20">Start Free Consultation</span>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="relative flex justify-center lg:justify-end">
                  <div class="relative">
                    <div class="relative w-80 h-80 sm:w-96 sm:h-96 lg:w-[28rem] lg:h-[28rem] rounded-full overflow-hidden shadow-2xl ring-1 ring-gray-100">
                      <img alt="Our Team Collaboration" class="object-cover" sizes="100vw" src="{{asset('images/robo.webp')}}" style="position: absolute; height: 100%; width: 100%; inset: 0px; color: transparent;">
                    </div>
                    <div class="absolute -bottom-4 -left-4 sm:-bottom-6 sm:-left-6 lg:-bottom-8 lg:-left-8">
                      <div class="relative w-24 h-24 sm:w-32 sm:h-32 lg:w-40 lg:h-40">
                        <img 
                            src="{{ asset('images/scheme-logo.webp') }}" 
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
          {{-- intro section --}}
          <div class="min-h-screen bg-gradient-to-br from-slate-50 to-white">
            <div class="max-w-7xl mx-auto px-6 py-12 sm:px-8 lg:px-12">

              <!-- Introduction -->
              <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 sm:p-10 mb-8">
                <div class="prose prose-lg max-w-none">
                  <h1 class="text-4xl font-bold text-slate-900 mb-2 flex items-center">
                    <span class="w-3 h-3 bg-blue-500 rounded-full mr-4"></span>Introduction
                  </h1>
                  <div class="w-24 h-1 bg-gradient-to-r from-blue-500 to-indigo-500 mb-8 rounded-full"></div>
                  <p class="text-slate-600 leading-relaxed mb-0 text-lg">
                    To enhance product reliability and safety across industries, the Bureau of Indian Standards (BIS) launched Scheme X in March 2022. This framework ensures that assemblies, sub-assemblies, and machine tools meet compliance requirements before entering the Indian market.
                  </p>
                </div>
              </div>

              <!-- What is Scheme X -->
              <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 sm:p-10 mb-8">
                <div class="prose prose-lg max-w-none">
                  <h2 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full mr-3"></span>What is BIS Scheme-X Certification?
                  </h2>
                  <div class="space-y-6 text-slate-600 leading-relaxed">
                    <p>
                      Introduced under the 2018 BIS Conformity Assessment Regulations, Scheme X is a dedicated certification process designed to confirm that machinery, electrical equipment, and control gear—whether imported or manufactured domestically—meet Indian Standards and carry the BIS Standard Mark before being placed on the Indian market.
                    </p>
                    <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-emerald-400">
                      <p class="mb-0 font-medium text-slate-700">
                        By harmonizing with global benchmarks for safety and performance, Scheme X reduces approval complexities for manufacturers while giving buyers confidence in dependable, certified products.
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Low-Voltage Switchgear -->
              <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8 sm:p-10">
                <div class="prose prose-lg max-w-none">
                  <h2 class="text-2xl font-semibold text-slate-900 mb-6 flex items-center">
                    <span class="w-2 h-2 bg-amber-500 rounded-full mr-3"></span>Electrical Equipment Low-Voltage Switchgear
                  </h2>
                  <p class="text-sm font-medium text-amber-600 bg-amber-50 px-3 py-1 rounded-full inline-block mb-6">Order 2022</p>
                  <div class="space-y-6 text-slate-600 leading-relaxed">
                    <p>
                      The Ministry of Heavy Industry (MHI), Government of India, has listed eight products in the category of low-voltage switchgear and control gear, based on the IS/IEC 60947 standards series.
                    </p>
                    <p>
                      Initially governed under Scheme-II, these items were later brought under Scheme-X after Amendment-1 to the Energy Efficiency (Quality Control) Order (EEQCO).
                    </p>
                    <p>
                      Scheme-X specifically addresses low-voltage switchgear and control gear products, with implementation planned in a phased rollout.
                    </p>

                    <!-- Implementation Timeline -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl p-6 mt-8">
                      <h3 class="text-lg font-semibold text-slate-900 mb-4">Implementation Timeline</h3>
                      <div class="grid sm:grid-cols-2 gap-4">
                        <div class="bg-white rounded-lg p-4 border border-blue-200">
                          <div class="text-sm font-medium text-blue-600 mb-1">Phase I</div>
                          <div class="text-slate-900 font-semibold">November 10, 2024</div>
                        </div>
                        <div class="bg-white rounded-lg p-4 border border-indigo-200">
                          <div class="text-sm font-medium text-indigo-600 mb-1">Phase II</div>
                          <div class="text-slate-900 font-semibold">November 10, 2025</div>
                        </div>
                      </div>
                    </div>

                    <!-- Covered Product Categories -->
                    <div class="mt-8">
                      <h3 class="text-lg font-semibold text-slate-900 mb-4">Covered Product Categories</h3>
                      <div class="grid sm:grid-cols-2 gap-3">

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>Proximity switches</span>
                        </div>

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>Disconnectors</span>
                        </div>

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>Electromechanical contactors</span>
                        </div>

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>Motor starters</span>
                        </div>

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>A.C. semiconductor motor controllers</span>
                        </div>

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>Electrical emergency stop devices</span>
                        </div>

                        <div class="flex items-center text-slate-600">
                          <svg class="w-4 h-4 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                          </svg>
                          <span>Circuit breakers</span>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Footer Note -->
              <div class="text-center mt-16 pt-8 border-t border-slate-200">
                <p class="text-slate-500 text-sm">
                  Ensure smooth market entry by staying compliant with BIS Scheme X requirements
                </p>
              </div>

            </div>
          </div>
          {{-- bg gray --}}
          <div class="isiBox min-h-screen bg-gray-100 flex flex-col items-center py-8 px-4 sm:px-6 lg:px-8 font-sans">
              <h1 class="text-4xl md:text-5xl text-gray-900 text-center mb-6">Product Standards by Ministry</h1>
              <p class="text-lg text-gray-600 max-w-4xl">Low-Voltage Switchgear and Control Gear Order for Electrical Equipment — implementation will proceed phase-wise.</p>

              <div class="w-full max-w-2xl mb-8">
                  <input placeholder="Search products within the active tab..."
                      class="searchisiItems w-full p-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-base text-gray-700"
                      type="text" value="">
              </div>

              <div class="w-full max-w-6xl mb-8">
                  <div class="border-b border-gray-200">
                      <nav class="buttons -mb-px flex space-x-8 overflow-x-auto pb-2" aria-label="Tabs">
                          <button class="active   whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              Overview
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                             IS/IEC 60947-2
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              IS/IEC 60947-3
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              IS/IEC 60947-4-1
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              IS/IEC 60947-5-1
                          </button>
                           <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              IS/IEC 60947-5-5
                          </button>
                      </nav>
                  </div>
              </div>

              <div class="isiTables w-full max-w-6xl overflow-x-auto shadow-lg rounded-lg border border-gray-200">
                  <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                      <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                          S.No.
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                          IS Standard
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                          Product
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">Circuit - Breakers</td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-3</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Switches, disconnectors, switch disconnectors and fuse- Combination units
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-4-1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Contactors and motor, Starters, electromechanical contactors, and motor
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-4-2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Contactors and motor Starters, AC semiconductor motor controllers and starters
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-4-3</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Contactors and motor Starters, AC semiconductor motor controllers and contactors for non - Motor loads
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-5-1</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Control circuit devices and switching elements, electromechanical control circuit devices
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">7</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-5-2</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Control circuit devices and switching elements, proximity switches
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">8</td>
                        <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 font-medium">IS/IEC 60947-5-5</td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          Control circuit devices and switching elements, and electrical emergency stop devices With a mechanical latching function
                        </td>
                      </tr>
                    </tbody>
                  </table>


                  <table class="min-w-full divide-y divide-gray-200" style="display: none">
                    <thead class="bg-gray-50">
                      <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                          Product Category
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                          Specific Requirement
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating up-to 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 except EMC
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating up-to 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 (including EMC)
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating above 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 except EMC
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating above 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 (including EMC)
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category B-rating, all rating up-to 2000A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 except EMC
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  <table class="min-w-full divide-y divide-gray-200" style="display: none">
                    <thead class="bg-gray-50">
                      <tr>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                          Product Category
                        </th>
                        <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                          Specific Requirement
                        </th>
                      </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating up-to 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 except EMC
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A rating up-to 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 (including EMC)
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating above 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 except EMC
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A-rating above 630A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 (including EMC)
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category B-rating, all rating up-to 2000A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 except EMC
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category B-rating, all rating up-to 2000A, up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2 (including EMC)
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category A – all rating above 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category B, all rating above 2000A, and up-to 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          AC circuit breaker category B, all rating above 440Vac
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          DC circuit breaker category A, all ratings
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2
                        </td>
                      </tr>
                      <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 text-sm text-gray-700 font-medium">
                          DC circuit breaker category B, all ratings
                        </td>
                        <td class="px-4 py-2 text-sm text-gray-700">
                          All tests of IS/IEC 60947-2
                        </td>
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
          {{-- bg gray --}}
          <div class="isiBox min-h-screen bg-gray-100 flex flex-col items-center py-8 px-4 sm:px-6 lg:px-8 font-sans">
              <h1 class="text-4xl md:text-5xl text-gray-900 text-center mb-6">OTR Order 2024</h1>
              <div class="max-w-4xl">
                <p class="text-lg font-semibold text-gray-800">
                  Machinery & Electrical Equipment — Omnibus Technical Regulation Order
                </p>
                <p class="text-sm text-red-600 mt-1 font-medium">
                  Effective Date: <span class="font-semibold">September 1, 2026</span>
                </p>
              </div>
              <div class="w-full max-w-6xl mb-8">
                  <div class="border-b border-gray-200">
                      <nav class="buttons -mb-px flex space-x-8 overflow-x-auto pb-2" aria-label="Tabs">
                          <button class="active   whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              Overview
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                            First Schedule
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                            Type A Standards
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              Type B Standards
                          </button>
                          <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                              Type C Standards
                          </button>
                      </nav>
                  </div>
              </div>

              <div class="isiTables w-full max-w-6xl overflow-x-auto shadow-lg rounded-lg border border-gray-200">
                  <table class="min-w-full divide-y divide-gray-200">
                          <div class="w-full flex flex-col items-center">
                            <div class="w-full max-w-6xl space-y-6">
                              
                              <!-- Main Card -->
                              <div class="bg-white shadow-lg rounded-lg border border-gray-200 p-6">
                                <h2 class="text-2xl font-bold text-gray-900 mb-4">
                                  Machinery & Electrical Equipment — Omnibus Technical Regulation Order (OTR) 2024
                                </h2>
                                <div class="grid md:grid-cols-2 gap-4 text-sm">
                                  <div>
                                    <p class="mb-2"><strong>Ministry:</strong> Ministry of Heavy Industry (MHI), Government of India</p>
                                    <p class="mb-2"><strong>Date Introduced:</strong> <span class="text-gray-800 font-medium">28th August 2024</span></p>
                                    <p class="mb-2"><strong>Effective Date:</strong> <span class="text-red-600 font-semibold">September 1, 2026</span></p>
                                  </div>
                                  <div>
                                    <p class="mb-2"><strong>Objective:</strong> To significantly improve occupational safety in industrial settings</p>
                                    <p class="mb-2"><strong>Framework:</strong> Safety-centric framework aligned with internationally recognised standards</p>
                                  </div>
                                </div>
                              </div>

                              <!-- Applicability -->
                              <div class="bg-green-50 border-l-4 border-green-500 p-6 rounded">
                                <h3 class="text-lg font-semibold text-green-800 mb-2">Applicability</h3>
                                <p class="text-green-700">
                                  Covers machinery, electrical equipment, assemblies, sub-assemblies, and components listed in the First Schedule.
                                </p>
                              </div>

                              <!-- Exclusions -->
                              <div class="bg-yellow-50 border-l-4 border-yellow-500 p-6 rounded">
                                <h3 class="text-lg font-semibold text-yellow-800 mb-2">Exclusions</h3>
                                <ul class="text-yellow-700 list-disc list-inside space-y-1">
                                  <li>Exports</li>
                                  <li>Construction equipment covered under CMVR rules (Ministry of Road Transport & Highways)</li>
                                  <li>Goods covered under other QCO orders issued under the BIS Act</li>
                                </ul>
                              </div>

                              <!-- OTR Order Structure -->
                              <div class="bg-blue-50 border-l-4 border-blue-500 p-6 rounded">
                                <h3 class="text-lg font-semibold text-blue-800 mb-4">OTR Order Structure</h3>
                                <div class="grid md:grid-cols-3 gap-4 text-sm">
                                  <div class="bg-white p-4 rounded border shadow-sm">
                                    <h4 class="font-semibold text-blue-700 mb-2">First Schedule</h4>
                                    <p class="text-gray-600">Lists specific machinery and electrical equipment covered under OTR</p>
                                  </div>
                                  <div class="bg-white p-4 rounded border shadow-sm">
                                    <h4 class="font-semibold text-blue-700 mb-2">Second Schedule</h4>
                                    <p class="text-gray-600">Type B Standards — Generic safety standards for machinery categories</p>
                                  </div>
                                  <div class="bg-white p-4 rounded border shadow-sm">
                                    <h4 class="font-semibold text-blue-700 mb-2">Third Schedule</h4>
                                    <p class="text-gray-600">Type C Standards — Machine-specific safety standards</p>
                                  </div>
                                </div>
                              </div>

                              <!-- Reference Link -->
                              <div class="bg-gray-50 p-4 rounded border text-center">
                                <p class="text-sm text-gray-600 mb-2">For complete details, refer to the official document:</p>
                                <a 
                                  href="https://www.bis.gov.in/wp-content/uploads/2024/09/256766.pdf" 
                                  target="_blank" 
                                  rel="noopener noreferrer" 
                                  class="text-blue-600 hover:text-blue-800 underline font-medium"
                                >
                                  Official OTR Order Document (PDF)
                                </a>
                              </div>

                            </div>
                          </div>
                  </table>
                  <table class="min-w-full divide-y divide-gray-200" style="display: none">
                    <div class="w-full flex flex-col items-center">
                          <div class="w-full max-w-6xl mb-4">
                            <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
                              <p class="text-sm text-blue-700">
                                <strong>First Schedule:</strong> Contains detailed listings of machinery and electrical equipment
                                included under the OTR Order, along with their applicable HS codes.
                              </p>
                            </div>
                          </div>

                          <div class="w-full max-w-6xl overflow-x-auto shadow-lg rounded-lg border border-gray-200">
                            <table class="min-w-full divide-y divide-gray-200">
                              <thead class="bg-gray-50">
                                <tr>
                                  <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                                    Sr No.
                                  </th>
                                  <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Equipment / Machinery Description
                                  </th>
                                  <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                                    HS Code
                                  </th>
                                </tr>
                              </thead>

                              <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Pumps for liquid handling, liquid elevators, and their assemblies/sub-assemblies/components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    841340, 841350, 841360, 841370, 841381, 841382, 841391, 841392
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Compressors of all kinds, along with assemblies, sub-assemblies, and components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    841430, 841440, 84148011, 84148090, 84149011, 84149019, 84149040, 84149090
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Machinery for material processing through temperature change, plus assemblies/components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    841932, 841939, 841940, 841950, 841960, 841981, 841989, 84199090
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Centrifuges, filtering or purifying equipment for liquids/gases, and their assemblies/components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    842111, 842112, 842119, 84212110, 84212190, 842122, 842129, 842131, 842139, 842191, 842199
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Equipment for filling, closing, sealing, labeling, packaging, or wrapping, plus assemblies/components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    842220, 842230, 842240, 842290
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Cranes of all types with assemblies, sub-assemblies, and components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    842611, 842612, 842619, 842620, 842630, 842641, 842649, 842691, 842690
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">7</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Construction, earthmoving, and mining machinery, with assemblies/components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    8429, 843010, 843020, 843031, 843039, 843041, 843049, 843050, 843141, 843142, 843143, 843149
                                  </td>
                                </tr>

                                <tr class="hover:bg-gray-50">
                                  <td class="px-4 py-3 whitespace-nowrap text-sm font-medium text-gray-900">8</td>
                                  <td class="px-4 py-3 text-sm text-gray-700">
                                    Looms (weaving machines) and related assemblies/sub-assemblies/components
                                  </td>
                                  <td class="px-4 py-3 text-sm text-blue-600 font-mono">
                                    8446, 844811, 844819, 844842, 844849
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>   
                    </div>
                  </table>
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
                      What is BIS Scheme-X Certification?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        BIS Scheme-X is a certification scheme that ensures imported or domestically manufactured products meet Indian quality and safety standards before they are placed on the market.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      Who needs to apply for BIS Scheme-X?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        Importers, manufacturers, and brand owners of products notified under mandatory BIS certification must apply for Scheme-X approval before selling in India.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      What documents are required for BIS Scheme-X?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        Applicants need to submit product test reports from BIS-recognized labs, manufacturer’s details, brand authorization (if applicable), technical documents, and an undertaking of compliance.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      How long is the BIS Scheme-X license valid?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        The license is generally issued for a period of 2 years and can be renewed for 2–5 years, depending on compliance history and applicant’s requirements.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      What happens if a product is sold without BIS Scheme-X certification?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        Selling products without the mandatory BIS certification can lead to penalties, product seizures, cancellation of licenses, and legal action under the BIS Act, 2016.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      What is the difference between Scheme-I and Scheme-X under BIS?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        Scheme-I involves full-fledged licensing for Indian manufacturers, while Scheme-X is designed specifically for foreign manufacturers who do not have a manufacturing unit in India.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      Who can apply under BIS Scheme-X?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        Any foreign manufacturer exporting products to India that fall under the mandatory BIS certification list can apply for certification under Scheme-X through an Authorized Indian Representative (AIR).
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      What is the role of an Authorized Indian Representative (AIR) in Scheme-X?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        An AIR acts as the local representative of a foreign manufacturer in India and is responsible for liaising with BIS, handling documentation, and ensuring compliance with Indian regulations.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      What is the typical validity of BIS certification under Scheme-X?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        A BIS license under Scheme-X is typically valid for two years initially and can be renewed for a further period of up to five years depending on compliance.
                      </p>
                    </div>
                  </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-lg shadow-sm hover:shadow-md transition-shadow duration-200">
                  <button class="faq-btn w-full px-6 py-5 text-left flex items-center justify-between focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset rounded-lg">
                    <h3 class="text-lg font-semibold text-gray-900 pr-4">
                      Are factory inspections mandatory for foreign manufacturers under Scheme-X?
                    </h3>
                    <svg class="chevron w-5 h-5 text-gray-500 transition-transform duration-200 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"/>
                    </svg>
                  </button>
                  <div class="faq-answer overflow-hidden transition-all duration-300 ease-in-out max-h-0 opacity-0">
                    <div class="px-6 pb-5">
                      <p class="text-gray-600 leading-relaxed">
                        Yes, BIS officials conduct an on-site factory inspection of the foreign manufacturing facility before granting certification under Scheme-X.
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
