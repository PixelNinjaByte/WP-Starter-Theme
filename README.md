# WP Starter Theme

A clean, modern, and developer-friendly WordPress starter theme.  
Designed to provide a lightweight foundation for custom WordPress theme development with proper file organization, enqueue handling, customizer support, and modular PHP structure.

---

## 🚀 Features

- Clean and minimal boilerplate
- Organized folder structure (`inc`, `assets`, `template-parts`)
- Proper script and style enqueue system
- Custom menu support
- Featured image support
- WordPress Customizer example
- Reusable `get_template_part()` structure
- SEO-friendly and lightweight
- Ideal for learning, customizing, or starting new client projects

---

## 📂 Folder Structure

wp-starter-theme/
│
├── assets/
│ ├── css/
│ ├── js/
│ └── img/
│
├── inc/
│ ├── setup.php
│ ├── enqueue.php
│ └── customizer.php
│
├── template-parts/
│ └── content.php
│
├── functions.php
├── index.php
├── header.php
├── footer.php
├── screenshot.png
└── style.css

---

## ⚙️ Installation

1. Download or clone the theme:

git clone https://github.com/PixelNinjaByte/WP-Starter-Theme


2. Place the folder inside:

/wp-content/themes/wp-starter-theme/


3. Go to your WordPress Dashboard → **Appearance → Themes**

4. Activate **WP Starter Theme**

---

## 🧩 Customization

### **Customizer**
A sample Customizer section is included:

- Homepage greeting text  
- Ready to extend for more settings

Located in:
inc/customizer.php

### **Add more scripts**
Edit:
inc/enqueue.php

### **Enable more theme features**
Edit:
inc/setup.php

---

## 💻 Development Notes

- Uses `title-tag` support (recommended by WordPress)
- Uses `post-thumbnails` for featured images
- Primary menu registered as `primary`
- JavaScript loaded in the footer for better performance

---

## 📸 Screenshot

Included a `screenshot.png` (1200×900) for WordPress to display the theme preview.

---

## 🤝 Contributing

Feel free to fork the project, add improvements, and submit pull requests.

---

## 📄 License

This project is open-source and available under the **MIT License**.

---

## 👨‍💻 Author

**Kasina Yuvaraj**  
WordPress Developer | SEO Specialist | Theme & Plugin Customizer  


