# HabboGZ Skin

> Skin oscuro dorado premium para ZabboCMS  
> Desarrollado por **Cush Media / Estación KUS Medios**

---

## 🎨 Descripción

**HabboGZ** es un skin para ZabboCMS con estilo dark premium y acentos dorados.
Diseñado para darle identidad única al hotel retro, con mejores contrastes y animaciones sutiles.

## 📦 Contenido del Skin

```
HabboGZ/
├── skin.config.php      # Configuración y variables de color del tema
├── assets/
│   └── habbogz.css         # Hoja de estilos principal del tema
└── README.md
```

> Los templates PHP se agregarán en futuras versiones.
> Por ahora, el skin funciona como **capa CSS sobre el skin ZabboME**.

## ⭐ Características

- Fondo oscuro `#0d0d0d` con superficies en capas (14px, 1a1a1a, 1f1f1f)
- Acento dorado `#d4a017` / `#f0c040` en botones, headers y badges
- Cards con bordes dorados sutiles y sombras profundas
- Scrollbar personalizado en dorado
- Leaderboard con destacado por rango (oro/plata/bronce)
- Glow animado para elementos importantes
- Texto gradiente dorado `.gz-gold-text`
- Totalmente responsive

## 🚀 Instalación

1. Asegúrate de que la carpeta `HabboGZ/` esté en `app/tpl/skins/`
2. En el `<head>` de `includes/header.php` agrega:
   ```html
   <link rel="stylesheet" href="{cdnurl}/skins/HabboGZ/assets/habbogz.css">
   ```
   O activa el skin desde el panel de administración si el CMS lo soporta.
3. ¡Listo! El tema se aplica sobre el skin ZabboME base.

## 🛠️ Roadmap

- [ ] Templates PHP propios (home, register, store, etc.)
- [ ] Variante `HabboGZ Light` (dorado sobre blanco)
- [ ] Pack de iconos personalizados
- [ ] Animaciones de entrada por sección

---

> Cush Media — Irapuato, Guanajuato, México 🇲🇽
