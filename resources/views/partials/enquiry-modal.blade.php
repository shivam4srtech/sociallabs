{{-- resources/views/partials/enquiry-modal.blade.php --}}
<div
  id="enquiryModal"
  class="hidden fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center z-50 p-4"
  aria-modal="true"
  role="dialog"
>
  <div class="bg-white p-6 rounded-lg shadow-xl max-w-2xl w-full mx-auto relative max-h-[90vh] overflow-y-auto">

    <!-- Close Button -->
    <button
      onclick="document.getElementById('enquiryModal').classList.add('hidden')"
      type="button"
      id="enquiryModal"
      class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 transition-colors"
      aria-label="Close"
    >
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
           viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <div class="px-2 py-4">
      <div class="pt-0 border-gray-200">

        <!-- Server-side success (non-AJAX fallback) -->
        @if(session('success'))
          <div id="server-success" class="mb-4 p-4 rounded-md bg-green-100 border border-green-300 text-green-700">
            {{ session('success') }}
          </div>
        @endif

        <!-- Server-side errors (non-AJAX fallback) -->
        @if($errors->any())
          <div id="server-errors" class="mb-4 p-4 rounded-md bg-red-100 border border-red-300 text-red-700">
            <ul class="list-disc pl-5 space-y-1">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <!-- JS controlled alerts (AJAX) -->
        <div id="modal-success" class="hidden mb-4 p-4 rounded-md bg-green-100 border border-green-300 text-green-700"></div>
        <div id="modal-errors" class="hidden mb-4 p-4 rounded-md bg-red-100 border border-red-300 text-red-700"></div>

        <p class="text-black mb-4 font-poppins contacttitle">
          Our team will respond to you shortly.
        </p>

        <!-- Form -->
        <form id="modalContactForm" method="POST" action="" class="space-y-4" novalidate>
          @csrf
         

          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label for="fullName" class="block text-sm font-medium text-gray-700 mb-1">Full Name <span class="text-red-500">*</span></label>
              <input id="fullName" name="fullName" type="text" required placeholder="Your Name"
                     class="w-full px-3 py-2 errs border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-shadow" />
               <span class="text-red-500 fullName_error"></span>
                </div>

            <div>
              <label for="email" class="block  text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
              <input id="email" name="email" type="email" placeholder="example@gmail.com"
                     class="w-full errs px-3 py-2 border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-shadow" />
              <span class="text-red-500 email_error"></span>
                    </div>

            <div>
              <label for="phone" class="block text-sm  font-medium text-gray-700 mb-1">Phone <span class="text-red-500">*</span></label>
              <input id="phone" name="phone" type="tel" placeholder="7643938373" required 
                     class="w-full px-3 py-2 errs errsborder border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-shadow" />
             <span class="text-red-500 phone_error"></span>
                </div>

            <div>
              <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
              <input id="city" name="city" type="text" placeholder="Lucknow"
                     class="w-full px-3 py-2 errs border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-shadow" />
               <span class="text-red-500 city_error"></span>
                    </div>
          </div>

          <p class="text-xs text-gray-500"><span class="text-red-500">*</span> Please provide either Phone or Email.</p>

          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">How can we help?</label>
            <textarea id="message" name="message" rows="4" placeholder="Tell us about your requirements..."
                      class="w-full px-3 py-2 errs border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500 transition-shadow resize-y">{{ old('message') }}</textarea>
          <span class="text-red-500 message_error"></span>
                    </div>

          <button id="modalSubmitBtn" type="submit" class="w-full py-3 px-6 rounded-md font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-all duration-300">
            Send Message
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

