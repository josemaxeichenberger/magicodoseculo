<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webhook Sender</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    form {
      max-width: 400px;
    }
    label {
      font-weight: bold;
    }
    input, button {
      width: 100%;
      padding: 10px;
      margin: 5px 0 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #28a745;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <h1>Webhook Test Form</h1>
  <form id="webhookForm">
    <label for="url">Webhook URL</label>
    <input type="url" id="url" name="url" placeholder="https://example.com/webhook" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="example@example.com" required>

    <label for="planCode">Plan Code</label>
    <input type="text" id="planCode" name="planCode" placeholder="Enter Plan Code" required>

    <label for="planName">Plan Name</label>
    <input type="text" id="planName" name="planName" placeholder="Enter Plan Name" required>

    <button type="submit">Send Webhook</button>
  </form>

  <script>
    document.getElementById('webhookForm').addEventListener('submit', function(event) {
      event.preventDefault();

      const url = document.getElementById('url').value;
      const email = document.getElementById('email').value;
      const planCode = document.getElementById('planCode').value;
      const planName = document.getElementById('planName').value;

      const data = {
        sale_status_enum_key: "approved",
        customer: { email: email },
        plan: { code: planCode, name: planName }
      };

      fetch(url, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(result => {
          alert('Webhook sent successfully:\n' + JSON.stringify(result, null, 2));
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Error sending webhook:\n' + error);
        });
    });
  </script>
</body>
</html>
