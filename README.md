## Homepage Overview

1. **HTML Structure**

   - **File:** `index.html` (or main layout)
   - **Purpose:** Defines the homepage structure for the Handy-Crew app.
   - **Components:**
     - **Head Section:** Sets encoding, viewport, title ("Handy-Crew"), and links stylesheets (Bootstrap, Font Awesome, Google Fonts, custom styles).
     - **Body Section:** Includes modular PHP files: `header.php`, `main.php`, `reviews.php`, `contact.php`, and `footer.php`.

2. **Header Navigation (`header.php`)**

   - **Purpose:** Navigation menu for easy site access.
   - **Components:**
     - **Navbar:** Responsive with Bootstrap, includes "Handy-Crew" brand link, and mobile menu toggle.
     - **Nav Links:** Includes "Home," "About Us," "Registration," "Login," and "Contact," styled with custom classes.

3. **Main Content (`main.php`)**

   - **Sections:**
     - **Welcome:** Full-screen banner with login and sign-up buttons.
     - **About Us:** Company description in a styled jumbotron.
     - **Services:** Core services highlighted with icons (Appliances, Maintenance, Fault Repair).

4. **Customer Reviews (`reviews.php`)**

   - **Layout:** Grid of four customer testimonials with profile images and reviews.

5. **Contact Section (`contact.php`)**

   - **Details:** Office and branch contact info.
   - **Form:** PHP form with validation for empty fields and email format.

6. **Database Connection (`dbConnection.php`)**

   - **Purpose:** Defines MySQL connection settings and handles connection errors.

7. **Logout Script (`logout.php`)**
   - **Functionality:** Destroys session and redirects to `index.php`.

## Requester Interface Overview

1. **Header Navigation (`header.php`)**

   - **Top Navbar:** Displays app name and links to profile pages.
   - **Sidebar Navigation:** Links to key pages (Profile, Submit Request, Service Status, Change Password, Logout). Active page highlighted with PHP logic.

2. **JavaScript and Bootstrap Includes (`footer.php`)**

   - Includes necessary libraries (jQuery, Popper.js, Bootstrap, Font Awesome) for frontend functionality.

3. **Requester Login (`RequesterLogin.php`)**

   - **Session & Login:** Validates user credentials; if successful, redirects to `RequesterProfile.php`.
   - **Error Handling:** Displays alerts for invalid credentials.

4. **Requester Profile (`RequesterProfile.php`)**

   - **Session Check:** Verifies login status.
   - **Profile Display:** Fetches and shows user details (name, email).
   - **Profile Update:** Allows name updates, validates inputs, and shows success/error messages.

5. **Requester Signup (`RequesterSignup.php`)**

   - **Account Creation:** Validates fields, checks for existing email, and inserts new user data into the database.
   - **Messages:** Displays success/error messages based on registration outcome.

6. **Requester Change Password (`Requesterchangepass.php`)**

   - **Password Update:** Allows password change with validation.
   - **Messages:** Displays success/error based on update status.

7. **Submit Request (`SubmitRequest.php`)**

   - **Request Form:** User submits service request with relevant details.
   - **Validation:** Ensures all fields are filled before submission.
   - **Data Insertion:** Saves data to `submitrequest_tb` table.
   - **Messages & Redirection:** Displays success/error messages and redirects to `submitrequestsuccess.php` upon success.

8. **Check Request Status (`CheckStatus.php`)**
   - **Status Form:** Allows user to search request status by Request ID.
   - **Database Query:** Retrieves and shows request status, technician details, etc.
   - **Pending Message:** Displays if request is still pending.
   - **Print Option:** Provides a print option for request details.

## Admim Inerface

1. **Admin Login (login.php)**:

   - Admin can log in using email and password.
   - Authenticates against the `adminlogin_tb` database.
   - On successful login, redirects to the dashboard; otherwise, an error message is displayed.

2. **Admin Dashboard (dashboard.php)**:

   - Central hub for managing all sections (e.g., work orders, requests, etc.).
   - Provides a summary of key metrics and quick links to other sections.

3. **Work Orders Management (work.php)**:

   - Admin can view, filter, and search for work orders.
   - Allows the assignment or status update of work orders.

4. **Requests Management (request.php)**:

   - Handles incoming service requests.
   - Admin can approve, reject, or assign requests and view detailed request information.

5. **Assets Management (assets.php)**:

   - Allows admins to manage asset records, such as adding, editing, and deleting assets.
   - Tracks asset availability and usage.

6. **Technician Management (technician.php)**:

   - Admin can view technician profiles, assign tasks, and update technician availability.

