@extends('layouts.app')

@section('title','scheme-x-certification')
@push('pagecss')
<link rel="stylesheet" href="{{ asset('css/service.css') }}" as="style">
@endpush

@section('content')
<!-- Hero Section -->
  <section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Privacy Policy</h1>
    <p class="text-lg md:text-xl max-w-3xl mx-auto">
      Your privacy matters to us. Learn how Sociallabs.in collects, uses, and safeguards your information.
    </p>
  </section>

  <!-- Policy Content -->
  <section class="max-w-5xl mx-auto px-6 py-16">
    <div class="bg-white rounded-2xl shadow p-8 md:p-12 leading-relaxed space-y-8">
      
      <!-- Introduction -->
      <div>
        <h2 class="text-2xl font-semibold mb-3">Introduction</h2>
        <p class="text-gray-600">
          At <strong>Sociallabs.in</strong>, we respect your privacy and are committed to protecting your 
          personal data. This Privacy Policy explains how we collect, use, and safeguard your 
          information when you use our website and services.
        </p>
      </div>

      <!-- Information We Collect -->
      <div>
        <h2 class="text-2xl font-semibold mb-3">Information We Collect</h2>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Personal details such as your name, email, and phone number.</li>
          <li>Business details required for certification or registration services.</li>
          <li>Website usage data including cookies, IP addresses, and browser information.</li>
        </ul>
      </div>

      <!-- How We Use Your Data -->
      <div>
        <h2 class="text-2xl font-semibold mb-3">How We Use Your Data</h2>
        <p class="text-gray-600 mb-3">
          We use the collected information to:
        </p>
        <ul class="list-disc list-inside text-gray-600 space-y-2">
          <li>Provide regulatory, compliance, and certification services.</li>
          <li>Improve our website, customer experience, and support.</li>
          <li>Send important updates, offers, or policy changes.</li>
        </ul>
      </div>

      <!-- Data Security -->
      <div>
        <h2 class="text-2xl font-semibold mb-3">Data Security</h2>
        <p class="text-gray-600">
          We implement advanced security measures to protect your data from unauthorized access, 
          alteration, or disclosure. However, no method of transmission over the Internet is 
          100% secure, and we cannot guarantee absolute protection.
        </p>
      </div>

      <!-- Your Rights -->
      <div>
        <h2 class="text-2xl font-semibold mb-3">Your Rights</h2>
        <p class="text-gray-600">
          You have the right to access, update, or request deletion of your personal information. 
          For any privacy concerns, you can contact us at 
          <a href="mailto:support@sociallabs.in" class="text-blue-600 underline">support@sociallabs.in</a>.
        </p>
      </div>

      <!-- Updates -->
      <div>
        <h2 class="text-2xl font-semibold mb-3">Updates to This Policy</h2>
        <p class="text-gray-600">
          We may update this Privacy Policy from time to time to reflect changes in our practices 
          or legal requirements. We encourage you to review this page regularly.
        </p>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-12 text-center">
    <h3 class="text-2xl font-semibold mb-4">Questions About Our Policy?</h3>
    <p class="mb-6">We’re here to help. Reach out to our team anytime.</p>
    <a href="/contact" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100">
      Contact Us
    </a>
  </section>



@push('scripts_custom')
<script src="{{ asset('js/service.js') }}" defer></script>
@endpush
@endsection
