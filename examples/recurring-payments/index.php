<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sample Payment Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="https://js.squareup.com/v2/paymentform">
  </script>
  <script>
    // Initializes the payment form. See the documentation for descriptions of
    // each of these parameters.
    var paymentForm = new SqPaymentForm({
      applicationId: 'sandbox-sq0idp-gbQhcOCpmb2X4W1588Ky7A',
      inputClass: 'sq-input',
      cardNumber: {
        elementId: 'sq-card-number',
        placeholder: '•••• •••• •••• ••••'
      },
      cvv: {
        elementId: 'sq-cvv',
        placeholder: 'CVV'
      },
      expirationDate: {
        elementId: 'sq-expiration-date',
        placeholder: 'MM/YY'
      },
      postalCode: {
        elementId: 'sq-postal-code'
      },
      callbacks: {

        // Called when the SqPaymentForm completes a request to generate a card
        // nonce, even if the request failed because of an error.
        cardNonceResponseReceived: function(errors, nonce, cardData) {
          if (errors) {
            console.log("Encountered errors:");

            // This logs all errors encountered during nonce generation to the
            // Javascript console.
            errors.forEach(function(error) {
              alert('  ' + error.message);
            });

          // No errors occurred. Extract the card nonce.
        } else {
          document.getElementById('card-nonce').value = nonce;
          document.getElementById('postal-code').value = cardData.billing_postal_code
          document.getElementById('nonce-form').submit();

        }
      }
    }
  });

    // This function is called when a buyer clicks the Submit button on the webpage
    // to charge their card.
    function requestCardNonce(event) {

      // This prevents the Submit button from submitting its associated form.
      // Instead, clicking the Submit button should tell the SqPaymentForm to generate
      // a card nonce, which the next line does.
      event.preventDefault();

      paymentForm.requestCardNonce();
    }
  </script>

    <!--
      These styles can live in a separate .css file. They're just here to keep this
      example to a single file.
    -->
    <style type="text/css">
      .sq-input {
        border: 1px solid rgb(223, 223, 223);
        outline-offset: -2px;
        margin-bottom: 5px;
      }
      .sq-input--focus {
        /* Indicates how form inputs should appear when they have focus */
        outline: 5px auto rgb(59, 153, 252);
      }
      .sq-input--error {
        /* Indicates how form inputs should appear when they contain invalid values */
        outline: 5px auto rgb(255, 97, 97);
      }
    </style>
  </head>

  <body>

    <!--
      These div elements are the placeholder elements that are replaced by the
      SqPaymentForm's iframes.
    -->



    <!--
      After the SqPaymentForm generates a card nonce, *this* form POSTs the generated
      card nonce to your application's server.

      You should replace the action attribute of the form with the path of
      the URL you want to POST the nonce to (for example, "/process-card")
    -->
    <form id="nonce-form" novalidate action="process-card.php" method="post">
      <label>First Name</label>
      <input type="text" name="fname">
      <label>Last Name</label>
      <input type="text" name="lname">
      <br>
      <br>
      <input type='hidden' value='false' name='storeCard'>
      <!--
        Whenever a nonce is generated, it's assigned as the value of this hidden
        input field.
      -->

      <label>Card Number</label>
      <div id="sq-card-number"></div>
      <label>CVV</label>
      <div id="sq-cvv"></div>
      <label>Expiration Date</label>
      <div id="sq-expiration-date"></div>
      <label>Postal Code</label>
      <div id="sq-postal-code"></div>
      <input type="checkbox" name="storeCard" value="true">Keep my card on file for future purchases<br>

      <input type="hidden" id="card-nonce" name="nonce">
      <input type="hidden" id="postal-code" name="postal-code">
      <!--
        Clicking this Submit button kicks off the process to generate a card nonce
        from the buyer's card information.
      -->
      <input type="submit" onclick="requestCardNonce(event)">



    </form>
  </body>
  </html>