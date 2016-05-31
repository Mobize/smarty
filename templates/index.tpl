{include file="partial.tpl" title="Welcome"}

<h2>Hello {$name|ucfirst} !</h2>

<p>Nous sommes le {$date|date_format:'d-m-Y'}</p>

Liste de contacts :
<ul>
{foreach $contacts as $key => $contact}
	<li>{$contact}</li>
{/foreach}
</ul>