<% if Attachments %>
<section id="attachments">
	<dl>
		<dt>
			<hgroup>
			<h4><% _t('Attachments.DOWNLOADS','Downloads') %></h4>
			</hgroup>
		</dt>
		<% loop Attachments %>
			<dd><strong>&darr;</strong> <a href="$URL" target="_blank">$Title</a></dd>
		<% end_loop %>
	</dl>
</section>
<% end_if %>
