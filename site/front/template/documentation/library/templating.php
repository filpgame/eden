<a class="prev" href="/documentation/library/registry">&laquo; 9. The Registry</a>
<a class="next" href="/documentation/library/images">11. Images &raquo;</a>

<h3>10. Templating</h3>
<p><strong>Eden</strong> comes with a simple templating for strings, PHP templating and TPL templating that is as simple as a method call to render outputs.</p>

<blockquote class="note">
	<h5>Author Note</h5>
	<span>We encourage to use PHP templating because of the small fingerprint it implies.</span>
</blockquote>

<sub>Figure 1. Template String</sub>
<div class="example"><pre class="brush: php;">
echo eden('template')
	->set('[name]', 'Chris')
	->set('[job]', 'author')
	->parseString('I am [name] an [job]'); //--> I am Chris an author
</pre></div>

<sub>Figure 2. PHP Templating</sub>
<div class="example"><pre class="brush: php;">
echo eden('template')
	->set('name', 'Chris')
	->set('job', array('author', 'programmer'))
	->parsePHP(dirname(__FILE__).'/template.php'); //--> I am Chris an author, programmer
</pre></div>

<sub>Figure 3. PHP Template File</sub>
<div class="example"><pre class="brush: php;">
&lt;p&gt;I am &lt;?php echo $name; ?&gt; an &lt;?php echo implode(', ', $job); ?&gt;&lt;/p&gt;
</pre></div>

<sub>Figure 3. TPL Templating</sub>
<div class="example"><pre class="brush: php;">
echo eden('template')
	->set('name', 'Chris')
	->set('job', array('author', 'programmer'))
	->parseEngine(dirname(__FILE__).'/template.tpl'); //--> I am Chris an author, programmer
</pre></div>

<sub>Figure 3. PHP Template File</sub>
<div class="example"><pre class="brush: php;">
&lt;p&gt;I am &lt;php:name; /&gt; an &lt;php: implode(', ', $job); ?&gt;&lt;/p&gt;
</pre></div>



<a class="prev" href="/documentation/library/registry">&laquo; 9. The Registry</a>
<a class="next" href="/documentation/library/images">11. Images &raquo;</a>