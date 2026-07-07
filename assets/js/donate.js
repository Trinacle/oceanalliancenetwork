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

  // Submit → Stripe checkout
  submit.addEventListener('click', function () {
    if (!selectedAmount || selectedAmount < 1) {
      alert('Please choose or enter a donation amount.');
      return;
    }
    /* TODO: Replace with real Stripe integration. Two options:
       (A) Payment Link — swap the alert for:
           var freq = document.querySelector('.freq-opt input:checked').value;
           var links = { one: 'https://buy.stripe.com/YOUR_ONE_TIME_LINK',
                         monthly: 'https://buy.stripe.com/YOUR_MONTHLY_LINK' };
           window.location.href = links[freq];
       (B) Checkout Session — fetch a session URL from a WP REST endpoint
           (e.g. /wp-json/oan/v1/checkout) created with stripe-php, then
           window.location.href = session.url.
       Never put your Stripe SECRET key in the browser — only pk_live_... */
    alert('Redirecting to Stripe for a $' + selectedAmount + ' donation.\n\n(Wire up your real Stripe Payment Link here.)');
    // window.location.href = 'https://checkout.stripe.com/c/pay/oan-donation?amount=' + (selectedAmount * 100);
  });
})();
