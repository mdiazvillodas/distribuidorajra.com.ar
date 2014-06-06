var titu,el;		
window.addEvent('domready', function(){
	titu = new Fx.Tween(('slider'), {duration: 500,link: 'chain'});	
	el = new Fx.Tween(('ss'), {duration: 500,link: 'chain',transition: Fx.Transitions.Circ.easeOut});		

	$('1').addEvent('click', function(){
		titu.start('left', '0px');	
		el.start('left','195px');	
		});	

	$('2').addEvent('click', function(){	
		titu.start('left', '-960px');		
		el.start('left','303px');			
		});		

	$('3').addEvent('click', function(){
		titu.start('left', '-1920px');	
		el.start('left','411px');			
		});	

	$('4').addEvent('click', function(){	
		titu.start('left', '-2880px');	
		el.start('left','519px');			
		});		

	$('5').addEvent('click', function(){	
		titu.start('left', '-3840px');	
		el.start('left','627px');			
		});

	
	
});

