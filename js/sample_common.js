
/* 햄버거 메뉴 */

const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('active'); // 햄버거 버튼 X 변환
    navMenu.classList.toggle('active');
});