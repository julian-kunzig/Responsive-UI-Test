$( document ).ready(function() {
  'use strict';

  // Global variables
  var baseURL = 'https://ltv-data-api.herokuapp.com/api/v1/records.json';

  // Global HTML Elements
  var emailField = $('#searchEmail'),
      emailMessage = $('#email_search_message'),
      emailSec = $('#email_section'),
      loadingSec = $('#loading_section');

  /**
   * Email Validation
   */
  function emailValidation() {
    var email = emailField.val();
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  /**
   * Clear the Email Search Form
   */
  function clearEmailForm() {
    emailField.removeClass('in-valid');
    emailMessage.addClass('d-none');
    emailMessage.val('');
  }

  /**
   * Show loading bar
   */
  function showLoading() {
    emailSec.addClass('d-none');
    loadingSec.removeClass('d-none')
  }

  /**
   * Hide loading bar
   */
  function hideLoading() {
    emailSec.removeClass('d-none');
    loadingSec.addClass('d-none');
  }

  // Email Search Form Submitting.
  $('#email_search_form').submit(function(e) {
    e.preventDefault();
    clearEmailForm();
    if (!emailValidation()) {
      emailField.addClass('in-valid');
      emailMessage.removeClass('d-none');
      emailMessage.html('Please add a valid email address');
    }
    showLoading();
    $.ajax({
      type: 'GET',
      url: `${baseURL}?email=${emailField.val()}`,
      success: function(data) {
        console.log('success : ', data);
        hideLoading();
      },
      error: function(error) {
        console.log('error : ', error);
        hideLoading();
      }
    })
  });
});
