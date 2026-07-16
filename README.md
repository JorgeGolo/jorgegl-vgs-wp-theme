# Prueba Técnica PHP Developer – VGS (WordPress)

Tema personalizado `jorgegl-vgs-wp-theme` desarrollado como parte de la prueba técnica de PHP Developer para VGS, basado en el starter theme [_tw](https://github.com/gregsullivan/_tw) de Greg Sullivan. Para documentación técnica detallada, consulta el [README original de _tw](https://github.com/gregsullivan/_tw#readme).

## Instalación y compilación

1. Clona este repositorio dentro de `wp-content/themes/` de una instalación de WordPress existente (WordPress 8.x, descarga desde [aquí](https://es.wordpress.org/download/) si partes de cero).

2. Entra en la carpeta del tema:
```bash
   cd wp-content/themes/jorgegl-vgs-wp-theme
```

3. Instala las dependencias de Node:
```bash
   npm install
```

4. Compila los estilos (Tailwind) y JS una sola vez:
```bash
   npm run dev
```
   O, en modo desarrollo con recompilación automática al guardar cambios:
```bash
   npm run watch
```

5. Desde el admin de WordPress, ve a **Apariencia > Temas** y activa `jorgegl-vgs-wp-theme`.

6. Antes de una entrega/despliegue final, genera la versión de producción minificada:
```bash
   npm run prod
```

> ⚠️ Importante: el repositorio no incluye los archivos compilados (`style.css`, `*.min.js`) ni `node_modules`, siguiendo el `.gitignore` oficial del starter theme. Es imprescindible correr `npm install` + `npm run dev` (o `watch`) tras clonar para ver el tema con estilos.

## Plugin CPT

- Enlace al repositorio:

## Desarrollo

### Requisitos

* Herd para administrar versiones de PHP - con > PHP 8.0
* DBngin como servidor MySQL
* phpMyAdmin (integrado en Herd) para la creación de la base de datos
* Node.js
* NPM
* Git
* Tailwind CSS 
* Wordpress: https://es.wordpress.org/download/
* Tema de Greg Sullivan: https://github.com/gregsullivan/_tw
* Diseño de referencia en Figma: https://www.figma.com/design/NoUtqQzkKlLvoMAohSoE5X/Prueba-PHP?node-id=0-1&t=TyadU1LOWy27Tom0-1

_(en construcción)_

- [ ] Slider principal editable

### Personalización del tema

#### Fuentes

- Descargar la fuente de https://gwfh.mranftl.com/fonts/roboto?subsets=latin
- Colocados los archivos de fuentes en themes/fonts
- Archivos modificados para instalar la fuente
	- wp-content\themes\jorgegl-vgs-wp-theme\tailwind\tailwind-theme.css - declarar la variable del nombre de la fuente
	- theme/tailwind/custom/fonts.css - Font-fase

#### Página de inicio

- Creo la tarjeta para mostrar en buble los productos que he guardado, jorgegl-vgs-wp-theme/theme/template-parts/card-producto.php
- Creo la página de inicio en jorgegl-vgs-wp-theme/theme/front-page.php, con el bucle para mostrar los productos
- Creo el menú principal "a mano" desde el editor del tema
- Diseño del footer
   - Color de fondo 

## Resumen de decisiones técnicas

- Descripción corta de los productos: campo meta
- Fuentes alojadas
- Los colores verde y azul del tema están en los archivos de tailwind correspondientes proporcionados por el tema
- Uso la directiva @apply parael estilo del último enlace del menú principal - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\custom\components\components.css
