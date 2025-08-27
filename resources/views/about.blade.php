@extends('layouts.app')

@section('title','About')

@section('content')
<!-- Hero Section -->
  <section class="relative bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-20 pt-20">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">About Sociallabs.in</h1>
      <p class="text-lg md:text-xl max-w-3xl mx-auto">
        Simplifying compliance, certifications & regulatory approvals for businesses across India.
      </p>
    </div>
  </section>

  <!-- About Content -->
  <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
    <div>
      <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216" 
           alt="Compliance Services" 
           class="rounded-2xl shadow-lg" />
    </div>
    <div>
      <h2 class="text-3xl font-semibold mb-4">Who We Are</h2>
      <p class="text-gray-600 leading-relaxed mb-4">
        At Sociallabs.in, we help entrepreneurs and enterprises navigate India’s complex compliance ecosystem. 
        From obtaining certifications to handling documentation, our experts ensure a smooth, hassle-free experience. 
        Whether you’re launching a new product or expanding into new markets, our dedicated team supports you at 
        every step.
      </p>
      <p class="text-gray-600 leading-relaxed">
        We specialize in regulatory services like FSSAI Registration, BIS Certification, BEE Approvals, WPC Licensing, 
        TEC Approvals, CDSCO Registration, DOT Licensing, PESO Certifications, and Global Market Access solutions. 
        With Sociallabs.in, compliance becomes simple, transparent, and reliable.
      </p>
    </div>
  </section>

  <!-- Mission & Values -->
  <section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6 text-center">
      <h2 class="text-3xl font-semibold mb-6">Our Mission</h2>
      <p class="text-gray-600 max-w-4xl mx-auto leading-relaxed">
        Our mission is to empower businesses by removing compliance roadblocks. We believe every entrepreneur 
        should focus on growth and innovation, not paperwork and regulations. With our trusted expertise, 
        Sociallabs.in bridges the gap between businesses and government authorities, making certifications 
        accessible, faster, and stress-free.
      </p>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-12 text-center">
    <h3 class="text-2xl font-semibold mb-4">Ready to Get Certified?</h3>
    <p class="mb-6">Let Sociallabs.in handle your compliance needs while you focus on growing your business.</p>
    <a href="/contact" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100">
      Contact Us
    </a>
  </section>
@endsection