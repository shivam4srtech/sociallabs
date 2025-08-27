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
                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight tracking-tight">Bureau of Energy Efficiency</h1>
                    <p class="text-lg sm:text-xl text-gray-600 leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        The Government of India (GoI) established the Bureau of Energy Efficiency (BEE) on 1st March 2002 under the Ministry of Power, in line with the provisions of the Energy Conservation Act, 2001. The BEE was created to formulate policies and strategies aimed at reducing the energy intensity of the Indian economy.
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
                    The Bureau of Energy Efficiency (BEE) was established by the Government of India on 1st March 2002 under the Ministry of Power, in line with the Energy Conservation Act, 2001. Its role is to design strategies and policies aimed at lowering the overall energy intensity of the Indian economy.
                    </p>
                </div>

                <div class="mb-16">
                    <h2 class="text-xl font-medium text-gray-900 mb-6">BEE Star Label</h2>
                    <div class="space-y-8">

                    <div class="border-l-2 border-gray-200 pl-6">
                        <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">S&amp;L Certification Scheme</h3>
                        <p class="text-gray-700 leading-relaxed text-base">
                        To meet its energy-saving goals, BEE launched the Standards &amp; Labeling (S&amp;L) scheme. This program promotes energy-efficient household appliances, enabling consumers and industries to benefit from lower power usage and reduced bills.
                        </p>
                    </div>

                    <div class="border-l-2 border-gray-200 pl-6">
                        <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">Objective</h3>
                        <p class="text-gray-700 leading-relaxed text-base">
                        The primary purpose of the scheme is to provide buyers with clear information about the energy efficiency and cost-saving potential of a product, helping them make informed purchasing decisions.
                        </p>
                    </div>

                    <div class="border-l-2 border-gray-200 pl-6">
                        <h3 class="text-gray-500 text-sm uppercase tracking-wide mb-3">Requirements</h3>
                        <p class="text-gray-700 leading-relaxed text-base">
                        Any product covered under this regulation must be approved by BEE and carry an official star label before it can be manufactured, sold, or imported in India. It is the duty of the manufacturer, importer, or distributor to ensure compliance with the specified energy performance benchmarks.
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
                    <p class="text-gray-500 text-sm">Empowering consumer choice</p>
                    </div>
                </div>

                <div class="pt-8 border-t border-gray-100">
                    <p class="text-gray-400 text-sm text-center">
                    Formed on March 1, 2002 · As per Energy Conservation Act, 2001
                    </p>
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
                               Mandatory
                            </button>
                            <button class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200">
                               Voluntary
                            </button>
                        </nav>
                    </div>
                </div>

                <div class="isiTables w-full max-w-6xl overflow-x-auto shadow-lg rounded-lg border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                                S.No.
                            </th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product
                            </th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date of Implementation
                            </th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                                Link
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Frost Free Refrigerator</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2006</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Tubular Fluorescent Lamps</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2009</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Room Air Conditioners (Fixed Speed)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2006</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">4</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Room Air Conditioners (Variable Speed)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2006</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">5</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Distribution Transformer</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2009</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">6</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Room Air Conditioner – Cassette, Floor Standing Tower, Ceiling, Corner AC</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2006</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">7</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Direct Cool Refrigerator</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since May 2006</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">8</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Colour TV</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since May 2014</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">9</td>
                            <td class="px-4 py-2 text-sm text-gray-700">LED Lamps/Bulbs</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2017</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">10</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Ceiling Fan</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since May 2019</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">11</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Stationary Storage Type Electric Water Heater (Electric Geysers)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since December 2015</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">12</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Light Commercial AC Fixed and Variable Speed</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since September 2021</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">13</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Deep Freezers</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since September 2021</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">14</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Ultra-High Definition (UHD) Television</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since December 2021</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">15</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Washing Machine (Semi/Top Load/Front Load)</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2024</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 whitespace-nowrap text-sm font-medium text-gray-900">16</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Chillers</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-gray-700">Since January 2024</td>
                            <td class="px-4 py-2 whitespace-nowrap text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=M" target="_blank" rel="noopener noreferrer">View Details</a>
                            </td>
                            </tr>

                        </tbody>
                    </table>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tl-lg">
                                S.No.
                            </th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Product
                            </th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Date of Implementation
                            </th>
                            <th scope="col" class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider rounded-tr-lg">
                                Link
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">1</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Computer (Notebook / Laptops)</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since July 2016</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">2</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Domestic Liquefied Petroleum Gas (LPG) Stoves</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since June 2019</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">3</td>
                            <td class="px-4 py-2 text-sm text-gray-700">General Purpose Industrial Motor</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since January 2016</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">4</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Submersible Pump Set Agricultural Pump Sets</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since February 2020</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">5</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Ballast (Electronic/Magnetic)</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since January 2016</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">6</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Solid State Inverter</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since December 2016</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">7</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Office equipment’s (Printer, Copier, Scanner, MFD’s)</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since July 2014</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">8</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Diesel Engine Driven Monoset Pumps for Agricultural Purposes</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since January 2016</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">9</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Diesel Generator Set</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since January 2016</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">10</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Microwave Oven</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2018</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">11</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Solar Water Heater</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since December 2019</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">12</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Table/Wall Fan</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2023</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">13</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Induction Hob</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2023</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">14</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Side by Side/Multi Door Refrigerator</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2023</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">15</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Air Compressors</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since May 2020</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">16</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Tyres/Tires</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since December 2021</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">17</td>
                            <td class="px-4 py-2 text-sm text-gray-700">High Energy Li-Battery Li-ion traction batteries and Systems</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since December 2021</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">18</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Pedestal Fan</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2023</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">19</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Solar Photovoltaic</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since January 2024</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">20</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Packaged Boiler</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since April 2024</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">21</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Commercial Beverage Coolers</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2024</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>

                            <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 text-sm font-medium text-gray-900">22</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Grid Connected Solar Inverter</td>
                            <td class="px-4 py-2 text-sm text-gray-700">Since March 2024</td>
                            <td class="px-4 py-2 text-sm text-blue-600 hover:underline">
                                <a href="https://beestarlabel.com/Home/EquipmentSchemes?type=V" target="_blank">View Details</a>
                            </td>
                            </tr>
                        </tbody>
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
