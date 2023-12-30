const cvBtn = document.getElementById('cv-btn');
const resumeBtn = document.getElementById('resume-btn');
const cvLink = document.getElementById('cv-link');
const resumeLink = document.getElementById('resume-link');
const cvForm = document.getElementById('cv-form');
const resumeForm = document.getElementById('resume-form');

cvBtn.addEventListener('click', function() {
  cvForm.classList.remove('hidden');
  resumeForm.classList.add('hidden');
});

resumeBtn.addEventListener('click', function() {
  cvForm.classList.add('hidden');
  resumeForm.classList.remove('hidden');
});

cvLink.addEventListener('click', function(event) {
  event.preventDefault();
  cvBtn.click();
});

resumeLink.addEventListener('click', function(event) {
  event.preventDefault();
  resumeBtn.click();
});