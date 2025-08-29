@extends('layouts.app')

@section('title','About')

@section('content')
 <!-- Hero -->
  <section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
    <p class="text-lg md:text-xl max-w-2xl mx-auto">
      Get in touch with Sociallabs.in for compliance, certification, and regulatory services.
    </p>
  </section>

  <!-- Contact Info -->
  <section class="max-w-6xl mx-auto px-6 py-16 grid md:grid-cols-3 gap-8">
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-2">📍 Address</h3>
      <p class="text-gray-600">Hyderabad, India</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-2">📞 Phone</h3>
      <p class="text-gray-600">+91 63003 47380</p>
    </div>
    <div class="bg-white p-6 rounded-2xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold mb-2">✉️ Email</h3>
      <p class="text-gray-600">support@sociallabs.in</p>
    </div>
  </section>

  <!-- Contact Form -->
  <section class="max-w-4xl mx-auto px-6 pb-20">
    <div class="bg-white rounded-2xl shadow-lg p-8 md:p-12">
      <h2 class="text-2xl font-semibold mb-6 text-center">Send Us a Message</h2>
       <div id="form-success" ></div>
      <form class="grid gap-6" id="contactForm">
          @csrf 
        <div class="grid md:grid-cols-2 gap-6">
          <input type="text" placeholder="Full Name" name="name" id="name" class="w-full errs p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />

          <input type="email"  name="email" id="email" placeholder="Email Address" class="errs w-full p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
        </div>
        <input type="text" name="phone" id="phone" placeholder="Phone Number" class="w-full errs p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" />
        <textarea rows="5" name="message" id="message" placeholder="Your Message" class="w-full errs p-4 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"></textarea>
        <button type="button" class="sendcontact w-full bg-gradient-to-r from-indigo-600 to-blue-600 text-white font-semibold py-4 rounded-lg shadow hover:opacity-90 transition">
          Send Message
        </button>
      </form>
    </div>
  </section>

  <!-- CTA -->
  <section class="bg-gradient-to-r from-indigo-600 to-blue-600 text-white py-12 text-center">
    <h3 class="text-2xl font-semibold mb-4">Let’s Work Together</h3>
    <p class="mb-6">Reach out today and simplify your compliance journey with Sociallabs.in.</p>
    <a href="tel:+9163003 47380" class="bg-white text-blue-600 font-semibold px-6 py-3 rounded-lg shadow hover:bg-gray-100">
      Call Now
    </a>
  </section>
@endsection
