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

### Desarrollo del tema

#### Fuentes

- Colocados los archivos de fuentes en themes/fonts, descargados de https://gwfh.mranftl.com/fonts/roboto?subsets=latin
- Archivos modificados para instalar la fuente
	- wp-content\themes\jorgegl-vgs-wp-theme\tailwind\tailwind-theme.css - declarar la variable del nombre de la fuente
	- theme/tailwind/custom/fonts.css - Font-fase

#### Colores

- He decidido usar colores adicionales (verde, azul, azul-oscuro, azul-tenue) con nombres que faciliten el trabajo de maquetación 
- Se sustituyó el color foreground por el proporcionado por Figma
- Siguiendo la arquitectura del tema, se modificaron los siguientes archivos:
   - wp-content\themes\jorgegl-vgs-wp-theme\theme\theme.json para establecer variables y nuevos colores
   - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\tailwind-theme.css para declarar dichas variables
   - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\custom\components\components.css para el css personalizado de elementos de la nueva homepage

#### Página de inicio

- Creo la tarjeta para mostrar en bucle los productos que he guardado, jorgegl-vgs-wp-theme/theme/template-parts/card-producto.php
- Creo la página de inicio en jorgegl-vgs-wp-theme/theme/front-page.php, con el bucle para mostrar los productos
- Creo el menú principal "a mano" desde el editor del tema
- Diseño del footer
   - Registramos menús en wp-content\themes\jorgegl-vgs-wp-theme\theme\functions.php
   - Modifcamos wp-content\themes\jorgegl-vgs-wp-theme\theme\template-parts\layout\footer-content.php para mostrar menús y nuevos elementos
   - Iconos sociales en su carpeta correspondiente del tema, clases apply, alineación corerecta
- Diseño del CTA "asesoamiento personalizado"
   - Se crea el archivo wp-content\themes\jorgegl-vgs-wp-theme\theme\template-parts\advisory-cta.php y se llama desde font-ñpage.php que hará de orquestador
   - Creamos la carpeta para imágenes wp-content\themes\jorgegl-vgs-wp-theme\theme\images\decorative
- Testimonios: archivo wp-content\themes\jorgegl-vgs-wp-theme\theme\template-parts\testimonials.php
   - Creamos un script para que sea un verdadeo carrusel y los botones tengan funcionalidad
- Sección de Profesionales y CERCANOS, misma técnica de template-parts.
- Formulario de presupuestos: también una template-part
   - NOTA: uno de los checkboxes. el de la privacidad, está marcado por defecto, revisar si es aceptable
- Grid de productos movido a un template-part
- Sección de tarjetas "¿Por Qué..."?
- Slider principal: 2 soluciones comentadas más abajo. El slider ya no depende de the_content()/have_posts() (se sustituyó por lectura del Personalizador), por lo que se extrajo a template-parts/hero-slider.php como el resto de seccione

## Resumen de decisiones técnicas generales

- Los colores verde y azul del tema están en los archivos de tailwind correspondientes proporcionados por el tema
- Usar la directiva @apply para varios estilos, por ejemplo, el último enlace del menú principal - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\custom\components\components.css
- Arquitectura: Se decidió extraer cada sección de la Home a su propio template part (template-parts/), dejando front-page.php como un simple orquestador que invoca get_template_part() en orden — facilita el mantenimiento y aísla cada sección como una unidad independiente. 
- Se hizo una excepción con el slider principal: al depender directamente de the_content() sobre la página asignada como portada estática (Ajustes → Lectura), está acoplado al bucle principal (have_posts()) de la propia plantilla front-page.php, así que se mantiene inline en vez de fragmentarlo en un archivo aparte sin necesidad real.
- Se usó max-w-7x1 como ancho para todo el contenido
- Se utilizaron sub carpetas para los iconos dependiendo de la sección

### Testimonios

- Se optaron por clases Tailwind para el tamaño de los controles del carrusel, son muy aproximados a los tamaños del diseño del figma, aunque no exactos.
- Se crearon dos testimonios más y se hizo funcional el carrusel de testimonios con un script
- El script del carrusel de testimonials en principio vivia en un tag script dentro del archivo wp-content\themes\jorgegl-vgs-wp-theme\theme\template-parts\testimonials.php
- Sacamos el script a un archivo wp-content\themes\jorgegl-vgs-wp-theme\javascript\testimonials-carousel.js
- Añadimos ./javascript/testimonials-carousel.js a la línea de development:esbuild del package.json, para uqe se genere el archivo theme/js/testimonials-carousel.min.js cuando se compile el tema
- En functions.php del tema, añadimos el enqueue condicionado para su carga
- Con esto: el carrusel solo se descarga en la home (is_front_page())
- El contenido podría administrarse desde el escritorio de WP
   - Desde el tema con un CPT que viva en functions.php
   - Desde un plugin

### Sección Profesionales y cercanos

- Se usó flex flex-row: con grid, ajustando el espaciado
- Imagen responsive sin perder la proporción del Figma: w-full max-w-[423px] aspect-[423/454] en vez de ancho/alto fijos en píxeles, que rompían el layout en mobile.
- Franja de servicios: divide-x-2 divide-azul en vez de bordes manuales por bloque, para no gestionar a mano el borde sobrante del primer/último elemento.
- Se aplica posicionamiento especial a la flecha en forma de espiral

### Grid de productos

- Usamos un plugon personalizado para crear los productos
- Descripción corta de los productos: registramos un campo meta para poder efitar con HTML la descripción corta mostrada en las tarjetas de los productos del front
- Con front-page.php más estructurado, se cambió a un template-part
- Se ha usado line-clamp para la descripción del producto
- Se añadió soporte para ordenar los productos por un campo numérico desde el plugin CPT

### Sección ¿Por qué nuestro panel sándwich?

- Algunas clases se quedaron fuera de la directiva apply, ya que la última tarjeta tenía márgenes distintos para ajustar el texto

### Menú

- Localización absoluta para front page, para uqe "flote" sobnre le slider
- Menú hamburguesa para móviles

### Slider

- Slider editable — soluciones evaluadas
   1. Bloque Portada (Gutenberg nativo) — ver página de demostración en /slider-alternativa-bloques. Ventaja: 100% nativo, sin código a medida. Limitación: el ajuste fino a Figma requirió recurrir al campo "CSS Adicional" de WordPress 7.0 en varios puntos.
   2. Personalizador + front-page.php (la implementada) — imagen, textos y enlace del botón editables desde Apariencia → Personalizar → Slider. Ventaja: el HTML vive en el tema con clases Tailwind reales, sin límites de compilación, más "unido" al propio tema. Limitación: solo el contenido de los campos expuestos son editables, no es contenido libre como el editor de bloques, ni se puede editar el estilo con Wordpress
   3. Solución ideal: desarrollar un bloque de Gutenberg personalizado para el tema. Permitiría extender la funcionalidad a varios slides con transición entre ellos, cosa que ninguna de las dos soluciones actuales contempla.
- Finalmente, se movió a un template-part

### Pendiente


- Revisar tema responsivo en tablet, table horizontal y escritorio pequeño