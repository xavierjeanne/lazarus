<div class="row">
    <div class="col-12 mb-5">
        <h1><?php the_title();?></h1>
    </div>
</div>
<div class="container">
    <div class="row mb-5 parole">
        <div class="col-12">
            <?php the_field('parole');?>
        </div>
    </div>
</div>

<?php if( have_rows('extrait') ): ?>
<hr>
    <div class="slides row mt-5">
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
