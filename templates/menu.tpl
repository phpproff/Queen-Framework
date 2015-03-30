
<header>
    <nav id="top-nav">
    	<ul>
        {foreach $menu as $val}
            <li><a href='index.php?page={$val.route}' >{$val.title}</a></li>
            {/foreach}     
        </ul>
    </nav>
    <div id="logo">
    	
    </div>
        
</header>