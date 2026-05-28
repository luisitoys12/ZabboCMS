/* HabboGZ Skin JS — ZabboCMS */
(function(){
  'use strict';

  /* ── ONLINE COUNT AUTO-REFRESH ────────────────────── */
  function updateOnlineCount(){
    $.ajax({
      url: window._gzApi ? window._gzApi + '/extra.php?action=getOnlineUsers' : '/api/extra.php?action=getOnlineUsers',
      dataType: 'json',
      success: function(data){
        var val = data.OnlineUsers || data.onlineUsers || 0;
        $('#online-count').text(val);
      },
      error: function(){}
    });
  }

  /* ── COUNTER ANIMATION ────────────────────────────── */
  function animateCounter(el){
    var target = parseInt(el.textContent.replace(/,/g,''), 10);
    if(isNaN(target) || target === 0) return;
    var duration = 1000, step = Math.ceil(target / (duration / 16)), cur = 0;
    var timer = setInterval(function(){
      cur = Math.min(cur + step, target);
      el.textContent = cur.toLocaleString();
      if(cur >= target) clearInterval(timer);
    }, 16);
  }

  /* ── SCROLL REVEAL ─────────────────────────────────── */
  function initReveal(){
    var els = document.querySelectorAll('.gz-reveal');
    if(!els.length) return;
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.1 });
    els.forEach(function(el){ io.observe(el); });
  }

  /* ── AUTO-LOADING BUTTONS ──────────────────────────── */
  function initAutoload(){
    $(document).on('submit', 'form', function(){
      var $btn = $(this).find('.gz-autoload');
      if($btn.length){
        $btn.prop('disabled', true);
        $btn.html('<i class="fa fa-spinner fa-spin"></i> ' + ($btn.data('loading') || 'Loading...'));
      }
    });
  }

  /* ── TOOLTIPS ──────────────────────────────────────── */
  function initTooltips(){
    if($.fn.tooltip){
      $('[data-toggle="tooltip"]').tooltip({ placement: 'top' });
    }
  }

  /* ── NAVBAR ACTIVE STATE ───────────────────────────── */
  function initNavActive(){
    var path = window.location.pathname;
    $('.gz-navbar ul li a').each(function(){
      var href = $(this).attr('href');
      if(href && path.startsWith(href) && href !== '/'){
        $(this).addClass('active');
      }
    });
  }

  /* ── INIT ───────────────────────────────────────────── */
  $(document).ready(function(){
    updateOnlineCount();
    setInterval(updateOnlineCount, 60000);

    /* Animate stat counters */
    document.querySelectorAll('.gz-stat-value').forEach(animateCounter);

    initReveal();
    initAutoload();
    initTooltips();
    initNavActive();

    /* Stagger reveal items */
    $('.gz-reveal').each(function(i){
      $(this).css('transition-delay', (i * 60) + 'ms');
    });
  });

})();