7. **Requester Management (requester.php)**:

   - View and manage requester profiles.
   - Admin can update requesters' details and service history.

8. **Sell Report (soldproductreport.php)**:

   - View and filter sales reports.
   - Generate and export reports related to sales data.

9. **Work Report (workreport.php)**:

   - Provides work order completion status and efficiency reports.
   - Tracks progress and service completion.

10. **Change Password (changepass.php)**:

    - Admin can change their password by providing the old password and new password.
    - Validates and updates the password in the database.

11. **Logout (logout.php)**:
    - Logs out the admin and redirects to the login page.

### Admin Interface (Continued)

12. **JavaScript and Bootstrap Integration**:

- **Purpose:** Adds interactivity and functionality to the admin interface.
- **Key Features:**
  - **jQuery:** DOM manipulation and AJAX.
  - **Popper.js:** Manages popups and tooltips.
  - **Bootstrap.js:** Responsive design and UI components.
  - **Font Awesome:** Icon sets for UI elements.
  - **Custom JS:** Custom scripts for events, validation, and dynamic content.

13. **Dashboard Overview**:

- **Purpose:** Displays key system statistics for admin insights.
- **Key Features:**
  - **Requester Statistics:** Max `request_id` from `submitrequest_tb` for total requests.
  - **Assigned Work Statistics:** Max `request_id` from `assignwork_tb` for total work orders assigned.
  - **Technician Count:** Total technicians from `technician_tb`.

14. **Cards Overview**:

- Displays three color-coded cards:
  1.  **Requests Received:** Total requests with "View" button linking to request management.
  2.  **Assigned Work:** Total assigned work with link to the assigned work page.
  3.  **Technician Count:** Number of technicians with link to technician management.
- **Styling:** Red for requests, green for work, blue for technicians.

15. **Requesters List Table**:

- **Purpose:** Lists requesters with their ID, Name, and Email.
- **Key Features:**
  - Fetches and displays requesters from `requesterlogin_tb`.
  - Shows requester ID, name, and email in a table.
  - Displays "0 Result" if no requesters are found.

16. **Change Password Feature**:

- **Purpose:** Allows the admin to update their password.
- **Key Features:**
  - **Email Field:** Displays admin's email (read-only).
  - **New Password Field:** Input for new password.
  - **Update Button:** Submits the new password.
  - **Reset Button:** Clears the form.

17. **Form Validation & Feedback**:

- **Validation:** Ensures the new password field is not empty. If empty, displays "Fill All Fields".
- **Password Update Process:** Updates password in `adminlogin_tb`.
  - **Success Message:** "Updated Successfully".
  - **Failure Message:** "Unable to Update".

---

18. **Add New Product Feature**:

- **Purpose:** Allows the admin to add new products to the asset inventory.
- **Key Features:**
  - **Product Name Field:** Input for product name.
  - **Date of Purchase:** Date picker for purchase date.
  - **Available Stock:** Field for available units.
  - **Total Stock:** Field for total units.
  - **Original Cost:** Input for cost per unit.
  - **Selling Cost:** Input for selling price per unit.

19. **Form Submission & Validation**:

- **Validation:** Ensures all fields are filled. If empty, displays "Fill All Fields".
- **Insertion into Database:** Inserts data into `assets_tb`.
  - **Success Message:** "Added Successfully".
  - **Failure Message:** "Unable to Add".

20. **Number Validation for Specific Fields**:

- Fields like `Available`, `Total`, `Original Cost`, and `Selling Cost` only accept numeric values, with JavaScript preventing non-numeric input.

21. **Asset Overview**:

- **Purpose:** Displays a list of products/parts in inventory.
- **Key Features:**
  - **Product Details:** Displays ID, Name, DOP, Available Stock, Total Stock, Original Cost, Selling Price.
  - **Actions:**
    - **Edit Product:** Links to `editproduct.php`.
    - **Delete Product:** Removes product from the database.
    - **Issue Product:** Links to `sellproduct.php` for sales/issuance.

22. **Table Display**:

- Renders table of product details if products exist in `assets_tb`.
- Displays "0 Result" if no products are found.

23. **Product Deletion**:

- Deletes product from `assets_tb` upon clicking "Delete".
- Refreshes page to reflect updated list after deletion.

24. **Navigation to Add New Product**:

- A floating action button (`+`) links to `addproduct.php` to add new products.

---

25. **Work Order Assignment Form**:

- **Purpose:** Assigns a technician to a work order request.
- **Key Features:**
  - **Form Fields:** Displays Request ID, Request Info, Description, Requester Details (Name, Address, Email, Mobile), Assign Technician, and Date.

