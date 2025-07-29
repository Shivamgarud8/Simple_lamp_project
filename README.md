# 💖 Crush & Drink Preference Form – LAMP Project

A simple PHP + MySQL web form where users can submit their name, their crush's name, and select from a list of drinks/smokes. All data is stored in a MySQL (MariaDB) database.

---

## 📦 Tech Stack

- **L**inux (Amazon Linux 2 / CentOS)
- **A**pache (httpd)
- **M**ySQL (MariaDB 10.5)
- **P**HP 7+

---

## 📁 Project Structure
<br>
📜 4. File & Folder Permissions
Make sure Apache can read the files:
sudo chown -R apache:apache /var/www/html
sudo chmod -R 755 /var/www/html


<br>
🧪 Troubleshooting
🔸 MySQL Error: Access denied for user 'root'@'localhost'
Run this inside MySQL:
in sql 
ALTER USER 'root'@'localhost' IDENTIFIED BY '';
FLUSH PRIVILEGES;
<br>
🙌 Author
Shivam Garud
Certified DevOps & Python Developer
Built with ❤️ using LAMP on EC2/Linux

