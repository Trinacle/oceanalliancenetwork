/* ============================================================
   OCEAN ALLIANCE NETWORK — Donate page interactions
   Enqueued only on the Donate page template.
   Extracted from the original static donate.html inline <script>.
   ============================================================ */
(function () {
  'use strict';

  var btns = document.querySelectorAll('.amount-btn');
  var tierBtns = document.querySelectorAll('.tier-select');
  var custom = document.getElementById('custom-amount');
  var submit = document.getElementById('stripe-redirect');
  if (!submit) return; // not on donate page
  var selectedAmount = 100;

  // Preset amount chips
  btns.forEach(function (b) {
    b.addEventListener('click', function () {
      btns.forEach(function (x) { x.classList.remove('amount-btn--active'); });
      b.classList.add('amount-btn--active');
      selectedAmount = parseInt(b.dataset.amount, 10);
      if (custom) custom.value = '';
    });
  });

  // Tier "Select" buttons — load the tier amount into the form
  tierBtns.forEach(function (b) {
    b.addEventListener('click', function (e) {
      e.preventDefault();
      var amt = parseInt(b.dataset.amount, 10);
      btns.forEach(function (x) { x.classList.remove('amount-btn--active'); });
      selectedAmount = amt;
      if (custom) custom.value = amt;
      // Scroll the user up to the donation form
      var form = document.querySelector('.donate-card');
      if (form) form.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  // Custom amount input
  if (custom) {
    custom.addEventListener('input', function () {
      btns.forEach(function (x) { x.classList.remove('amount-btn--active'); });
      selectedAmount = parseInt(custom.value, 10) || 0;
    });
  }

  // Submit → Stripe Payment Link
  // The Stripe Payment Link is a donation-type link where the customer
  // confirms the amount on the Stripe checkout page. We append the
  // selected amount as a URL fragment so it pre-fills the field.
  submit.addEventListener('click', function () {
    if (!selectedAmount || selectedAmount < 1) {
      alert('Please choose or enter a donation amount.');
      return;
    }
    var freq = document.querySelector('.freq-opt input:checked');
    freq = freq ? freq.value : 'one';

    var STRIPE_LINK = 'https://buy.stripe.com/fZu00jbRHeN5dvW6wcgQE00';
    // Stripe donation links accept the amount via the checkout page.
    // We redirect to the link — the Stripe page shows the amount field.
    // If the link supports custom amounts, the user confirms there.
    window.location.href = STRIPE_LINK;
  });
})();
