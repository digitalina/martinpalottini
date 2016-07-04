<ul class="menu float-right">
	<li><a href="#" ><?php echo $xmlLang->getElement("obras") ?></a>
		<ul>
			<li><a href="#"><?php echo $xmlLang->getElement("paisajeMudo") ?> (2016)</a>
				<ul>
					<li class="<?php if($_REQUEST["dirname"]=="otroLadoTapiz"){?>activo<?php } ?>">
						<a href="index.php?contenido=2016&dirname=otroLadoTapiz"><?php echo $xmlLang->getElement("otroLadoTapiz") ?></a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="paisajeMudo"){?>activo<?php } ?>">
						<a href="index.php?contenido=2016&dirname=paisajeMudo"><?php echo $xmlLang->getElement("paisajeMudo") ?></a>
					</li>
				</ul>		
			</li>
			<li><a href="#"><?php echo $xmlLang->getElement("agua") ?> (2014)</a>
				<ul>
					<li class="<?php if($_REQUEST["dirname"]=="rodchenko"){?>activo<?php } ?>">
						<a href="index.php?contenido=2014&dirname=rodchenko"><?php echo $xmlLang->getElement("tra-rodchenko") ?></em></a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="pulmonaria"){?>activo<?php } ?>">
						<a href="index.php?contenido=2014&dirname=pulmonaria"><?php echo $xmlLang->getElement("pulmonaria") ?></em></a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="comoMatarlos"){?>activo<?php } ?>">
						<a href="index.php?contenido=2014&dirname=comoMatarlos"><?php echo $xmlLang->getElement("comoMatarlos") ?></a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="paisaje"){?>activo<?php } ?>">
						<a href="index.php?contenido=2014&dirname=paisaje"><?php echo $xmlLang->getElement("agua") ?> </a>
					</li>
				</ul>
			</li>
			<li><a href="#"><?php echo $xmlLang->getElement("trincheraHonor") ?> (2012)</a>
				<ul>
					<li class="<?php if($_REQUEST["dirname"]=="pajaDelTrigo"){?>activo<?php } ?>">
						<a href="index.php?contenido=2012&dirname=pajaDelTrigo"><?php echo $xmlLang->getElement("lapajadeltrigo") ?> </a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="trincheraHonor"){?>activo<?php } ?>">
						<a href="index.php?contenido=2012&dirname=trincheraHonor"><?php echo $xmlLang->getElement("trincheraHonor") ?></a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="retratoSinManos"){?>activo<?php } ?>">
						<a href="index.php?contenido=2012&dirname=retratoSinManos"><?php echo $xmlLang->getElement("retratoSinManos") ?></a>
					</li>
					<li class="<?php if($_REQUEST["dirname"]=="noAnimal"){?>activo<?php } ?>">
						<a href="index.php?contenido=2012&dirname=noAnimal"><?php echo $xmlLang->getElement("noAnimal") ?></a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="<?php if($_REQUEST["contenido"]=="textos"){?>activo<?php } ?>">
		<a href="?contenido=textos"><?php echo $xmlLang->getElement("textos") ?></a>
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
