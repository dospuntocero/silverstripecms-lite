<% if ExtraImages %>
<section id="extraimages">
	<% loop ExtraImages %>
		<a href="$URL" class="thumbnail jsPopUp" rel="gallery">
			<img src="<% control CroppedImage(133,90) %>$URL<% end_control %>" alt="$Title">
		</a>
	<% end_loop %>
</section>
<% end_if %>
