	<header id="headerimgs">
			<div id="headerimg1" class="headerimg"></div>
			<div id="headerimg2" class="headerimg"></div>
          <div id="nav-outer">
             <h1 class="logo">Martín Palottini</h1>
             <nav class="menu">
							 <li class="<?php if($_REQUEST["dirname"]=="dibujos"){?>activo<?php } ?>">
								<a href="?contenido=dibujos&amp;dirname=otroLadoTapiz"><?php echo $xmlLang->getElement("dibujo") ?></a>
							</li>
							 <li class="<?php if($_REQUEST["dirname"]=="pinturas"){?>activo<?php } ?>">
								<a href="?contenido=pinturas&amp;dirname=cinco"><?php echo $xmlLang->getElement("pintura") ?></a>
							</li>
							 <li class="<?php if($_REQUEST["dirname"]=="cv"){?>activo<?php } ?>">
								<a href="?contenido=cv"><?php echo $xmlLang->getElement("cv") ?></a>
							</li>
							 <li class="<?php if($_REQUEST["dirname"]=="contactos"){?>activo<?php } ?>">
								<a href="?contenido=contactos"><?php echo $xmlLang->getElement("contactos") ?></a>
							</li>
							 <li class="<?php if($_REQUEST["dirname"]=="contactos"){?>activo<?php } ?>">
								<a href="?contenido=contactos"><?php echo $xmlLang->getElement("contactos") ?></a>
							</li>
							<li>
								<a href="http://palottini.blogspot.com" rel="external"><?php echo $xmlLang->getElement("blog") ?></a>
							</li>	
             </nav>
          </div>   
 	</header>
