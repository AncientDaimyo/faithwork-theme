<title>My Now Amazing Webpage</title>
<link rel="stylesheet" type="text/css" href="slick/slick.css" />
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />


<div class="your-class">
  <div>your content</div>
  <div>your content</div>
  <div>your content</div>
</div>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<? get_template_directory_uri() . 'slick/slick.min.js'?>"></script>

<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery('.your-class').slick({
      setting-name: setting-value
    });
  });
</script>