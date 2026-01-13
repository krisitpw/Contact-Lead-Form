# Contact-Lead-Form
Contact Lead form HTML CSS and email lead data in PHP
📩 Contact Lead Form (HTML, CSS & PHP)

A simple and secure Contact / Lead Generation Form built using HTML, CSS, and PHP.
This project collects user leads and sends the data directly to your email inbox using PHP mail functionality.

🚀 Features

Responsive Contact / Lead Form

Clean UI using HTML & CSS

Server-side form handling with PHP

Email notification on form submission

Basic input validation

Easy to customize and integrate into any website

Lightweight & beginner-friendly

🛠️ Technologies Used

HTML5 – Form structure

CSS3 – Styling & responsiveness

PHP – Backend processing & email sending

📂 Project Structure
contact-lead-form/
│
├── index.html        # Contact form UI
├── style.css         # Form styling
├── send-mail.php     # PHP email handler
└── README.md         # Project documentation

🧾 Form Fields Example

Name

Email

Phone Number

Message

You can easily add or remove fields as per your requirement.

⚙️ Setup Instructions
1️⃣ Clone the Repository
git clone https://github.com/your-username/contact-lead-form.git

2️⃣ Upload to Server

Upload the project files to a PHP-supported server (Apache / Nginx).

⚠️ PHP mail function will not work on localhost unless SMTP is configured.

✉️ Configure Email (Important)

Open send-mail.php and update the following:

$to = "your-email@example.com"; // Your email address


Optional (recommended):

Set From email

Add Reply-To header

🧪 How It Works

User fills the contact form

Data is sent via POST method

PHP script validates inputs

Email is sent to admin email

Success or error message displayed

🔐 Security Tips

Sanitize inputs using htmlspecialchars() and filter_input()

Add CAPTCHA for spam protection

Use SMTP (PHPMailer) instead of mail() for production

Validate email format before sending

📸 Screenshot (Optional)

Add a screenshot of your form here:

<img width="1065" height="669" alt="image" src="https://github.com/user-attachments/assets/08278cd6-eb05-4232-af89-dfd69bf325d2" />
(screenshot.png)

🧩 Future Enhancements

Database storage (MySQL)

Admin dashboard for leads

AJAX submission (no page reload)

PHPMailer / SMTP integration

Google reCAPTCHA

🤝 Contributing

Contributions are welcome!
Feel free to fork this repository and submit a pull request.

📄 License

This project is open-source and available under the MIT License.

👨‍💻 Author

Krishna Singh
Freelance Web Designer & Developer
🚀 Passionate about building web solutions
