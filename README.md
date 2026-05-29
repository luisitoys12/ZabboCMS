# ZabboCMS

> CMS para hoteles retro (Habbo) — Fork personalizado por [luisitoys12](https://github.com/luisitoys12)

![PHP](https://img.shields.io/badge/PHP-5.6%2B-blue?style=flat-square&logo=php)
![License](https://img.shields.io/badge/license-sin%20licencia-lightgrey?style=flat-square)
![Fork](https://img.shields.io/badge/fork-ZabboME%2FZabboCMS-orange?style=flat-square)

---

## 📄 Descripción

ZabboCMS es un sistema de gestión de contenido (CMS) diseñado para hoteles retro basados en Habbo. Incluye sistema de usuarios, skins intercambiables, panel de administración, tienda, tabla de líderes, sistema de recompensas diarias, soporte y mucho más.

Este fork es mantenido por **Luis Martinez** (Cush Media / Estación KUS Medios) con mejoras y el skin personalizado **HabboGZ**.

---

## 📁 Estructura del Proyecto

```
ZabboCMS/
├── app/
│   ├── class.core.php          # Núcleo del sistema
│   ├── class.engine.php        # Motor de rutas
│   ├── class.template.php      # Motor de templates
│   ├── class.users.php         # Sistema de usuarios
│   ├── interfaces/             # Interfaces del sistema
│   ├── management/             # Panel de administración
│   └── tpl/
│       ├── skins/
│       │   └── ZabboME/            # Skin por defecto (más de 40 vistas)
│       └── interfaces/
├── ase/                        # Assets del sistema
├── fonts/                      # Tipografías
├── findretros/                 # Integración FindRetros
├── pp/                         # Procesamiento de pagos
├── global.php                  # Configuración global
├── index.php                   # Punto de entrada
├── ref.php                     # Sistema de referidos
├── .htaccess                   # Reglas de Apache
└── web.config                  # Configuración IIS / PHP 5.6
```

---

## ✨ Funcionalidades incluidas

| Módulo | Descripción |
|---|---|
| `home.php` | Perfil de usuario con stats, monedas, badges y guestbook |
| `register.php` | Registro de nuevos usuarios |
| `me.php` | Panel personal del usuario |
| `store.php` | Tienda de ítems y VIP |
| `leaderboards.php` | Tabla de líderes general |
| `vipleaderboards.php` | Tabla de líderes VIP |
| `community.php` | Comunidad y perfiles |
| `articles.php` | Noticias y artículos |
| `staff.php` | Página del equipo de staff |
| `support.php` | Sistema de soporte |
| `dailyreward.php` | Recompensa diaria |
| `pictures.php` | Galería de fotos |
| `client.php` | Cliente de juego en navegador |
| `apps.php` | Aplicaciones del hotel |
| `events.php` | Eventos del hotel |
| `banned.php` / `vpn.php` | Páginas de restricción |
| `404.php` / `maintenance.php` | Páginas de error y mantenimiento |

---

## 🚀 Instalación

### Requisitos
- PHP 5.6+ (recomendado: PHP 7.4 o superior)
- MySQL 5.x
- Apache con `mod_rewrite` activado, o IIS con `web.config` configurado

### Pasos

1. **Clonar el repositorio**
   ```bash
   git clone https://github.com/luisitoys12/ZabboCMS.git
   cd ZabboCMS
   ```

2. **Configurar la base de datos**  
   Importa el schema SQL de tu emulador Habbo (Arcturus, Nitro, etc.) en MySQL.

3. **Configurar `global.php`**  
   Edita las credenciales de base de datos, URL del hotel, CDN y emulador.

4. **Configurar el servidor web**  
   - **Apache**: El `.htaccess` incluido ya gestiona las redirecciones.  
   - **IIS**: Usa el `web.config` incluido (ajustado para PHP 5.6).

5. **Apuntar el dominio** a la carpeta raíz del proyecto.

---

## 🎨 Skins disponibles

| Skin | Descripción | Estado |
|---|---|---|
| `ZabboME` | Skin oficial por defecto | ✅ Incluido |
| `HabboGZ` | Skin oscuro dorado premium (fork Cush Media) | 🔧 En desarrollo |

---

## 🔧 Mejoras de este fork

- `.gitignore` configurado para evitar archivos de sistema (`.DS_Store`, logs, etc.)
- Skin **HabboGZ** en desarrollo (tema oscuro con acentos dorados)
- Fix del bug de Cloudflare en Login/Register con Captcha
- Limpieza de mensajes de alerta innecesarios

---

## 💬 Comunidad

- **Discord**: [https://discord.gg/TNmZ5yhd82](https://discord.gg/TNmZ5yhd82) (ZabboME original)
- **Contacto del fork**: [in3707989@gmail.com](mailto:in3707989@gmail.com)

---

## 📋 Pendientes / Roadmap

- [ ] Migrar de `mysql_*` a `PDO` o `mysqli` (deprecado en PHP 7+)
- [ ] Refactorizar `pictures.php` (94KB — candidato a dividir en módulos)
- [ ] Mejorar animaciones en `dailyreward.php` y `rewardreminder.php`
- [ ] Documentar la estructura de la base de datos
- [ ] Lanzar skin HabboGZ como release oficial

---

> Fork mantenido por **Cush Media / Estación KUS Medios** — Irapuato, Guanajuato, México 🇲🇽
