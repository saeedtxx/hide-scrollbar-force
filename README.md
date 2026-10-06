# Hide Scrollbar Force 🎯

> Lightweight WordPress utility to completely hide browser scrollbars while retaining full page scrolling and interaction.

[![WordPress Tested](https://img.shields.io/badge/WordPress-Directory-blue.svg)](https://wordpress.org/plugins/hide-scrollbar-force/)
[![License: GPL v2+](https://img.shields.io/badge/License-GPLv2+-green.svg)](https://www.gnu.org/licenses/gpl-2.0.html)

---

## 🚀 Overview

**Hide Scrollbar Force** removes the default browser scrollbars (vertical and horizontal) across all modern browsers without disrupting user experience or blocking scroll functionality.

Ideal for landing pages, web applications, fullscreen presentations, and clean minimalist layouts where native scrollbars degrade the visual aesthetic.

## ✨ Key Features

- **⚡ Zero Performance Impact:** Pure, ultra-lightweight CSS implementation with no bloated JavaScript scripts.
- **🌐 Full Cross-Browser Support:** Handles WebKit (Chrome, Safari, Edge, Opera) via `::-webkit-scrollbar` and Firefox via `scrollbar-width: none`.
- **🖱️ Smooth Uninterrupted Scrolling:** Preserves all native scroll behaviors (mouse wheel, touch swipe, keyboard navigation, and trackpad gestures).
- **🛡️ Clean Architecture:** Hooks directly into WordPress frontend styles without modifying theme core files or altering layout geometry.

## 🛠️ How It Works

The plugin injects optimized CSS rules into the document head:

```css
html, body {
  -ms-overflow-style: none; /* IE and Edge */
  scrollbar-width: none; /* Firefox */
}

html::-webkit-scrollbar,
body::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera */
}
```
📦 Installation
From WordPress Dashboard:
Go to Plugins > Add New.

Search for Hide Scrollbar Force.

Click Install Now and Activate.

Via Git:
```Bash
git clone [https://github.com/saeedtx/hide-scrollbar-force.git](https://github.com/saeedtx/hide-scrollbar-force.git) wp-content/plugins/hide-scrollbar-force
```
👤 Author
Saeed Tosifyan

Website: medseo.ir

LinkedIn: linkedin.com/in/saeedtx

WordPress Profile: @saeedtx

📄 License
This plugin is free software licensed under the GNU General Public License v2.0 or later.
