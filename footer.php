</div>
	</div>
	<!-- End Content -->
	<footer id="page-footer">
	<div id="site5bottom">开发者：
        <a href="http://www.s5themes.com/">Site5 WordPress Themes</a>
    </div>
	<?php echo of_get_option("diary_copyright");?>
	</footer>
</div>
<?php if (of_get_option('diary_analytics') <> "") { 
		echo stripslashes(stripslashes(of_get_option('diary_analytics'))); 
	} ?>
</body>
<?php wp_footer();?>
</html>
