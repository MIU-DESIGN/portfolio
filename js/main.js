'use strict'

{
    $('.work__slider').slick({
        arrows: false,
        autoplay: true, // 自動でスクロール
        autoplaySpeed: 2000, // 自動再生のスライド切り替えまでの時間を設定
        speed: 5000, // スライドが流れる速度を設定
        slidesToShow: 1,
        centerMode: true,
        centerPadding: '60px',
        responsive: [
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
}