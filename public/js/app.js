let textAreas = document.querySelectorAll('textarea');

for (let textArea of textAreas) {
  textArea.innerHTML = textArea.innerHTML.trim();
}
