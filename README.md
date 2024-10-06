# RaiseSeed🌱 - A Simple Crowdfunding Website🌍
A simple web-based crowdfunding platform that allows users to create campaigns, donate to campaigns, and track fundraising progress. Built using PHP, MySQL, HTML, and CSS.

## 🌱Features

 - User Registration and Authentication: Users can sign up and log in to support their favorite campaigns.
 - Campaign Creation: Users can create new campaigns specifying the goal, location, target amount, and description.
 - Donation Support: Registered users can donate to any campaign.
 - Progress Tracking: Campaigns display the target amount and the amount raised so far with a progress bar.
 - User Dashboard: Users can view their personal details, the campaigns they have supported, and the amounts they have donated.
   
## 🌱Project Structure

![Screenshot 2024-09-23 230359](https://github.com/user-attachments/assets/c93e6613-7aeb-40e8-9580-26ca6c6bc8f1)

## 🌱Table Structure
🍀users Table:

![Screenshot 2024-09-23 230035](https://github.com/user-attachments/assets/1bb69aed-0eae-40e6-a416-090631d27734)

🍀campaigns Table:

![Screenshot 2024-09-23 230521](https://github.com/user-attachments/assets/abb833a6-6193-48da-9405-d449aed4c0b5)

🍀support Table

![Screenshot 2024-09-23 230621](https://github.com/user-attachments/assets/afb47484-ee3f-4210-a6a9-5f96426b42ae)

## 🌱Getting Started
### Prerequisites
- PHP: Ensure you have PHP installed on your system.
- MySQL: You need a MySQL server to manage your database.
- XAMPP/WAMP/LAMP: Alternatively, use a local server environment like XAMPP to run PHP and MySQL.
## 🌱Installation
Clone the repository:

git clone https://github.com/sayantichy/RaiseSeed.git
cd crowdfunding-platform
## 🌱Database Setup:

- Create a MySQL database and import the SQL scripts in the sql/ folder to set up the necessary tables.
- Upload the raiseseed folder in xampp/htdocs
- Update the config.php file with your MySQL database credentials.
- Run the Application:

- Start your local server (XAMPP, WAMP, etc.).
- Navigate to http://localhost/crowdfunding-platform/ in your web browser.
## 🌱Usage
- Sign up: Create an account by signing up on the platform.
- Browse Campaigns: Explore available campaigns on the homepage.
- Donate: Click the "Support this Campaign" button, enter the amount you wish to donate, and confirm.
- Track Progress: Check the progress bar and percentage to see how close the campaign is to its goal.

![Screenshot 2024-09-23 231028](https://github.com/user-attachments/assets/d96ff7f9-05f3-433d-9f59-04bccf5364b2)
![Screenshot 2024-09-23 231121](https://github.com/user-attachments/assets/d207974c-bf68-4847-9c9c-6b5b16165b52)
![Screenshot 2024-09-23 231209](https://github.com/user-attachments/assets/5dcc6cd4-801c-4388-97ca-84e80affb74e)
![Screenshot 2024-09-23 231404](https://github.com/user-attachments/assets/9adfc0e0-e2ea-41fb-8990-4fa311e6f5d2)

## 🌱Demo:

## 🌱Future Enhancements
- Admin Dashboard: Add admin features for managing users and campaigns.
- Search Functionality: Add a search bar to find specific campaigns by keyword.
- Payment Gateway Integration: Integrate a payment gateway for real transactions.
- Campaign Updates: Allow campaign owners to post updates for their supporters.

## 🌱Contribution Guidelines
Feel free to fork this repository and contribute by submitting a pull request. Ensure your code follows standard PHP coding guidelines and includes relevant comments.

## 🌱License
This project is licensed under the MIT License. See the LICENSE file for details.
