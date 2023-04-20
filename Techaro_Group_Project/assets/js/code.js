function validateForm(){
    var inputs = document.querySelectorAll('input[name^="q"]');
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].value == null) {
          alert('Please answer all the questions before submitting the quiz.');
          return false; // Prevent the form from being submitted
        }
      }
      
    // If all questions have been answered, allow the form to be submitted
    return true;
}