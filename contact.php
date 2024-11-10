<section id="Contact" class="container">
    <h2 class="text-center mb-4">Contact Us</h2>
    <div class="row">

        <!-- Contact Information Column -->
        <div class="col-md-4 text-center pd-100">
            <br>
            <h5><strong>Headquarter</strong></h5>
            <p>
                123, Sector 4, Kolkata <br>
                West Bengal - 700064 <br>
                Phone: +91 9876543210 <br>
            </p>

            <hr>

            <h5><strong>Delhi Branch</strong></h5>
            <p>
                456, Ashok Vihar, <br>
                New Delhi - 110052 <br>
                Phone: +91 8123456789 <br>
            </p>
        </div>

        <!-- Contact Form Column -->
        <div class="col-md-8">
            <form action="" method="POST">
                <!-- Name Field -->
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>

                <!-- Subject Field -->
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <!-- Message Field -->
                <div class="form-group">
                    <textarea class="form-control" name="message" placeholder="How can we help you?" rows="5" required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                <br><br>

                <?php
                if (isset($_REQUEST['submit'])) {
                    // Checking for Empty Fields
                    if (empty($_REQUEST['name']) || empty($_REQUEST['subject']) || empty($_REQUEST['email']) || empty($_REQUEST['message'])) {
                        // Message displayed if any required field is missing
                        $msg = '<div class="alert alert-warning" role="alert">Please fill in all fields.</div>';
                    } else {
                        // Collecting form data
                        $name = htmlspecialchars($_REQUEST['name']);
                        $subject = htmlspecialchars($_REQUEST['subject']);
                        $email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
                        $message = htmlspecialchars($_REQUEST['message']);

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            $msg = '<div class="alert alert-danger" role="alert">Please enter a valid email address.</div>';
                        } else {
                            // Prepare the email
                            $mailTo = "contact@geekyshows.com";
                            $headers = "From: " . $email;
                            $txt = "You have received a message from " . $name . ".\n\n" . $message;
                            if (mail($mailTo, $subject, $txt, $headers)) {
                                $msg = '<div class="alert alert-success" role="alert">Message sent successfully!</div>';
                            } else {
                                $msg = '<div class="alert alert-danger" role="alert">Something went wrong, please try again later.</div>';
                            }
                        }
                    }
                    echo $msg;
                }
                ?>
            </form>
        </div>
    </div>
</section>