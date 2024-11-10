#### Homepage

1. **`index.html` (Main Layout):**

   - **Head:** Sets encoding, viewport, title, stylesheets (Bootstrap, Font Awesome, Google Fonts).
   - **Body:** Loads `header.php`, `main.php`, `reviews.php`, `contact.php`, `footer.php`.

2. **`header.php` (Header Navigation):**

   - **Navbar:** Responsive Bootstrap navbar with "Handy-Crew" brand link, mobile menu, and links ("Home," "About Us," etc.).

3. **`main.php` (Main Content):**

   - **Sections:** Banner with login/sign-up, "About Us" in jumbotron, "Services" with icons.

4. **`reviews.php` (Customer Reviews):**

   - Four testimonials in a grid layout.

5. **`contact.php` (Contact Section):**

   - Contact info and PHP form with validation.

6. **`dbConnection.php`:**

   - Sets MySQL connection and handles errors.

7. **`logout.php`:**
   - Destroys session and redirects to homepage.

---

#### Requester Interface

1. **Header Navigation:**

   - Top and sidebar navigation with PHP-based active page highlighting.

2. **`footer.php`:**

   - jQuery, Popper, Bootstrap, Font Awesome for frontend functionality.

3. **`RequesterLogin.php`:**

   - Session management with login validation.

4. **`RequesterProfile.php`:**

   - Displays and updates user details.

5. **`RequesterSignup.php`:**

   - Validates fields, checks for duplicate emails, and inserts new users.

6. **`Requesterchangepass.php`:**

   - Password change form with validation.

7. **`SubmitRequest.php`:**

   - Service request submission with data validation.

8. **`CheckStatus.php`:**
   - Request status lookup by ID, with print option.

---

#### Admin Interface

1. **`login.php` (Admin Login):**

   - Authenticates admin, redirects to dashboard upon success.

2. **`dashboard.php`:**

   - Overview of requests, work orders, technicians.

3. **Work Orders (`work.php`):**

   - View/filter work orders, assign technicians.

4. **Requests (`request.php`):**

   - Approve, reject, assign requests.

5. **Assets (`assets.php`):**

   - Add/edit/delete assets; track availability.

6. **Technician Management (`technician.php`):**

   - View/edit technician profiles, assign tasks.

7. **Requesters Management (`requester.php`):**

   - Manage requester profiles and service history.

8. **Sales & Work Reports (`soldproductreport.php`, `workreport.php`):**

   - View/export reports on sales and work orders.

9. **`changepass.php`:**

   - Allows admin password update.

10. **`logout.php`:**
    - Logs out admin, redirects to login.

---

#### Admin Product Sale & Reports

1. **Product Sale Form:**

   - Records sales, updates inventory, handles stock availability.

2. **Sales Report:**
   - Date-filtered sales data, with print option.

---

#### Technician & Work Order Management

1. **Technician List:**

   - View/add/edit/delete technicians; link to technician profile.

2. **Work Order Assignment:**
   - Assign work orders to technicians, print work order details.

---

#### Custom CSS

1. **Brand Font:** `'Ubuntu'`, bold, 2em.
2. **Nav Links:** White, hover color #F0AAB1.
3. **Header Image:** Full-cover, centered.
4. **Link Styling:** Default black, hover #f26571.
5. **Active Link:** White text, red background.
6. **Footer Icons:** Red, hover pink (#E994A2).
7. **Floating Button:** Bottom-right for easy access.
8. **Responsive Adjustments:** `@media` styling for mobile.
