# 0xjaspreet — Cybersecurity Portfolio

A high-performance, single-page portfolio for **Jaspreet Singh**, an offensive security practitioner. Built with a minimalist "Terminal Green" aesthetic using vanilla HTML, CSS, and JavaScript.

🌐 **Live Site**: [https://jaspreetsec.com](https://jaspreetsec.com)

## ⚡ The Aesthetic

The site utilizes a **Hacker Terminal** theme:
- **Primary Color**: `#00ff41` (Matrix/Terminal Green)
- **Background**: `#0a0a0a` (Deep Black)
- **Typography**: Monospace stack for a technical, code-editor feel
- **Interactions**: Functional terminal typing effects and chromatic aberration (glitch) on hover

## ✨ Key Features

- 🎯 **Single-Page Architecture**: High-speed, anchor-based navigation.
- 📟 **Terminal UI**: Integrated typing animations and command-line prompts (`>`) in the header.
- 🤖 **Agentic AI Focus**: Showcases development of voice-controlled security assistants (Fakir).
- 🏗️ **Infrastructure-Centric**: Highlights distributed VPS management (Cortex, Sanctum, Goliath).
- ⚡ **Zero Dependencies**: No frameworks. Pure vanilla code for a minimal attack surface and instant load times.
- ♿ **Accessibility**: Semantic HTML and ARIA-compliant structure.

## 🛠️ Tech Stack

- **HTML5**: Semantic markup for SEO and screen readers.
- **CSS3**: Custom properties (Variables), Flexbox, and Keyframe animations.
- **JavaScript (ES6+)**: Custom typing engine and IntersectionObserver for scroll-triggered events.
- **GitHub Pages**: Automated CI/CD deployment.

## 📁 File Structure
.
├── index.html         # Main structure & content
├── styles.css         # Terminal Green styling
├── script.js          # Typing effects & smooth scrolling
├── favicon.jpg        # Custom 0x security icon
├── CNAME              # jaspreetsec.com domain config
└── README.md          # This file

## 🚀 Deployment & Workflow

This project uses **GitHub Actions** for automatic deployment:
1. **Push** to the `main` branch.
2. **Build**: GitHub Actions validates the static assets.
3. **Deploy**: The site is pushed live to `https://jaspreetsec.com` via GitHub Pages.

## 🎯 Content Sections

1. **Header**: Name and title with a terminal typing animation.
2. **About**: Career pivot narrative and involvement with the **DC204** security community.
3. **Technical Proficiency**: Categorized skill sets (Pentesting, Infrastructure, Agentic AI).
4. **Technical Projects**: 
   - **Multi-Node VPS**: Management of Cortex, Sanctum, and Goliath nodes.
   - **Fakir**: Voice-controlled agent built with Deepgram and Groq.
   - **Offensive Labs**: TryHackMe (0xjaspreet) and local CTF practice.
5. **Roadmap**: Professional certification path (Security+, eJPT, PNPT, OSCP).
6. **Connect**: Centralized links for GitHub, LinkedIn, X, and TryHackMe.

## 🔒 Security

This is a static site with no backend, minimizing the attack surface. For vulnerability reporting or security-related inquiries, please contact `hello@jaspreetsec.com`.

---

**Built with a systems-thinking mindset by Jaspreet Singh (0xjaspreet).**
