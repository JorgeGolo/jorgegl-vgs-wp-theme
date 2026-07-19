# Prueba Técnica PHP Developer – VGS (WordPress)

Tema personalizado `jorgegl-vgs-wp-theme` desarrollado como parte de la prueba técnica de PHP Developer para VGS, basado en el starter theme [_tw](https://github.com/gregsullivan/_tw) de Greg Sullivan. Para documentación técnica detallada, consulta el [README original de _tw](https://github.com/gregsullivan/_tw#readme).

## Instalación y compilación

1. Clona este repositorio dentro de `wp-content/themes/` de una instalación de WordPress existente (WordPress 8.x, descarga Wordpress desde [aquí](https://es.wordpress.org/download/)).
```bash
   git clone https://github.com/JorgeGolo/jorgegl-vgs-wp-theme tw
```

2. Entra en la carpeta del tema:
```bash
   cd wp-content/themes/jorgegl-vgs-wp-theme
```

3. Instala las dependencias de Node:
```bash
   npm install
```

4. Genera la versión de producción minificada:
```bash
   npm run prod
```

5. Desde el admin de WordPress, ve a **Apariencia > Temas** y activa `jorgegl-vgs-wp-theme`.

> ⚠️ Importante: el repositorio no incluye los archivos compilados (`style.css`, `*.min.js`) ni `node_modules`, siguiendo el `.gitignore` oficial del starter theme. Es imprescindible correr `npm install` + `npm run dev` (o `watch`) tras clonar para ver el tema con estilos.

## Instala el plugin de CPT "productos"

- Clona el repositorio del plugin: https://github.com/JorgeGolo/prueba-vgs-wp-plugin en wp-content\plugins
```bash
   git clone https://github.com/JorgeGolo/prueba-vgs-wp-plugin vgs-productos
```

- Activa el plugin

## Importa el archivo demo XML

- Desde el importador de Wordpress, importa el archivo XML ubicado en wp-content\themes\jorgegl-vgs-wp-theme\demo-content
- Los avisos del importador son debidos a que el sitio de desarollo no está online y no se pueden importar las imágenes. Puedes ignorarlos.

## Pasos manuales tras importar el XML

1. Ajustes de Lectura > selecciona "Una página estática" y elegir una - he dejado una página vacía llamada "Inicio" - también puede configurarse desde el tema.
2. Asignación de menús: desde apariencia > Menús > Gestionar ubicaciones (o desde el tema), asigna:
   1. Primary -> Top Menu
   2. Footer Información General -> Menú Footer General
   3. Footer Información Legal -> Menú Footer Legal
3. Importar las imágenes de productos desde la interfaz del plugin. Las imágenes de los productos de prueba están en el tema, en la carpeta wp-content\themes\jorgegl-vgs-wp-theme\theme\images\products

Los campos editables del tema tienen valores por defecto.

## Desarrollo local (para continuar trabajando sobre el tema)

Si vas a modificar el código, en vez de `npm run prod` en cada cambio, usa modo desarrollo con recompilación automática al guardar:
```bash
npm run dev    # compila una vez, sin minificar
npm run watch  # recompila automáticamente en cada guardado
```

## Desarrollo

### Requisitos previos para el desarrollo

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

### Fuentes

- Colocados los archivos de fuentes en themes/fonts, descargados de https://gwfh.mranftl.com/fonts/roboto?subsets=latin
- Archivos modificados para instalar la fuente
	- wp-content\themes\jorgegl-vgs-wp-theme\tailwind\tailwind-theme.css - declarar la variable del nombre de la fuente
	- wp-content\themes\jorgegl-vgs-wp-theme\tailwind\custom\fonts.css - Font-fase

### theme.json

#### Colores

- He decidido usar colores adicionales (verde, azul, azul-oscuro, azul-tenue, gris-claro) con nombres que faciliten el trabajo de maquetación 
- Se sustituyó el color foreground por el proporcionado por Figma
- Siguiendo la arquitectura del tema además de wp-content\themes\jorgegl-vgs-wp-theme\theme\theme.json, se modificaron los siguientes archivos:
   - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\tailwind-theme.css para declarar dichas variables
   - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\custom\components\components.css para el css personalizado de elementos de la nueva homepage

### Tipografía, spacing y border

- Se registró la fuente Roboto para que apareciera como opción seleccionable en el editor de bloques (necesario para maquetar la alternativa del bloque Portada — ver sección Slider).
- Se activaron `spacing.margin`, `spacing.padding` y `spacing.blockGap`, y `border.width`/`color`/`radius`/`style`, para tener control de espaciado y borde desde el propio editor sin depender de CSS a medida.
- Aunque la solución final del slider (Personalizador + `front-page.php`) no usa el editor de bloques, estos ajustes siguen activos y son los que permiten que la alternativa de bloque Portada (`/slider-alternativa-bloques`) funcione correctamente.

### Página de inicio

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
   - Creamos un script para que sea un verdadero carrusel y los botones tengan funcionalidad
- Sección de Profesionales y CERCANOS, misma técnica de template-parts.
- Formulario de presupuestos: también una template-part
   - NOTA: uno de los checkboxes. el de la privacidad, está marcado por defecto, revisar si es aceptable
- Grid de productos movido a un template-part
- Sección de tarjetas "¿Por Qué..."?
- Slider principal: 2 soluciones comentadas más abajo. El slider ya no depende de `the_content()/have_posts()` (se sustituyó por lectura del Personalizador), por lo que se extrajo a template-parts/hero-slider.php como el resto de secciones

### Testimonios

- Se optaron por clases Tailwind para el tamaño de los controles del carrusel, son muy aproximados a los tamaños del diseño del figma, aunque no exactos.
- Se crearon dos testimonios más y se hizo funcional el carrusel de testimonios con un script
- El script del carrusel de testimonials en principio vivia en un tag script dentro del archivo wp-content\themes\jorgegl-vgs-wp-theme\theme\template-parts\testimonials.php
- Sacamos el script a un archivo wp-content\themes\jorgegl-vgs-wp-theme\javascript\testimonials-carousel.js
- Añadimos ./javascript/testimonials-carousel.js a la línea de development:esbuild del package.json, para uqe se genere el archivo theme/js/testimonials-carousel.min.js cuando se compile el tema
- En functions.php del tema, añadimos el `enqueue` condicionado para su carga
- Con esto: el carrusel solo se descarga en la home `(is_front_page())`
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
- Se ha añadido un placeholder para las imágenes de producto

### Sección ¿Por qué nuestro panel sándwich?

- Algunas clases se quedaron fuera de las directivas `@apply`, ya que la última tarjeta tenía márgenes distintos para ajustar el texto

### Menú principal

- Localización absoluta para front page, para que "flote" sobre le slider
- Menú hamburguesa para móviles

### Slider

- Slider editable — soluciones evaluadas
   1. Bloque Portada (Gutenberg nativo) — ver página "Inicio". Ventaja: 100% nativo, sin código a medida. Limitación: el ajuste fino a Figma requirió recurrir al campo "CSS Adicional" de WordPress 7.0 en varios puntos. Puede dar problemas en la importación y puede ser de difícil edición.
   2. Personalizador + front-page.php (la implementada) — imagen, textos y enlace del botón editables desde Apariencia → Personalizar → Slider. Ventaja: el HTML vive en el tema con clases Tailwind reales, sin límites de compilación, más "unido" al propio tema. Limitación: solo el contenido de los campos expuestos son editables, no es contenido libre como el editor de bloques, ni se puede editar el estilo con Wordpress.
   3. Solución ideal: desarrollar un bloque de Gutenberg personalizado para el tema. Permitiría extender la funcionalidad a varios slides con transición entre ellos, cosa que ninguna de las dos soluciones actuales contempla.
- Finalmente, se movió a un template-part

## Resumen de decisiones técnicas generales

- Los colores verde y azul del tema están en los archivos de tailwind correspondientes proporcionados por el tema
- Usar la directiva `@apply` para varios estilos, por ejemplo, el último enlace del menú principal - wp-content\themes\jorgegl-vgs-wp-theme\tailwind\custom\components\components.css
- Arquitectura: Se decidió extraer cada sección de la Home a su propio template part (template-parts/), dejando front-page.php como un simple orquestador que invoca `get_template_part()` en orden — facilita el mantenimiento y aísla cada sección como una unidad independiente. 
- Se usó max-w-7x1 como ancho para todo el contenido
- Se utilizaron sub carpetas para los iconos dependiendo de la sección

## Tema responsive, ajustes adicionales

- Alineación de tarjetas a la izquierda en la sección "Profesionales y cercanos"
- Varios breackpoints para márgenes en comportamiento en pantallas grandes desde lg y md
- Ajuste de tamaño de fuente de slider, más pequeña para móviles
- Ajuste de alto de imagen del slider en móviles