$(document).ready(function(){

	if($('.m-1-span').css('display') === 'none'){
		$('#table-area').css('width', 'calc(100% - 90px)')
	};
	if($(window).width() <= 600){
			$('#left-nav-open').css('display','none');
			$('.m-1-span').css('display','inline-block');
	};

	if($(window).width() > 1400){
		$('.m-1-span').css('display','inline-block');
		$('#table-area').css('width', 'calc(100% - 307px)');
		$('.m-1-span').css('minWidth','170px');
	};

	$('#h-nav-icon').on('click',function(){

		$('#down-arrow').addClass('rotated');

		if($(window).width() > 600){
			$('.m-1-span').fadeToggle(0);
			if($('.m-1-span').css('display') === 'none'){
				$('#table-area').css('width', 'calc(100% - 90px)')
			}
			else{
				$('.m-1-span').css('minWidth','170px');
				var width1 =  ($('#left-nav-open').width());
				$('#table-area').css({'width': 
					$(window).width() - (width1 + 30) 
				});
			};
		}
		else{
			$('#left-nav-open').fadeToggle(0);
		};
		$('.menu-2').css('display','none');
	});


	$('#drop-click').on('click',function(){
		$('.menu-2').fadeToggle(0);
		$('#down-arrow').toggleClass('rotated');
		if($('.menu2').css('display') === 'none'){	
		}
		else{
			var width2 =  ($('#left-nav-open').width());
			$('#table-area').css({'width': 
				$(window).width() - (width2 + 30) 
			});
			console.log(width2);
		}
	})
});

$(document).ready(function() {
	$('#bootstrap-data-table').DataTable();
} );