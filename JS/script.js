function validateForm() {
  n = document.f.n.value;
  password = document.f.password.value;

  if (n == "") {
    alert("Le nom doit être rempli");
  } else if (password.length < 8) {
    alert("Le mot de passe doit comporter au moins 8 caractères.");
    return false;
  }
}

function validateForm2() {
  n = document.f1.name.value;
  p = document.f1.pass.value;
  m = document.f1.mail.value;
  if (n == "") {
    alert("Le nom doit être rempli");
  }
  if (p.length < 8) {
    alert("Le mot de passe doit comporter au moins 8 caractères.");
    return false;
  }
  if (m == "") {
    alert("saisir  votre  email ");
    return false;
  }
}
