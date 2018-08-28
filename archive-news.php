<?php
get_header();
?>


<div id="wrap" class="box-cover"><?php
if(have_posts()) : 
    while(have_posts()) : 
    the_post();
    $news = 'news';
    
?>
<div class="flip">
<div class= "<?php echo $news; ?> front">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >

<?php    
	the_title(); 
    	the_post_thumbnail();
	
	
?>
</a>
</div><!-- flip ends -->

    <div class="back">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
    <h3><?php the_content(); ?></h3></a>
    </div> <!-- back ends --> 
</div> <!--box cover ends -->


<?php    
    
    	endwhile; 
	endif;

?>

 
 </div> <!--box cover and wrap ends --> 
        
    
  
<div class="footer">
<?php
	get_footer();
?>

</div>
