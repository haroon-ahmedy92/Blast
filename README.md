# 🚀 BLAST - Career Opportunities Platform

**Your gateway to career opportunities across Tanzania and beyond. Connecting talent with the right opportunities.**

[![Spring Boot](https://img.shields.io/badge/Spring%20Boot-3.4.3-brightgreen.svg)](https://spring.io/projects/spring-boot)
[![Java](https://img.shields.io/badge/Java-17-orange.svg)](https://www.oracle.com/java/)
[![Thymeleaf](https://img.shields.io/badge/Thymeleaf-Template%20Engine-blue.svg)](https://www.thymeleaf.org/)
[![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-Styling-38B2AC.svg)](https://tailwindcss.com/)

## 🌟 Overview

BLAST is a comprehensive career platform designed specifically for African markets, with a primary focus on Tanzania. The platform connects job seekers, students, and professionals with opportunities including employment, scholarships, examination results, and market trends across the continent.

### 🎯 Mission
*"The more the information, the better your life becomes."*

To provide comprehensive access to job opportunities, tenders, scholarships, and programs that empower individuals and organizations across Tanzania and Africa.

### 🔍 What We Offer

- **💼 Job Opportunities**: Latest openings across various sectors in Tanzania and beyond
- **📋 Tenders**: Government and private sector procurement opportunities  
- **🎓 Examination Results**: Academic results and admission updates from institutions
- **📈 Market Trends**: Industry insights, policy changes, and career guidance
- **🌍 Pan-African Coverage**: Opportunities across multiple African countries
- **📱 Multi-language Support**: English and Swahili content

## 🏗️ Architecture

### Technology Stack
- **Backend**: Spring Boot 3.4.3 with Java 17
- **Template Engine**: Thymeleaf for server-side rendering
- **Styling**: Tailwind CSS with custom design system
- **Build Tool**: Maven with Spring Boot Maven Plugin
- **Version Control**: Git with GitHub integration

### Project Structure
```
blast/
├── src/
│   └── main/
│       ├── java/com/blast/
│       │   └── web/
│       │       ├── controller/     # Spring MVC controllers
│       │       ├── service/        # Business logic services
│       │       └── model/          # Data models
│       └── resources/
│           ├── static/             # CSS, JS, images
│           └── templates/          # Thymeleaf templates
│               ├── fragments/      # Reusable components
│               ├── layouts/        # Page layouts
│               └── pages/          # Page content
├── docs/
│   └── design-system.md           # Design system documentation
├── scripts/                       # Build and utility scripts
├── legacy-laravel/               # Previous Laravel implementation
└── target/                       # Maven build output
```

## 🚀 Quick Start

### Prerequisites
- **Java 17** or higher
- **Maven 3.6+** (or use the included Maven wrapper)
- **Git** for version control

### Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/haroon-ahmedy92/Blast.git
   cd Blast
   ```

2. **Run the application**
   ```bash
   # Using Maven wrapper (recommended)
   ./mvnw spring-boot:run
   
   # Or using system Maven
   mvn spring-boot:run
   ```

3. **Access the application**
   - Open your browser and navigate to: `http://localhost:8080`
   - The application will be running with hot reload enabled

### Build for Production

```bash
# Create production build
./mvnw clean package

# Run the JAR file
java -jar target/blast-spring-0.0.1-SNAPSHOT.jar
```

## 📱 Features & Pages

### Core Features
- **🏠 Homepage**: Hero section with featured opportunities and quick navigation
- **🔍 Opportunities**: Browse jobs by country, category, and employment type
- **📊 Results**: Examination results and academic announcements  
- **📈 Trends**: Market insights, policy updates, and industry analysis
- **ℹ️ About**: Platform information and mission
- **📢 Get Started**: User onboarding and setup guide

### User Experience
- **📱 Responsive Design**: Mobile-first approach with desktop optimization
- **🎨 Modern UI**: Clean, professional interface following design system
- **⚡ Fast Loading**: Server-side rendering for optimal performance
- **🔍 Advanced Search**: Filter and search across all content types
- **📋 Categories**: Organized content by industry, location, and type
- **🔔 Alert System**: Notifications for new opportunities and updates

## 🎨 Design System

BLAST follows a comprehensive design system with consistent:

### Design Principles
- **Compact**: Low-noise spacing, concise typography, dense but readable cards
- **Calm**: Muted neutrals with one dominant accent color
- **Typography-first**: Clear heading hierarchy and optimal reading width
- **Minimal motion**: Subtle hover effects without intrusive animations
- **Subtle depth**: Thin borders and soft shadows for elegance

### Color Palette
- **Primary**: `#1E40AF` (Blue) - Main brand color
- **Secondary**: `#EFF6FF` (Light Blue) - Backgrounds and accents  
- **Success**: `#166534` (Green) - Positive actions and results
- **Warning**: `#FACC15` (Yellow) - Highlights and trends
- **Neutral**: Gray scale for text and borders

### Component Library
- Cards, buttons, forms, navigation, and content blocks
- Responsive grid system with Tailwind CSS
- Consistent spacing, typography, and interaction patterns

## 🌍 Target Markets

### Primary Markets
- **🇹🇿 Tanzania**: Main focus with localized content
- **🇰🇪 Kenya**: Secondary market with growing presence
- **🇺🇬 Uganda**: Expanding opportunities 
- **🇷🇼 Rwanda**: Emerging market coverage

### Content Categories
- **Employment**: Full-time, part-time, contract, internships
- **Education**: Universities, scholarships, academic programs
- **Government**: Public sector jobs, tenders, policy updates
- **Private Sector**: Corporate opportunities and business trends
- **Professional Development**: Skills, certifications, career advancement

## 🔧 Development

### Running in Development Mode
```bash
# Start with development profile
./mvnw spring-boot:run -Dspring-boot.run.profiles=dev

# Enable debug logging
./mvnw spring-boot:run -Dspring-boot.run.jvmArguments="-Ddebug=true"
```

### Code Structure
- **Controllers**: Handle HTTP requests and routing
- **Services**: Business logic and data processing
- **Templates**: Thymeleaf pages with fragment composition
- **Static Assets**: Custom CSS overrides and design system implementation

### Adding New Features
1. Create controller methods for new routes
2. Implement service logic for data handling  
3. Design Thymeleaf templates following design system
4. Add navigation links and update related pages
5. Test across different screen sizes and devices

## 📦 Deployment

### Production Deployment
```bash
# Build production JAR
./mvnw clean package -Pprod

# Run with production profile
java -jar target/blast-spring-0.0.1-SNAPSHOT.jar --spring.profiles.active=prod
```

### Environment Configuration
Configure application properties for:
- Database connections (if using external DB)
- External API integrations
- Email and notification services
- Static asset hosting (CDN)

## 🤝 Contributing

We welcome contributions to improve BLAST! Here's how you can help:

### Development Setup
1. Fork the repository
2. Create a feature branch: `git checkout -b feature/amazing-feature`
3. Make your changes following the design system
4. Test thoroughly across different devices
5. Commit changes: `git commit -m 'Add amazing feature'`
6. Push to branch: `git push origin feature/amazing-feature`
7. Open a Pull Request

### Contribution Areas
- **🐛 Bug Fixes**: Report and fix issues
- **🚀 New Features**: Enhance platform functionality
- **🎨 UI/UX**: Improve design and user experience
- **📝 Content**: Add job categories, countries, or market data
- **🌐 Localization**: Translate content to local languages
- **📚 Documentation**: Improve guides and API documentation

## 📞 Support & Contact

### Getting Help
- **📚 Documentation**: Check the `/docs` folder for detailed guides
- **🐛 Issues**: Report bugs via GitHub Issues
- **💬 Discussions**: Join community discussions for questions
- **📧 Contact**: Reach out for business inquiries and partnerships

### Community
- **🌟 GitHub**: Star the repository to stay updated
- **🔔 Notifications**: Watch for new releases and features
- **📢 Social Media**: Follow for announcements and updates

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 🙏 Acknowledgments

- **Spring Boot Community**: For the excellent framework and documentation
- **Thymeleaf Team**: For the powerful template engine
- **Tailwind CSS**: For the utility-first CSS framework
- **African Developer Community**: For inspiration and feedback
- **Contributors**: Everyone who has helped make BLAST better

---

**Built with ❤️ for the African workforce**

*Connecting talent with opportunities across Tanzania and beyond.*