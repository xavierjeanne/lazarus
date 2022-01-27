<a href="<?php echo site_url();?>">Retour à l'accueil</a>
<h2><?php the_title();?></h2>
<p><?php the_field('parole');?></p>
<hr>
<?php if( have_rows('extrait') ): ?>
    <div class="slides row">
    <?php while( have_rows('extrait') ): the_row(); 
        $fichier = get_sub_field('fichier');
        $type = get_sub_field('type_dextrait');
        ?>
        <div class="col-12 col-md-6">type d'extrait : <?php echo $type;?></div>
        <div class="col-12 col-md-6">
            <figure>
                <audio
                    controls
                    src="<?php echo $fichier;?>">
                        Your browser does not support the
                        <code>audio</code> element.
                </audio>
            </figure>
        </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>
