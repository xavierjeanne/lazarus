<a href="<?php echo site_url();?>">Retour à l'accueil</a>
<h2><?php the_title();?></h2>
<p><?php the_field('parole');?></p>
<?php if( have_rows('extrait') ): ?>
    <ul class="slides">
    <?php while( have_rows('extrait') ): the_row(); 
        $fichier = get_sub_field('fichier');
        ?>
       <figure>
            <audio
                controls
                src="<?php echo $fichier;?>">
                    Your browser does not support the
                    <code>audio</code> element.
            </audio>
        </figure>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
