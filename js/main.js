'use strict'

{
    $('.pickup-slider').slick({
        arrows: false,
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 2000, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '15%',
        // responsive: [
        //   {
        //     breakpoint: 600,
        //     settings: {
        //       slidesToShow: 1
        //     }
        //   }
        // ]
      });

      //フェードインの実装
      const targets = document.querySelectorAll('.works__card');
      function callback(entries, obs) {
        entries.forEach(entry => {
          if(!entry.isIntersecting) {
            return;
          }
            entry.target.classList.add('appear');
            obs.unobserve(entry.target);
        });
      }
      const options = {
        threshold: 0.1,
      };
      const observer = new IntersectionObserver(callback, options);
      targets.forEach(target => {
        observer.observe(target);
      });

    
    //ハンバーガーメニュー
    const hamburger = document.querySelector('.hamburger-menu');
    const mask = document.querySelector('.mask');
    const nav = document.querySelector('.header-nav__list');
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('is-active');
      mask.classList.toggle('is-active');
      nav.classList.toggle('is-active');
    });
    
    mask.addEventListener('click', () => {
      hamburger.classList.remove('is-active');
      mask.classList.remove('is-active');
      nav.classList.remove('is-active');
    });

    const contactBtn = document.querySelector('.contact-btn');
    if(window.outerWidth <= 800) {
      contactBtn.classList.remove('btn');
    } else {
      contactBtn.classList.add('btn')
    }
    
    window.addEventListener('resize', () => {
      if(window.outerWidth <= 800) {
        contactBtn.classList.remove('btn');
      } else {
        contactBtn.classList.add('btn')
      }
    })
}