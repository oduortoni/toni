# Ukumbi - Dynamic Spaces Platform

## 🌟 Overview

Ukumbi (Swahili for "platform") is a modern space-based platform that enables users to create temporary or permanent knowledge spaces for research, courses, and community engagement. Built with Laravel and Preact, it emphasizes lightweight, performant architecture with real-time updates through Server-Sent Events (SSE).

## 🚀 Features

### Core Features
- **Dynamic Spaces**: Create temporary or permanent spaces for specific purposes
- **Email Verification**: Spaces remain inactive until email verification
- **Real-time Updates**: Server-Sent Events (SSE) for instant content notifications
- **Personal Posts**: Share updates, thoughts, and experiences within your space
- **Space Management**: Invite and manage users within your spaces
- **Progressive Web App**: Ultra-lightweight PWA with Preact (3kB gzipped)

### Space Features
- **Temporary Spaces**: Perfect for courses, research projects, or events
- **Permanent Spaces**: For long-term communities and ongoing projects
- **Content Organization**: Structured content management within each space
- **Real-time Notifications**: Instant updates for new content and activities
- **Access Control**: Granular permissions and invitation system

## 🛠 Technology Stack

### Backend Architecture
- **Framework**: Laravel 10.x
- **Database**: SQLite
- **Real-time**: Server-Sent Events (SSE)
- **Authentication**: Laravel Sanctum
- **API**: RESTful API architecture

### Frontend Architecture
- **Framework**: Preact 10.x (3kB lightweight alternative to React)
- **State Management**: @preact/signals
- **UI Components**: Tailwind CSS
- **Build Tool**: Vite with @preact/preset-vite
- **React Compatibility**: preact/compat for React ecosystem support

### Domain-Driven Design
```
src/
    backend/
            ├── Space/
            ├── Post/
            ├── Notification/
            └── Shared/
    frontend/
            ├── components/
            │   ├── Space/
            │   ├── Post/
            │   └── Shared/
            ├── hooks/
            │   ├── useSSE.js
            │   └── useSpace.js
            └── utils/
```

## 📱 Technical Features
- **Optimized Bundle Size**: Ultra-lightweight frontend with Preact
- **Domain-Driven Design**: Clear separation of business logic
- **Clean Architecture**: Framework-agnostic core business logic
- **Real-time Updates**: Efficient SSE implementation
- **Offline Capability**: Lightweight PWA with service workers
- **Push Notifications**: Real-time content updates

## 🔐 Security Features
- **Space Isolation**: Cryptographic space separation
- **Email Verification**: Required for space activation
- **CSRF Protection**: Cross-site request forgery prevention
- **XSS Prevention**: Cross-site scripting protection
- **Rate Limiting**: API request throttling
- **Input Validation**: Comprehensive request validation

## 🚦 Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js >= 16
- SQLite

### Installation

1. Clone the repository
```bash
git clone https://github.com/oduortoni/ukumbi.git
cd ukumbi
```

2. Install dependencies
```bash
composer install
npm install
```

3. Configure environment
```bash
cp .env.example .env
php artisan key:generate
```

4. Set up the database
```bash
php artisan migrate
php artisan db:seed
```

5. Configure Vite for Preact
```bash
# vite.config.js setup included
npm run build
php artisan serve
```

## 💻 Frontend Development

### State Management
- Utilizing @preact/signals for efficient state updates
- Lightweight alternative to complex state management libraries
- Perfect for real-time SSE integration

## 📱 PWA Features
- Tiny footprint (core bundle < 10kB gzipped)
- Offline capability
- Push notifications
- Home screen installation
- Fast loading and performance

## 📜 Space Guidelines

1. **Purpose**: Each space should have a clear purpose and scope
2. **Content Quality**: Maintain high-quality, relevant content
3. **User Management**: Carefully manage space memberships
4. **Data Lifecycle**: Clear policies on space duration and data retention
5. **Community Standards**: Maintain professional and respectful interaction

## 🔒 Privacy Policy

Ukumbi prioritizes user privacy:
- Spaces are invitation-only by default
- Data is retained only for the specified space duration
- Personal information is never shared with third parties
- Users control their space's lifecycle

## 📄 License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.

## 📞 Contact

For queries or suggestions:
- GitHub Issues
- Email: [oduortoni.com]
- Platform: [@Ukumbi]

---

Built with ❤️ by toni using Preact + Laravel