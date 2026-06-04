<!DOCTYPE html>
<html>
<head>
    <title>Payment System</title>
</head>
<body>

<h2>Make Payment</h2>

<form action="/public/pay.php" method="POST">
    
    <label>Amount:</label><br>
    <input type="number" name="amount" required><br><br>

    <label>Payment Method:</label><br>
    <select name="method">
        <option value="paypal">PayPal</option>
        <option value="credit_card">Credit Card</option>
        <option value="vodafone">Vodafone Cash</option>
    </select><br><br>

    <button type="submit">Pay</button>

</form>

</body>
</html>