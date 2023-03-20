<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div  class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">TechWork es un sitio de gestion de eventos, con la ayuda de esta herramienta el usuario podra inscribirse a diferentes conferencias y talleres.</p>
            
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Gracias a TechWork el administrador podra visualizar y gestionar los talleres y conferencias, ademas de que los pagos se haran de una forma mas sencilla gracias al Api de Paypal.</p>
        </div>
    </div>
</main>