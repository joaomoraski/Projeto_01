$(function(){
	$('nav.mobile').click(function(){
		var listaMenu= $('nav.mobile ul');

		if (listaMenu.is(":hidden") == true){
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-bars');
			icone.addClass('fas fa-times');
			listaMenu.slideToggle();
		} else{
			var icone = $('.botao-menu-mobile').find('i');
			icone.removeClass('fas fa-times');
			icone.addClass('fas fa-bars');
			listaMenu.slideToggle();
		}
		
	})//selecionar elemento,  $ e o nome do elemento dentro

	if ($('target').length > 0) {
		//O elemento existe, portante precisamos dar o scroll em algum elemento.
		//scroll quando clicar no bangui
		var elemento = '#' + $('target').attr('target');
		var divScroll = $(elemento).offset().top;
		$('html,body').animate({'scrollTop':divScroll},1500);
	}

	carregarDinamico();
	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('container-principal').html('');
			return false;
		})
	}

	function carregarDinamico(){
		$('[realtime]').click(function(){
			var pagina = $(this).attr('realtime');
			$('.container-principal').hide();
			$('.container-principal').load(include_path+'pages/'+pagina+'.php',function(){
				$('.container-principal').fadeIn(1000,function(){
				
				initialize();
				addMarker(-27.609959,-48.576585,'',"Minha casa",undefined,false);
				
				});
			});
			
			return false;
		})
	}
})