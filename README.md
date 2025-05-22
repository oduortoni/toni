# Ukumbi - A Personal Community Platform

## 🌟 Overview

Ukumbi is a Swahili word for a platform. It is a vibrant community platform where one can share their life journey, thoughts, and create meaningful conversations around topics that matter. Built with Laravel and Progressive Web App (PWA) technology, this platform combines the power of modern web capabilities with an engaging social experience.

## 🚀 Features

### Core Features
- **Personal Posts**: Share life updates, thoughts, and experiences in an engaging format
- **Fun Shorts**: Quick, amusing snippets of text that capture moments and ideas
- **Moderated Community Chats**: Topic-focused discussions in a controlled environment
- **Progressive Web App**: Install and use as a native app on any device
- **Real-time Interactions**: Instant updates and notifications for an engaging experience

### Community Features
- **Topic-based Chat Rooms**: Organized discussions around specific interests
- **Community Guidelines**: Clear rules and expectations for healthy interactions
- **Moderation Tools**: Comprehensive system to maintain community quality
- **User Profiles**: Personalized spaces for community members
- **Content Discovery**: Easy navigation through various topics and discussions

## 🛠 Technology Stack

### Backend
- **Framework**: Laravel 10.x
- **Database**: Sqlite
- **Real-time**: Laravel WebSockets
- **Authentication**: Laravel Sanctum
- **API**: RESTful API architecture

### Frontend
- **Architecture**: Progressive Web App (PWA)
- **Framework**: Vue.js 3
- **UI Components**: Tailwind CSS
- **State Management**: Pinia
- **Service Workers**: Workbox
- **Real-time Client**: Laravel Echo

## 📱 PWA Features
- Offline capability
- Push notifications
- Home screen installation
- App-like experience
- Fast loading and performance

## 🔐 Security Features
- CSRF protection
- XSS prevention
- SQL injection protection
- Rate limiting
- Input validation
- Secure session handling

## 🚦 Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js >= 16
- MySQL >= 8.0

### Installation

1. Clone the repository
```bash
git clone https://github.com/yourusername/tonispace.git
cd tonispace
```

2. Install PHP dependencies
```bash
composer install
```

3. Install JavaScript dependencies
```bash
npm install
```

4. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

5. Set up the database
```bash
php artisan migrate
php artisan db:seed
```

6. Build frontend assets
```bash
npm run build
```

7. Start the development server
```bash
php artisan serve
```

## 🤝 Contributing

While this is primarily a personal project, contributions are welcome! Please read our contributing guidelines before submitting pull requests.

## 📜 Community Guidelines

1. **Be Respectful**: Treat all community members with respect
2. **Stay On Topic**: Keep discussions relevant to the designated topics
3. **No Hate Speech**: Zero tolerance for discrimination or harassment
4. **Quality Content**: Focus on meaningful contributions
5. **Moderation**: Follow moderator guidance and decisions

## 🔒 Privacy Policy

Ukumbi respects user privacy. We collect minimal data necessary for platform functionality and never share personal information with third parties.

## 📄 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## 📞 Contact

For any queries or suggestions, reach out through:
- GitHub Issues
- Email: [oduortoni.com]
- Platform: [@Ukumbi]

---

Built with ❤️ by toni