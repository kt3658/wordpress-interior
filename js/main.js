"use strict";

{
  const humbergerMenuBtn = document.querySelector('.header-btn');
  humbergerMenuBtn.addEventListener('click', function(){
    document.getElementById('header').classList.toggle('open');
});
}