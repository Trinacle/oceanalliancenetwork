/* ============================================================
   OCEAN ALLIANCE NETWORK — Interactions
   - Scroll-driven ocean depth (gradient + gauge)
   - Rising bubble particle canvas
   - Mega-menu / mobile drawer
   - Reveal-on-scroll + animated counters
   ============================================================ */
(function(){
  'use strict';

  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- 1. SCROLL DEPTH (gradient + header + gauge) ---------- */
  const header   = document.getElementById('site-header');
  const bg       = document.getElementById('ocean-bg');
  const gauge    = document.getElementById('depth-gauge');
  const gaugeFill= gauge ? gauge.querySelector('.gauge-fill') : null;
  const depthTxt = gauge ? gauge.querySelector('.gauge-depth') : null;
  const zoneTxt  = gauge ? gauge.querySelector('.gauge-zone') : null;

  const ZONES = [
    {max:0.12, name:'SURFACE',  depth:0},
    {max:0.28, name:'SUNLIT',   depth:30},
    {max:0.45, name:'TWILIGHT', depth:200},
    {max:0.65, name:'MIDNIGHT', depth:1000},
    {max:0.85, name:'ABYSSAL',  depth:4000},
    {max:1.01, name:'TRENCH',   depth:10000},
  ];

  let ticking = false;
  function onScroll(){
    if(ticking) return;
    ticking = true;
    requestAnimationFrame(()=>{
      const st = window.scrollY;
      const docH = document.documentElement.scrollHeight - window.innerHeight;
      const p = docH > 0 ? Math.min(st / docH, 1) : 0;

      // Background gradient is now FIXED (no scroll-driven blue shift).
      // The depth gauge still animates for a subtle sense of descent.
      // if(bg) bg.style.backgroundPosition = `0 ${p * 220}vh`;

      // header solidifies after first breath
      if(header) header.classList.toggle('scrolled', st > 60);

      // gauge
      if(gauge){
        gauge.classList.toggle('visible', st > window.innerHeight * 0.4);
        if(gaugeFill) gaugeFill.style.height = (p * 100) + '%';
        const z = ZONES.find(z => p < z.max) || ZONES[ZONES.length-1];
        // interpolate a faux depth reading
        const interp = Math.round(z.depth + (p * 11000));
        if(depthTxt) depthTxt.textContent = interp.toLocaleString() + 'm';
        if(zoneTxt && zoneTxt.textContent !== z.name) zoneTxt.textContent = z.name;
      }
      ticking = false;
    });
  }
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  /* ---------- 2. BUBBLE CANVAS ---------- */
  const canvas = document.getElementById('depth-canvas');
  if(canvas && !prefersReduced){
    const ctx = canvas.getContext('2d');
    let w, h, bubbles = [];
    const COUNT = window.innerWidth < 768 ? 22 : 48;

    function resize(){
      w = canvas.width = window.innerWidth;
      h = canvas.height = window.innerHeight;
    }
    function spawn(init){
      bubbles.push({
        x: Math.random() * w,
        y: init ? Math.random() * h : h + 20,
        r: Math.random() * 4 + 1,
        vy: Math.random() * 0.6 + 0.3,
        vx: (Math.random() - 0.5) * 0.4,
        a: Math.random() * 0.4 + 0.1,
        wobble: Math.random() * Math.PI * 2,
      });
    }
    function reset(){
      resize();
      bubbles = [];
      for(let i=0;i<COUNT;i++) spawn(true);
    }
    function tick(){
      ctx.clearRect(0,0,w,h);
      for(let i=bubbles.length-1;i>=0;i--){
        const b = bubbles[i];
        b.wobble += 0.02;
        b.y -= b.vy;
        b.x += b.vx + Math.sin(b.wobble) * 0.3;
        if(b.y < -10){ bubbles.splice(i,1); spawn(false); continue; }
        ctx.beginPath();
        ctx.arc(b.x, b.y, b.r, 0, Math.PI*2);
        ctx.fillStyle = `rgba(180, 240, 255, ${b.a})`;
        ctx.fill();
        // highlight
        ctx.beginPath();
        ctx.arc(b.x - b.r*0.3, b.y - b.r*0.3, b.r*0.4, 0, Math.PI*2);
        ctx.fillStyle = `rgba(255,255,255,${b.a*0.8})`;
        ctx.fill();
      }
      requestAnimationFrame(tick);
    }
    reset();
    tick();
    window.addEventListener('resize', reset);
  }

  /* ---------- 3. MOBILE DRAWER ---------- */
  const toggle = document.getElementById('menu-toggle');
  const drawer = document.getElementById('mobile-drawer');
  if(toggle && drawer){
    toggle.addEventListener('click', ()=>{
      const open = drawer.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      document.body.style.overflow = open ? 'hidden' : '';
    });
    drawer.querySelectorAll('a').forEach(a => a.addEventListener('click', ()=>{
      drawer.classList.remove('open');
      toggle.setAttribute('aria-expanded','false');
      document.body.style.overflow = '';
    }));
  }

  /* ---------- 4. REVEAL ON SCROLL ---------- */
  const reveals = document.querySelectorAll('.reveal');
  if(prefersReduced){
    reveals.forEach(r => r.classList.add('in'));
  } else if('IntersectionObserver' in window){
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          e.target.classList.add('in');
          io.unobserve(e.target);
        }
      });
    }, {threshold:0.15, rootMargin:'0px 0px -8% 0px'});
    reveals.forEach(r => io.observe(r));
  } else {
    reveals.forEach(r => r.classList.add('in'));
  }

  /* ---------- 5. ANIMATED COUNTERS ---------- */
  const counters = document.querySelectorAll('.stat-num');
  if(prefersReduced){
    counters.forEach(c => c.textContent = c.dataset.count + (c.dataset.suffix || ''));
  } else if('IntersectionObserver' in window){
    const cio = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(!e.isIntersecting) return;
        const el = e.target;
        const target = parseFloat(el.dataset.count);
        const suffix = el.dataset.suffix || '';
        const dur = 1800;
        const start = performance.now();
        function step(now){
          const t = Math.min((now - start) / dur, 1);
          const eased = 1 - Math.pow(1 - t, 3);
          const val = Math.floor(target * eased);
          el.textContent = val + (t === 1 ? suffix : '');
          if(t < 1) requestAnimationFrame(step);
        }
        requestAnimationFrame(step);
        cio.unobserve(el);
      });
    }, {threshold:0.6});
    counters.forEach(c => cio.observe(c));
  }

  /* ---------- 6. FILM PLAY (placeholder modal hook) ---------- */
  document.querySelectorAll('.film-play').forEach(btn=>{
    btn.addEventListener('click', ()=>{
      // In production this opens a lightbox with the actual video.
      // For now, signal the intent.
      btn.style.animation = 'none';
      btn.offsetHeight; // reflow
      btn.style.animation = '';
    });
  });

  /* ---------- 7. CLOSE MEGA ON ESC / CLICK OUT ---------- */
  document.addEventListener('keydown', (e)=>{
    if(e.key === 'Escape' && drawer && drawer.classList.contains('open')){
      drawer.classList.remove('open');
      toggle.setAttribute('aria-expanded','false');
      document.body.style.overflow = '';
    }
  });
})();
