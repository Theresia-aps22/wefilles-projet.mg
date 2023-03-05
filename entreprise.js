function four() {
    for (i = 0; i < elements.length; i++) {
      elements[i].style.flex = "25%";
    }
  }


  const imageInput = document.getElementById('image-input');
  const textInput = document.getElementById('text-input');
  const submitBtn = document.getElementById('submit-btn');
  const output = document.getElementById('output');
  const linkOutput = document.getElementById('link-output');
  
  submitBtn.addEventListener('click', () => {
    const file = imageInput.files[0];
    const reader = new FileReader();
  
    reader.addEventListener('load', () => {
      const img = document.createElement('img');
      img.src = reader.result;
  
      const p = document.createElement('p');
      p.textContent = textInput.value;
  
      output.innerHTML = '';
      output.appendChild(img);
      output.appendChild(p);
  
      output.style.display = 'block';
  
      const link = document.createElement('a');
      link.href = `${reader.result},${encodeURIComponent(textInput.value)}`;
      link.textContent = 'Lien vers l\'image et le texte';
      link.target = '_blank';
  
      linkOutput.innerHTML = '';
      linkOutput.appendChild(link);
  
      linkOutput.style.display = 'block';
    });
  
    reader.readAsDataURL(file);
  });
  