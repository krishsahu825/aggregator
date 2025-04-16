let currentIndex = 0;
const slider = document.getElementById('slider');
const totalSlides = slider.children.length;

function moveSlide(direction) {
  currentIndex += direction;
  if (currentIndex < 0) currentIndex = totalSlides - 1;
  if (currentIndex >= totalSlides) currentIndex = 0;
  slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

  const toggleBtn = document.getElementById('themeToggle');
  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    // Switch icon
    toggleBtn.textContent = document.body.classList.contains('dark-theme') ? '☀️' : '🌙';
  });

  