<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Booking Card</title>
  <link rel="stylesheet" href="book.css"/>
</head>
<body>
<div class="container">
  <div class="booking-card">
    <form id="bookingForm" method="POST" action="submit.php">
      <h2>Book Your Event</h2>

      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="date">Event Date</label>
        <input type="date" id="date" name="date" required>
      </div>

      <div class="form-group">
        <label for="time">Event Time</label>
        <input type="time" id="time" name="time" required>
      </div>

      <div class="form-group">
        <label for="guests">Number of Guests</label>
        <input type="number" id="guests" name="number" required>
      </div>

      <div class="form-group">
        <label for="service_type">Service Type</label>
        <select id="service_type" name="service_type" required>
          <option value="">Select</option>
          <option value="Wedding">Wedding</option>
          <option value="Reception">Reception</option>
          <option value="Haldi">Haldi</option>
          <option value="Mehndi">Mehndi</option>
        </select>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="location" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label for="message">Special Message</label>
        <textarea id="message" name="massage" rows="3"></textarea>
      </div>

      <button type="submit">Book Now</button>
    </form>
  </div>
</div>
</body>
</html>