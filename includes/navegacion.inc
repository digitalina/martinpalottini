<ul class="menu float-right">
	<li><a href="#" class="toggle"><?php echo $xmlLang->getElement("dibujo") ?></a>
		<ul style="display:<?php if($_REQUEST["contenido"]=="dibujos"){?>none<?php }else{ ?>none<?php }?>" >
			<li><em><?php echo $xmlLang->getElement("series") ?></em></li>
			<li class="<?php if($_REQUEST["dirname"]=="seis"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=seis"><?php echo $xmlLang->getElement("lapajadeltrigo") ?> </a>
			</li> 
			<li class="<?php if($_REQUEST["dirname"]=="rodchenko"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=rodchenko"><?php echo $xmlLang->getElement("tra-rodchenko") ?></em></a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="pulmonaria"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=pulmonaria"><?php echo $xmlLang->getElement("pulmonaria") ?></em></a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="bandoneonBlindado"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=bandoneonBlindado"><?php echo $xmlLang->getElement("bandoneonBlindado") ?> </a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="cinco"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=cinco"><?php echo $xmlLang->getElement("ahoraveniybesamelaboca") ?> </a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="trincheraHonor"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=trincheraHonor"><?php echo $xmlLang->getElement("trincheraHonor") ?></a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="retratoSinManos"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=retratoSinManos"><?php echo $xmlLang->getElement("retratoSinManos") ?></a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="noAnimal"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=noAnimal"><?php echo $xmlLang->getElement("noAnimal") ?></a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="otroLadoTapiz"){?>activo<?php } ?>">
				<a href="index.php?contenido=dibujos&dirname=otroLadoTapiz"><?php echo $xmlLang->getElement("otroLadoTapiz") ?></a>
			</li>
		</ul>
	</li>
	<li><a href="#" class="toggle"><?php echo $xmlLang->getElement("pintura") ?></a>
		<ul style="display:<?php if($_REQUEST["contenido"]=="pinturas"){?>block<?php }else{ ?>none<?php }?>" >
			<li><em><?php echo $xmlLang->getElement("series") ?></em></li>
			<li class="<?php if($_REQUEST["dirname"]=="agua"){?>activo<?php } ?>">
				<a href="index.php?contenido=pinturas&dirname=agua"><?php echo $xmlLang->getElement("agua") ?> </a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="uno"){?>activo<?php } ?>">
				<a href="index.php?contenido=pinturas&dirname=uno"><?php echo $xmlLang->getElement("dafne") ?> </a>
			</li>
			<li class="<?php if($_REQUEST["dirname"]=="dos"){?>activo<?php } ?>">
				<a href="index.php?contenido=pinturas&dirname=dos"><?php echo $xmlLang->getElement("castigomediotumano") ?></a>
			</li>
		</ul>
	</li>
	<li class="<?php if($_REQUEST["contenido"]=="cv"){?>activo<?php } ?>">
		<a href="?contenido=cv"><?php echo $xmlLang->getElement("cv") ?></a>
	</li>
	<li class="<?php if($_REQUEST["contenido"]=="contactos"){?>activo<?php } ?>">
		<a href="?contenido=contactos"><?php echo $xmlLang->getElement("contactos") ?></a>
	</li>	
	<li>
		<a href="http://palottini.blogspot.com" rel="external"><?php echo $xmlLang->getElement("blog") ?></a>
	</li>	
</ul>
