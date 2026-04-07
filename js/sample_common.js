
/* 햄버거 메뉴 */

const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active'); // 햄버거 버튼 X 변환
    navMenu.classList.toggle('active');
});

// 메뉴 클릭시 적용

const navLinks = document.querySelectorAll('nav ul li a');
navLinks.forEach(link => {
  if(link.href === window.location.href){
    link.classList.add('active');
  }
});