26. **Form Submission and Validation**:

- **Validation:** Ensures all fields are filled. Displays a warning if any field is missing.
- **Data Insertion:** If valid, inserts data into `assignwork_tb`.
- **Feedback:** Displays success or failure message.

27. **Navigation**:

- Admin views success/failure message after form submission.

28. **Number Validation**:

- Ensures fields like zip code and mobile accept only numbers using `isInputNumber()`.

---

29. **Technician Update Form**:

- **Purpose:** Updates technician details.
- **Key Features:**
  - **Form Fields:** Displays Emp ID (read-only), Name, City, Mobile (with validation), Email.
  - **Actions:**
    - **Update Button:** Updates technician details.
    - **Close Button:** Closes the form and redirects to technician management page.

30. **Form Submission and Validation**:

- **Validation:** Ensures all fields are filled. Displays warning if any field is missing.
- **Data Update:** Updates technician details in `technician_tb`.
- **Feedback:** Displays success or failure message.

31. **Number Validation**:

- Ensures only numeric input for fields like mobile numbers using `isInputNumber()`.

32. **Product Update Form**:

- **Purpose:** Updates details of an existing product.
- **Key Features:**
  - **Form Fields:** Product ID (read-only), Product Name, DOP, Available, Total, Original Cost, Selling Price (all with number validation).
  - **Actions:**
    - **Update Button:** Updates product details.
    - **Close Button:** Closes the form and redirects to the product management page.

33. **Form Submission and Validation**:

- **Validation:** Ensures all fields are filled. Displays warning if any field is missing.
- **Data Update:** Updates the product details in the `assets_tb` table.
- **Feedback:** Displays success or failure message.

34. **Number Validation**:

- Ensures only numeric characters for available quantity, total quantity, original cost, and selling price.

---

35. **Technician Add Form**:

- **Purpose:** Adds a new technician to the system.
- **Key Features:**
  - **Form Fields:** Name, City, Mobile (with validation), Email.
  - **Actions:**
    - **Submit Button:** Adds technician to the database.
    - **Close Button:** Closes the form and redirects to the technician management page.

36. **Form Submission and Validation**:

- **Validation:** Ensures all fields are filled. Displays warning if any field is missing.
- **Data Insertion:** Inserts new technician details into the `technician_tb` table.
- **Feedback:** Displays success or failure message.

37. **Number Validation**:

- Ensures only numeric characters are accepted for mobile number using `isInputNumber()`.

---

38. **Requester Add Form**:

- **Purpose:** Adds a new requester to the system.
- **Key Features:**
  - **Form Fields:** Name, Email, Password.
  - **Actions:**
    - **Submit Button:** Adds requester to the database.
    - **Close Button:** Closes the form and redirects to the requester management page.

39. **Form Submission and Validation**:

- **Validation:** Ensures all fields are filled. Displays warning if any field is missing.
- **Data Insertion:** Inserts new requester details into the `requesterlogin_tb` table.
- **Feedback:** Displays success or failure message.

---

40. **Success Page (Customer Bill)**:

- **Purpose:** Displays customer bill after transaction.
- **Key Features:**
  - Displays customer info (ID, Name, Address, Product Name, Quantity, Price, Total, Date).
  - **Print Option:** Allows admin to print the bill.
  - **Close Option:** Closes the page and returns to `assets.php`.

41. **Data Retrieval:**

- Uses session ID to fetch customer details from `customer_tb`.

42. **Error Handling:**

- Displays "Failed" if no customer record is found.

43. **Security:**

- **Admin Login Check:** Ensures only logged-in admins can access.

---

45. **Requests Page**:

- **Purpose:** Displays list of requests for admin to view or close.
- **Key Features:**
  - Lists Request ID, Info, Description, Date.
  - **Actions:**
    - **View:** View request details.
    - **Close:** Deletes request after addressing.

46. **Data Retrieval:**

- Uses SQL query to fetch requests from `submitrequest_tb`.

47. **Actions:**

- **View:** Redirects to view request details.
- **Close:** Deletes request from `submitrequest_tb` and refreshes page.

48. **Security:**

- **Admin Login Check:** Ensures only logged-in admins can access.

49. **Refresh After Deletion:**

- Page refreshes after request deletion.

---

51. **Requesters Management Page**:

- **Purpose:** Allows admin to manage requesters.
- **Key Features:**
  - Lists Requester ID, Name, Email.
  - **Actions:**
    - **View/Edit:** Redirects to `editreq.php`.
    - **Delete:** Deletes requester from `requesterlogin_tb`.
  - **Add New Requester Button:** Redirects to `insertreq.php`.

