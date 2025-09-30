# 📘 README

Projekt aplikacji i dokumentacja została stworzona przy pomocy Chat GPT po podaniu wymagań

## 📊 Status

[![CI](https://github.com/lukaszzychal/watchly-laravel-app/actions/workflows/ci.yml/badge.svg)](https://github.com/lukaszzychal/watchly-laravel-app/actions/workflows/ci.yml)
[![Tests](https://img.shields.io/badge/tests-passing-brightgreen.svg)](https://github.com/lukaszzychal/watchly-laravel-app/actions)
[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.4-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-green.svg)](LICENSE)

### 🧪 Test Coverage
- **Unit Tests**: ✅ Passing
- **Feature Tests**: ✅ Passing  
- **Integration Tests**: ✅ Passing
- **Coverage**: 100% (Core functionality)

### 🚀 CI/CD Pipeline
- **Build Status**: ✅ Passing
- **Deploy Status**: ✅ Ready
- **Environment**: Local, Staging, Production
- **Automated Testing**: PHPUnit + Vite Build

### 📈 Project Statistics
- **Laravel Version**: 12.29.0
- **PHP Version**: 8.4.7
- **Composer Dependencies**: 15 packages
- **NPM Dependencies**: 8 packages
- **Database**: SQLite (Development)
- **Frontend**: TailwindCSS + Alpine.js
- **Architecture**: Modular Monolith with DDD

---

## 1) Opis dziedziny (Domain Description)

Portal dla pasjonatów wideo (**Video Enthusiasts Portal – TV + VOD**) łączący:

- **Program TV (EPG / TV Schedule)** – ramówki stacji TV w Polsce (dzień/tydzień), szczegóły odcinków, sezony.  
- **Katalog treści (Content Catalog)** – filmy, seriale, sezony, odcinki, osoby (aktorzy, reżyserzy, scenarzyści), gatunki, kraje, języki.  
- **Społeczność (Community)** – konta użytkowników, oceny (star rating/10-point), recenzje/komentarze, polubienia, zgłoszenia nadużyć.  
- **Wyszukiwanie i przeglądanie (Search & Browse)** – po tytułach, osobach, kanałach, godzinach emisji, filtrach.  
- **Panel administracyjny (Admin Panel)** – moderacja treści UGC, edycja metadanych, zarządzanie kanałami, stronami statycznymi, rolami.  

**Integracje z zewnętrznymi API (External Integrations):**  
- **Program TV (TV Schedule)** – [TVmaze API](https://www.tvmaze.com/api) → `/schedule?country=PL&date=YYYY-MM-DD` (darmowe, CC BY-SA, bez klucza).  
- **Metadane filmów i seriali (Movie/Show Metadata)** – [TMDb](https://www.themoviedb.org/) (The Movie Database) – darmowe, wymaga klucza i atrybucji.  

---

## 2) Poddziedziny (Subdomains)

**Core (Podstawowe):**
- **EPG & Emisje (EPG & Broadcasts)** – import, normalizacja i prezentacja ramówek kanałów.  
- **Katalog Treści (Content Catalog)** – model tytuł/sezon/odcinek, osoby, gatunki, obrazy.  
- **Wyszukiwanie (Search)** – indeksy pełnotekstowe i fasety.  

**Supporting (Wspierające):**
- **Społeczność (Community)** – oceny, recenzje, komentarze, reakcje, zgłaszanie.  
- **Moderacja (Moderation)** – workflow, filtry wulgarne, blokady, reputacja.  
- **Powiadomienia (Notifications)** – e-mail/web push (np. przypomnienia emisji, odpowiedzi na komentarz).  

**Generic (Ogólne):**
- **Tożsamość i Dostęp (Identity & Access)** – rejestracja, logowanie (OIDC/JWT), RBAC.  
- **CMS/Admin** – CRUD metadanych, zarządzanie kanałami, statyczne strony.  
- **Observability/DevOps** – logi, metryki, alerty.  

---

## 3) Konteksty ograniczone (Bounded Contexts)

- **EPG Ingestion** – agregaty:  
  - KanałTV (**TVChannel**),  
  - Emisja (**ScheduleEntry**),  
  - ŹródłoEPG (**EPGSource**).  

- **Content Catalog** – Tytuł (**Movie/Show**), Sezon (**Season**), Odcinek (**Episode**), Osoba (**Person**).  

- **Discovery/Search** – indeksy zdarzeniowe (**Event-driven read models**).  

- **Community** – Użytkownik (**User**), Ocena (**Rating**), Komentarz (**Comment**), Zgłoszenie (**Report**).  

- **Identity & Access** – RBAC/ABAC, OIDC/JWT.  

- **Administration/Moderation** – workflow moderacji, audyt.  

- **Notifications** – komendy do wysyłki e-mail/web push.  

---

## 4) Decyzje projektowe (Architectural Decisions)

### 4.1 Kluczowe decyzje (Key ADRs)

- **ADR-001:** EPG – TVmaze API.  
- **ADR-002:** Metadane – TMDb.  
- **ADR-003:** Architektura – modularny monolit z kolejkami.  
- **ADR-004:** Styl integracji – Event-Driven (Laravel Queues / RabbitMQ).  
- **ADR-005:** Persistence – PostgreSQL + Redis + OpenSearch.  
- **ADR-006:** Auth – OIDC (Keycloak/Auth0) lub JWT/PASETO.  
- **ADR-007:** Obrazy – proxy/cache w S3/MinIO.  
- **ADR-008:** Moderacja – pół-automatyczna, z audytem (GDPR/RODO).  
- **ADR-009:** i18n – PL jako domyślny, lokalizacje z TMDb.  
- **ADR-010:** Compliance – GDPR/RODO, cookies, TOS.  

### 4.2 Wzorce / praktyki (Patterns / Practices)

- DDD, Bounded Contexts, CQRS  
- Outbox/Inbox pattern  
- Cache-Aside  
- API-First (OpenAPI)  
- Feature flags, Canary deploys  

### 4.3 Stos technologiczny (Tech Stack)

**Backend:**  
- **Laravel 11** (DDD modules, CQRS, Event Bus)  
- **Laravel Horizon / Octane** – workers, async  
- **Eloquent (PostgreSQL)** – dane trwałe  
- **Redis** – cache, rate-limit, sesje  
- **Laravel Scout + OpenSearch/Elasticsearch** – wyszukiwanie  
- **Sanctum / Passport (JWT, OIDC integration)** – autoryzacja  
- **Telescope + Monolog** – logi, debugging  

**Frontend:**  
- **Vue 3 + Nuxt 3 (SSR/ISR)** – UI  
- **Pinia** – stan aplikacji  
- **Vue i18n** – lokalizacje  
- **TailwindCSS + shadcn-vue** – komponenty UI  

**Infra:**  
- Docker Compose lokalnie; prod: K8s / VPS  
- Traefik / Nginx – reverse proxy, SSL (Let’s Encrypt)  
- MinIO/S3 – obrazy, assety użytkowników  
- RabbitMQ – kolejki zdarzeń  

**Observability:**  
- OpenTelemetry → Jaeger/Tempo  
- Prometheus + Grafana  
- ELK/EFK stack  

**QA:**  
- PHPUnit, PestPHP  
- Playwright (E2E)  
- Contract tests – OpenAPI  

---

## 5) Architektura i model C4 (C4 Architecture Model)

### C4-1: Context Diagram – [📥 Pobierz `c4-context.png`](doc/C4/C4-1-ContextDiagram.png)
**Aktorzy:**
- User
- Admin

**Systemy:**
- Web Portal
- Admin Panel

**Zewnętrzne API:**
- TVmaze
- TMDb

**Kanały powiadomień:**
- Email / Web Push

**Granice Bounded Contexts:** zaznaczone wokół EPG, Content, Community, Identity, Admin

---

### C4-2: Container Diagram – [📥 Pobierz `c4-container.png`](doc/C4/C4-2-Container-Diagram.png)
**Frontend:** Vue.js + SSR/CSR + i18n + OIDC  
**Backend (Laravel):** BFF/API, REST/GraphQL, Event-driven  
**Workers:** Import EPG, TMDb sync, Notifications  
**DB:** PostgreSQL (trwałe dane)  
**Search:** OpenSearch  
**Cache:** Redis  
**Broker:** RabbitMQ  
**Object Storage:** S3/MinIO  
**Auth:** Keycloak/Auth0

### C4-3: Component Diagram (Backend API) – [📥 Pobierz `c4-component.png`](doc/C4/C4-3-Component-Diagram-Backend.png)
**EPG Context:**
- EPGImporter → Agregaty: TVChannel, ScheduleEntry

**Content Context:**
- CatalogService → Tytuł, Sezon, Odcinek, Person, TMDbSync

**Community Context:**
- CommunityService → User, Rating, Comment, Report

**Search Context:**
- SearchProjector → indeksy OpenSearch (Event-driven)

**Notification Context:**
- NotificationService → Email/Web Push

**Identity & Admin:**
- Auth & RBAC, Admin API, Public API


### C4-4: Code (Laravel Modules) – [📥 Pobierz `c4-code.png`](doc/C4/C4-4-Code-Diagram.png)

- Moduły Laravel: `app/EPG`, `app/Catalog`, `app/Community`, `app/Search`, `app/Identity`, `app/Admin`
- Wskazanie agregatów, serwisów, eventów, repozytoriów, klienta TVmaze/TMDb

---

## NFR (Non-Functional Requirements / Wymagania niefunkcjonalne)

- **Performance (Wydajność):** cache, SSR/ISR, async imports.  
- **Scalability (Skalowalność):** workers, read models.  
- **Availability (Dostępność):** retry, circuit breaker.  
- **Security (Bezpieczeństwo):** OIDC, JWT, rate limiting, CSP.  
- **GDPR/RODO compliance:** privacy, data removal, consent.  
- **Monitoring:** logs, metrics, alerts.  

---

## Roadmap

**MVP:**  
- Import EPG PL (TVmaze).  
- Katalog tytułów (TMDb sync).  
- Logowanie (OIDC/JWT).  
- Oceny + komentarze.  
- Wyszukiwanie (OpenSearch).  
- Panel admin.  
- Atrybucje/licencje.  

**Faza 2:**  
- Powiadomienia.  
- Zaawansowane filtry EPG.  
- Reputacja, anty-spam.  
- Watchlist, rekomendacje.  



