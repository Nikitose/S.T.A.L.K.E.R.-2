const appearImages = document.querySelectorAll('.personnages .img-perso, .anomalie .img-ano, .mutants .img-mut');

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

function handleScroll() {
  appearImages.forEach((image) => {
    if (isInViewport(image)) {
      image.classList.add('visible');
    }
  });
}

window.addEventListener('scroll', handleScroll);

handleScroll();