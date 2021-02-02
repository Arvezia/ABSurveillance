// Proses Validasi Password  
   $(document).ready(function() {
      $('#regis').validate({
        rules: {
          password2: {
            equalTo: "#password"
          }
        },
        messages: {
          password2: {
            equalTo: "<p>Password yang Anda Masukan Tidak Sama</p>"
          }
        }
      });
    });
