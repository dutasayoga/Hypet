<?php require_once "view/header.php" ?>

		<article>
			<div class="container">
				<div style="display:block"><img src="Images/Images_Dobremen.jpg" /></div>
				<div><img src="Images/Images_Golden.jpg"/></div>
				<div><img src="Images/Images_rabbit.jpg"/></div>
				<div><img src="Images/Images_snake.jpg"/></div>
				<button class="btn "id="next">&#10094;</button>
				<button class="btn "id="prev">&#10095;</button>
			</div>
		</article>



		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script>
			$(document).ready(function(){
			   var index = 0,
			      items = $('.container div'),
			      total = items.length;

			   function slide() {
			      var item = $('.container div').eq(index);
			      items.hide();
			      item.css('display', 'block');
			   }

			   var autoslide = setInterval(function(){
			      index += 1;
			      if (index > total - 1 ) index = 0;
			      slide();
			   }, 5000);

				$('#next').click(function(){
					index += 1;
					if (index > total - 1 ) index = 0;
					slide();
				});

				$('#prev').click(function(){
					index -= 1;
					if (index < total - 0 ) index = total -1;
					slide();
				});

			});

	   </script>

<?php require_once "view/footer.php" ?>
