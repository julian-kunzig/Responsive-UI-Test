$(document).ready(function () {
  "use strict";

  // Global variables
  var baseURL = "https://ltv-data-api.herokuapp.com/api/v1/records.json";

  // Global HTML Elements
  var emailField = $("#searchEmail"),
    emailMessage = $("#email_search_message"),
    emailSec = $("#email_section"),
    loadingSec = $("#loading_section"),
    searchSec = $("#search_section"),
    resultSec = $("#result_section"),
    searchMsg = $("#search_message");

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
    emailField.removeClass("in-valid");
    emailMessage.addClass("d-none");
    emailMessage.val("");
    emailField.removeClass("in-valid");
    emailMessage.addClass("d-none");
    emailMessage.html("");
  }

  /**
   * Show loading bar
   */
  function showLoading() {
    resultSec.addClass("d-none");
    searchSec.addClass("d-none");
    emailSec.addClass("d-none");
    loadingSec.removeClass("d-none");
  }

  /**
   * Hide loading bar
   */
  function hideLoading() {
    searchSec.removeClass("d-none");
    resultSec.removeClass("d-none");
    loadingSec.addClass("d-none");
  }

  /**
   * Clear the Result Section
   */
  function clearResultSec() {
    resultSec.html("");
    searchMsg.html("");
  }

  /**
   * Conver the string to Phone number format
   *
   * @param {string} phoneNumberString Phone number string
   */
  function formatPhoneNumber(phoneNumberString) {
    var cleaned = ("" + phoneNumberString).replace(/\D/g, "");
    var match = cleaned.match(/^(\d{3})(\d{3})(\d{4})$/);
    if (match) {
      return "(" + match[1] + ") " + match[2] + "-" + match[3];
    }
    return null;
  }

  /**
   * Return HTML Dom of Description Array
   *
   * @param {array} arr Descripton Array
   * @param {string} type Descripton Type
   */
  function makeDescriptionArray(arr, type = "") {
    var html = ``,
      classes = "sub-description";
    if (type === "phone") classes += " phone-number";
    for (const item of arr) {
      html += `
        <p class="${classes}">${
        type === "phone" ? formatPhoneNumber(item) : item
      }</p>
      `;
    }
    return html;
  }

  // Email Search Form Submitting.
  $("#email_search_form").submit(function (e) {
    e.preventDefault();
    clearEmailForm();
    if (!emailValidation()) {
      emailField.addClass("in-valid");
      emailMessage.removeClass("d-none");
      emailMessage.html("Please add a valid email address");
      return;
    }
    showLoading();
    clearResultSec();
    $.ajax({
      type: "GET",
      url: `${baseURL}?email=${emailField.val()}`,
      success: function (data) {
        // Get Data
        if (typeof data["email"] !== "undefined") {
          resultSec.html(`
            <div class="container success-result">
              <h3 class="title">1 Result</h3>
              <p class="description">Look at the result below to see the details of the person you’re searched for.</p>
              <div class="d-flex result-content">
                <div class="d-flex align-items-center justify-content-center round-mark">
                  <img src="assets/PNGs/icn_person@2x.png" />
                </div>
                <div class="row result-content-round">
                  <div class="col-md-12 name">${data.first_name} ${
            data.last_name
          }</div>
                  <div class="col-md-12 sub-description mb-4">${
                    data.description
                  }</div>
                  <div class="col-md-6 mb-4">
                    <h5 class="sub-title">Address</h5>
                    <p class="sub-description">${data.address}</p>
                  </div>
                  <div class="col-md-6 mb-4">
                    <h5 class="sub-title">Phone Numbers</h5>
                    ${makeDescriptionArray(data.phone_numbers, "phone")}
                  </div>
                  <div class="col-md-6 mb-4">
                    <h5 class="sub-title">Email</h5>
                    <p class="sub-description">${data.email}</p>
                  </div>
                  <div class="col-md-6 mb-4">
                    <h5 class="sub-title">Relatives</h5>
                    ${makeDescriptionArray(data.relatives)}
                  </div>
                </div>
              </div>
            </div>
          `);
        } else {
          resultSec.html(`
            <div class="container failed-result">
              <h3 class="title">0 Results</h3>
              <p class="description">Try starting a new search below</p>
            </div>
          `);
        }
        searchMsg.html(`
          <h1 class="title">Can’t Find The Right Person?</h1>
          <h3 class="description">
            <span class="text-emphasis">Try Again</span> - Make a new search
          </h3>
        `);
        hideLoading();
      },
      error: function (error) {
        console.log("error : ", error);
      },
    });
  });
});
