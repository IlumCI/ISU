document.addEventListener('DOMContentLoaded', function() {
  var form = document.getElementById('signupForm');

  form.addEventListener('submit', function(event) {
    var password = document.getElementById('password').value;
    var confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
      alert('Passwords do not match');
      event.preventDefault();
    }
  });
});