52. **Data Retrieval:**

- Fetches requesters from `requesterlogin_tb` table.

53. **Actions:**

- **Delete:** Deletes requester and refreshes page.
- **View/Edit:** Redirects to `editreq.php`.

54. **Security:**

- **Admin Login Check:** Ensures only logged-in admins can access.

55. **Page Refresh After Deletion:**

- Page refreshes after deleting requester.

---

### Admin Product Sale Page

**Purpose:** Enables the admin to sell products, record transaction details, and update stock.

**Features:**

- **Product & Customer Info Form:** Includes fields for Product ID, Customer Name, Address, Product Name, Available Quantity, Quantity Sold, Price, Total Price, and Sale Date.
- **Buttons:** Submit (to process sale) and Close (to return to `assets.php`).

**Sale Handling:**

- Validates form fields, inserts transaction into `customer_tb`, updates stock in `assets_tb`, and redirects to `productsellsuccess.php`.

**JavaScript Validation:** Ensures numeric input for quantity and price.

**Security:** Admin login check to restrict access.

**Error Handling:** Alerts if fields are missing.

---

### Admin Product Sales Report Page

**Purpose:** Allows admin to view and generate sales reports for a specified date range.

**Features:**

- **Date Range Filter:** Select start and end dates to filter records.
- **Sales Data Display:** Shows Customer ID, Name, Address, Product, Quantity Sold, Price, Total Cost, and Sale Date.
- **Print Button:** Allows admin to print the report.

**Search Functionality:** Filters records using a `BETWEEN` query.

**Error Handling:** Displays "No Records Found!" if no matching data.

**Security:** Admin login check to restrict access.

**JavaScript:** Print functionality via `window.print()`.

### Admin Technician Management Page

**Purpose:** Allows the admin to view, manage, and delete technician records.

**Features:**

- **Technician List:** Displays a table of technicians from `technician_tb` with columns for Emp ID, Name, City, Mobile, Email, and Actions (View/Edit/Delete).
- **Actions:**
  - **View:** Redirects to `editemp.php` to view/edit technician details.
  - **Delete:** Deletes technician from the database and refreshes the page.
- **Add Technician:** A plus icon button redirects to `insertemp.php` to add a new technician.

**Security:** Admin login check.

---

### Admin Work Order Management Page

**Purpose:** Allows the admin to view detailed work order information assigned to a technician.

**Features:**

- **View Work Order Details:** Displays request info, requester details, assigned technician, and signatures (currently empty).
- **Print Option:** A button to print the work order details.
- **Close Button:** Returns to the work order list.

**Security:** Admin login check.

---

### Admin Work Orders Management Page

**Purpose:** Lists all work orders assigned to technicians for admin review and management.

**Features:**

- **Work Orders List:** Displays work orders from `assignwork_tb` with columns for Request ID, Request Info, Requester Name, Assigned Technician, and Assigned Date. Actions include View and Delete.
- **Delete Functionality:** Removes work orders from the database.

**Security:** Admin login check.

---

### Admin Work Report Page

**Purpose:** Generates a report of work orders assigned within a selected date range.

**Features:**

- **Date Range Selection:** Admin selects a start and end date, and clicks "Search" to filter work orders.
- **Work Order Details:** Displays filtered work orders in a table.
- **Print Option:** Button to print the report.

**Security:** Admin login check.

**No Results:** Alerts if no records match the date range.

### Custom CSS Overview

1. **Brand Font:**

   - Navbar brand uses `'Ubuntu', sans-serif`, with `2em` font size and bold weight for prominence.

2. **Navigation Links:**

   - Default color: white.
   - On hover: text changes to #F0AAB1 (soft pink).

3. **Header Image:**

   - Full-cover, centered, non-repeating background.
   - Minimum height: 90vh.
   - 74px top margin for proper alignment.

4. **Sub-Title:**

   - `.font-italic` applies 24px font size and italics.

5. **Anchor Links:**

   - Default color: black.
   - On hover: color changes to #f26571 (soft pink).

6. **Active Link:**

   - `.active` sets text to white with a red (#DC3545) background.

7. **Footer Icons:**

   - Default color: #DC3545 (red).
   - On hover: lighter pink (#E994A2).

8. **Floating Plus Button:**

   - Positioned fixed at the bottom-right (10px from the bottom, 20px from the right).

9. **Main Heading Margin:**

   - `.mainHeading` applies a 50px top margin.

10. **Mobile View Adjustment (Max 600px):**
    - `.myclass` adjusts top margin to 350px and centers text for better mobile readability.
