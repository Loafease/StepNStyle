<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <!-- Include your CSS files here -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Checkout</h1>
        <form action="{{ route('checkout.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="phone">Address</label>
                <input type="text" required>
            </div>
            <label for="payment-method">Payment Method:</label>
<select id="payment-method" class="form-control">
    <option value="credit_card">Credit Card</option>
    <option value="debit_card">Debit Card</option>
    <option value="paypal">PayPal</option>
    <option value="bank_transfer">Bank Transfer</option>
    <option value="cash_on_delivery">Cash on Delivery</option>
</select>

                              
            <div class="form-group">
    <label for="total">Total Amount</label>
    <input type="text" id="total" name="total" value="{{ $subtotal }}" readonly>
</div>

            <!-- Additional form fields can be added here as needed -->
            <button type="submit" onclick="confirmCheckout()">Place Order</button>
        </form>
    </div>

    <script>
        function confirmCheckout() {
            if (confirm("Are you sure you want to place this order?")) {
                // If confirmed, delete the cart items and redirect to the order page
                window.location.href = "{{ route('order.place') }}";
            } else {
                // If canceled, stay on the checkout page
                return false;
            }
        }
    </script>
</body>
</html>