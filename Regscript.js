const Reg = document.getElementById('Reg');

loginForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const username = document.getElementById('Uname').value;
  const Email = document.getElementById('Email').value;
  const Phone = document.getElementById('Phone').value;
  const password = document.getElementById('password').value;
  const ReEnter = document.getElementById('ReEnter').value;
  // Add your authentication logic here, for example, checking against a list of users
  // For this example, we'll assume successful login and redirect to home.html
  window.location.href = 'after_login.html';
});



