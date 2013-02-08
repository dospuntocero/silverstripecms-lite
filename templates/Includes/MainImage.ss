<% if Image %>
	<% with Image %>
		<% if Orientation = 1 %>
			<div class="main_portrait image $Top.Green right">
				<a href="$Link" class="thumbnail jsPopUp marginbtm-small">
					<img class="thumbnail right" src="$PaddedImage(290,210).URL" alt="$Title"/>
				</a>
			</div>
		<% else %>
			<a href="$Link" class="jsPopUp marginbtm-small">
				<img class="thumbnail right" src="$PaddedImage(290,210).URL" alt="$Title"/>
			</a>
		<% end_if %>
	<% end_with %>
<% end_if %>