// Login validation
document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const messageDiv = document.getElementById('loginMessage');
            
            // Simple validation using if statements
            if (email === '') {
                messageDiv.innerHTML = '<div class="alert alert-danger">Email harus diisi!</div>';
                return;
            }
            
            if (password === '') {
                messageDiv.innerHTML = '<div class="alert alert-danger">Password harus diisi!</div>';
                return;
            }
            
            // Check credentials (dummy validation)
            if (email === 'admin@techsolution.com' && password === 'password123') {
                messageDiv.innerHTML = '<div class="alert alert-success">Login berhasil! Mengalihkan...</div>';
                setTimeout(function() {
                    window.location.href = 'dashboard.html';
                }, 1500);
            } else {
                messageDiv.innerHTML = '<div class="alert alert-danger">Email atau password salah!</div>';
            }
        });
    }
    
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('regEmail').value;
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            const messageDiv = document.getElementById('registerMessage');
            
            // Simple validation using if statements
            if (firstName === '' || lastName === '') {
                messageDiv.innerHTML = '<div class="alert alert-danger">Nama depan dan belakang harus diisi!</div>';
                return;
            }
            
            if (email === '') {
                messageDiv.innerHTML = '<div class="alert alert-danger">Email harus diisi!</div>';
                return;
            }
            
            if (password === '') {
                messageDiv.innerHTML = '<div class="alert alert-danger">Password harus diisi!</div>';
                return;
            }
            
            if (password !== confirmPassword) {
                messageDiv.innerHTML = '<div class="alert alert-danger">Konfirmasi password tidak sesuai!</div>';
                return;
            }
            
            if (!document.getElementById('agreeTerms').checked) {
                messageDiv.innerHTML = '<div class="alert alert-danger">Anda harus menyetujui syarat dan ketentuan!</div>';
                return;
            }
            
            // Registration successful
            messageDiv.innerHTML = '<div class="alert alert-success">Pendaftaran berhasil! Silakan login.</div>';
            setTimeout(function() {
                window.location.href = 'login.html';
            }, 2000);
        });
    }
});

// Logout function
function logout() {
    if(confirm('Apakah Anda yakin ingin logout?')) {
        window.location.href = 'index.html';
    }
}