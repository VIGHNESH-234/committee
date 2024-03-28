document.getElementById('registrationForm').addEventListener('submit', function(event) {
  event.preventDefault();

  // Clear any previous error messages
  document.getElementById('nameError').innerText = '';
  document.getElementById('surnameError').innerText = '';
  document.getElementById('collegeEmailError').innerText = '';
  document.getElementById('passwordError').innerText = '';

  // Get the form input values
  const name = document.getElementById('name').value;
  const surname = document.getElementById('surname').value;
  const collegeEmail = document.getElementById('collegeEmail').value;
  const password = document.getElementById('password').value;

  // Validate the form input values
  if (name === '') {
    document.getElementById('nameError').innerText = 'Name is required';
    return;
  }

  if (surname === '') {
    document.getElementById('surnameError').innerText = 'Surname is required';
    return;
  }

  if (collegeEmail === '') {
    document.getElementById('collegeEmailError').innerText = 'College email is required';
    return;
  }

  if (password === '') {
    document.getElementById('passwordError').innerText = 'Password is required';
    return;
  }

  // If all the input values are valid, display a success message
  alert('Details saved successfully');
});