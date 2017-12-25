const $ = require('jquery');

$(function(){
	const whereMapBuyContain = $('.js-wherebuy-map');
	const map = whereMapBuyContain.find('.js-wherebuy-map__map');
	const mapItem = whereMapBuyContain.find('.js-wherebuy-map__map-item');
	const modal = $('.js-wherebuy-map__modal');
	const modalContent = modal.find('.js-wherebuy-map__modal-content');
	const modalMarkets = modal.find('.js-wherebuy-map__modal-markets');

	if (datawhereBuyList) {
		init(datawhereBuyList);
	}

	function init(data){

		mapItem.on('mousemove', function(e){
			const id = $(this).attr('id');
			const current = data.regions[`#${id}`];
			const html = `<h3>${current.title}</h3>`;

			modalMarkets.find('img').css({display: 'none'});
			$.each(current.wherebuylist, function(id) {
				const market = current.wherebuylist[id].slice(1);

				modalMarkets.find('img').each(function(img) {
					if (market === $(this).attr('id')) {
						$(this).css({display: 'block'});
					}
				})
			});

			modalContent.html(html)
			modal.css({top: `${e.clientY - (modal.height() + 160)}px`})
		});

		mapItem.on('mouseenter', function(){
			modal.addClass('_open');
		});

		mapItem.on('mouseout', function(){
			modal.removeClass('_open');
		});
	}
});