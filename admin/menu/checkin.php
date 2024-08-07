<?php
include "sidebar.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Check-In</title>
    <link rel="stylesheet" href="../css/checkin.css">
</head>

<body>
    <div class="container">
        <form id="checkin-form">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Last Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="dateofbirth">Date Of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" rows="4"></textarea>
            </div>
        </form>
    </div>

    <section>
        <form id="checkin-form">
            <div class="form-group">
                <label for="checkin-date">Check-In Date</label>
                <input type="date" id="checkin-date" name="checkin-date" required>
            </div>
            <div class="form-group">
                <label for="room-type">Room Type</label>
                <select id="room-type" name="room-type" required>
                    <option value="">Select Room Type</option>
                    <option value="single">Single</option>
                    <option value="double">Double</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label for="comments">Special Requests</label>
                <textarea id="comments" name="comments" rows="4"></textarea>
            </div>
        </form>
    </section>
    <button type="submit">Check In</button>
</body>

</html>