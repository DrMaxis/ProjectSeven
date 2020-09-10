<script>

var input = document.querySelector("#phonenumber"),
  errorMsg = document.querySelector("#error-msg"),
  validMsg = document.querySelector("#valid-msg"),
  countryCodeInput = document.querySelector('#dialcode'),
  submitButton = document.querySelector('#submit_register');


// here, the index maps to the error code returned from getValidationError - see readme
var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

// initialise plugin
var iti = window.intlTelInput(input, {
  utilsScript: "{{asset('js/extras/verification/intlTelInput/js/utils.js?1585994360633')}}"
});

var reset = function() {
  input.classList.remove("error");
  errorMsg.innerHTML = "";
  errorMsg.classList.add("hide");
  validMsg.classList.add("hide");
};

// on blur: validate
input.addEventListener('blur', function() {
  reset();
  if (input.value.trim()) {
    if (iti.isValidNumber()) {
      validMsg.classList.remove("hide");
      countryCodeInput.value = iti.getSelectedCountryData().dialCode;
      submitButton.disabled = false;
    } else {
      input.classList.add("error");
      var errorCode = iti.getValidationError();
      errorMsg.innerHTML = errorMap[errorCode];
      errorMsg.classList.remove("hide");
      submitButton.disabled = true;

    }
  }
});

// on keyup / change flag: reset
input.addEventListener('change', reset);
input.addEventListener('keyup', reset);


</script>
