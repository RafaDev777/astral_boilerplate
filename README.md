# 🚀 Astro + Vue + UnoCSS + Laravel Boilerplate

A monorepo starter for building modern frontends with **Astro + Vue + UnoCSS** and a robust **Laravel backend** — structured for maintainability, performance, and simple CI/CD.

---

## 📁 Folder Structure

├── engine/ # Laravel backend (API, Auth, Database, etc.)
├── interface/ # Astro frontend (Vue components, UnoCSS, static site)
├── .github/ # GitHub Actions workflows (CI/CD)
└── README.md

---

## ⚙️ Tech Stack

| Layer    | Tech                                                                                 |
| -------- | ------------------------------------------------------------------------------------ |
| Frontend | [Astro](https://astro.build), [Vue](https://vuejs.org), [UnoCSS](https://unocss.dev) |
| Backend  | [Laravel](https://laravel.com)                                                       |
| CI/CD    | GitHub Actions + FTP Deploy                                                          |

---

## 🧑‍💻 Local Development

### 1. Clone the Repo

```bash
git clone https://github.com/yourusername/your-repo.git
cd your-repo
```

### 2. Install Dependencies

- Frontend

```bash
cd interface
pnpm install

```

- Backend

```bash
cd ../engine
composer install
cp .env.example .env
php artisan key:generate
```

### 3. Run Dev Servers

From project root:

```bash
pnpm install
pnpm dev
```

This runs:

- Astro dev server on <http://localhost:4321>
- Laravel API on <http://localhost:8000>

---

## 🔗 API Requests from Frontend

Set this in interface/.env:

```env
PUBLIC_API_URL=httpL//localhost:8000/api
```

Then use it in your Astro/Vie code:

```typescript
fetch(import.meta.env.PUBLIC_API_URL + "/your-endpoint");
```

---

## 🚀 Deployment

This repo includes a Github Actions workflow that:

- Builds the Astro site (interface/dist)
- Installs Laravel dependencies (engine)
- Deploys to your web host via FTP

### Setup Github Servers

| Secret       | Description     |
| ------------ | --------------- |
| FTP_HOST     | Your FTP server |
| FTP_USERNAME | FTP username    |
| FTP_PASSWORD | FTP password    |

Go to "Repository" -> "Settings" -> "Actions" and add them

---

## 📦 Build for Production

To manually build the frontend:

```bash
cd interface
pnpm run build
```

It outputs to interface/dist.

---

## 🧼 Notes

- The frontend uses UnoCSS in "attributify mode" with "Vue support".
- Organized in a single folder for easier deploys.
- The GitHub Action deploys only when pushing to main from test.

---

## 📜 License

Mit License
