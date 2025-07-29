# 💖 Crush & Drink Preference Form – LAMP Project
cat << 'EOF' > README.md
# 💘 Crush Form – PHP + MySQL Web App

A **simple PHP + MySQL web form** where users can submit:
- Their **name**
- Their **crush's name**
- A selection from a list of **drinks/smokes**

All submitted data is stored in a **MySQL (MariaDB)** database.

---

## 📦 Tech Stack

- **L**inux – Amazon Linux 2 / CentOS  
- **A**pache – httpd Web Server  
- **M**ySQL – MariaDB 10.5  
- **P**HP – Version 7+

---

## 📁 Project Structure

\`\`\`bash
/var/www/html/
├── index.php            # Main form page
├── process.php          # Handles form submission
├── db_config.php        # Database connection file
└── styles.css           # Optional styling
\`\`\`

---

## 🔐 File & Folder Permissions

Ensure Apache can read and serve your files correctly:

\`\`\`bash
sudo chown -R apache:apache /var/www/html
sudo chmod -R 755 /var/www/html
\`\`\`

---

## 🧪 Troubleshooting

### 🔸 MySQL Error: \`Access denied for user 'root'@'localhost'\`

If you're facing access issues with MySQL, reset the root user password:

\`\`\`sql
ALTER USER 'root'@'localhost' IDENTIFIED BY '';
FLUSH PRIVILEGES;
\`\`\`

---

## 🙌 Author

**Shivam Garud**  
Certified DevOps & Python Developer  
Built with ❤️ using the **LAMP stack** on **Amazon EC2/Linux**
EOF
