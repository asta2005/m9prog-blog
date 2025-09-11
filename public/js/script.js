// Animate skill bars when visible
document.addEventListener("scroll", () => {
  const skills = document.querySelectorAll(".progress");
  skills.forEach(bar => {
    const rect = bar.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom >= 0) {
      bar.style.width = bar.getAttribute("data-value");
    }
  });
});
