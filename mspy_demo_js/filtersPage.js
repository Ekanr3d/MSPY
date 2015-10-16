parObj = {};
var flagMoreItem = true;
var inProgress = true;

function getParam(_cmd, _itemId){
	if( (_cmd == 'bookmark_set') || (_cmd == 'bookmark_remove') ){
		for(var prop in parObj){ delete parObj[prop];}
		parObj[_cmd] = _itemId;
	}else if( _cmd == 'delete' ){
		for(var prop in parObj){ delete parObj[prop]}
		parObj[_cmd] = _itemId;
	}else if( _cmd == 'default' ){
		delete parObj.bookmark_set;
		delete parObj.bookmark_remove;
		delete parObj.delete;
		parObj.user = '';
		parObj.from = '';
		parObj.to = '';
		parObj.bookmark = 0;
		parObj.app = '';
		parObj.skip = '';
		flagMoreItem = true;
	}else if(_cmd == 'more_items'){
		delete parObj.bookmark_set;
		delete parObj.bookmark_remove;
		delete parObj.delete;
		parObj.user = '';
		parObj.from = '';
		parObj.to = '';
		parObj.bookmark = 0;
		parObj.app = '';
		parObj.skip = _itemId;
	}else{
		delete parObj.bookmark_set;
		delete parObj.bookmark_remove;
		delete parObj.delete;
		parObj.user = $('#js-userSelect').find(":selected").val();
		parObj.from = new Date($('#date-from').val()).getTime()/1000;
		parObj.to = new Date($('#date-to').val()).getTime()/1000;
		( $('#js-bookmarkShow').hasClass('active') ) ? parObj.bookmark = 1 : parObj.bookmark = 0;
		parObj.skip = '';
		parObj.app = $('#js-appFilter').find(":selected").val();
		flagMoreItem = true;
	}

}

function deleteItems(value, index, ar) {
	$('#js-contentWrapper [data-id='+value+']').remove();
}

function getItems(_cmd, _itemId){
	inProgress = false;
	prevScrollheight = document.body.scrollHeight;

	$('#js-download, #js-delete').removeClass('active');
	if(_cmd != 'bookmark_set' && _cmd != 'bookmark_remove' && _cmd != 'delete' && _cmd !='more_items'){
		//$('#js-loader').show();
	}
	if(_cmd =='more_items'){
		//$('#js-loader2').show();
	}
	var html = '';

	getParam(_cmd, _itemId);

	alert('Not available in demo!');
}

function resizeMenu(){
    var body = document.body,
        html = document.documentElement;
        var height = Math.max( body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
        $('#content-left').css('height',$('#js-innerWrapper').outerHeight()+120);
}

$(window).load(function(){
	$('#js-loader').hide();
});
$(document).ready(function(){
	//content height script
	var contentHeight = document.getElementById('js-contentWrapper'),
    	filtersHeight = document.getElementById('js-filtersWrapper');
	var height = Math.max( contentHeight.offsetHeight, filtersHeight.offsetHeight);
	//$(filtersHeight).css('height',height);
	//$('#js-innerWrapper').css('height',$('#js-filtersWrapper').outerHeight()+60);


	countItems = document.getElementsByClassName('item ').length;
//scroll content
	/*$(document).scroll(function(){
		//scroolTop = $(document).scrollTop();
		//innerHeight = window.innerHeight;
		//prevScrollheight = document.body.scrollHeight;
		//console.log(scroolheight, scroolTop, innerHeight);
		if ( ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) && flagMoreItem && inProgress){
			countItems = document.getElementsByClassName('item').length;
			idItem = document.getElementsByClassName('item')[countItems-1].getAttribute('data-id');
       		getItems('more_items',idItem);
    	}
	});*/
//
	
	//bookmark click at filter area
	$('#js-bookmarkShow').live('click ',function(){
		$(this).toggleClass('active');
		countItems = 15;
		getItems('bookmarkClick',0);
	});

	//add/remove to bookmark item
	$("#js-contentWrapper .icon.star").live('click toucstart',function(){
		var itId;

		itId = $(this).parent().parent().data('id');
		
		$(this).closest('.item').toggleClass('bookmarked');

		if ( $(this).closest('.item').hasClass('bookmarked') ){
			getItems('bookmark_set',itId);
		}else{
			getItems('bookmark_remove',itId);
		}
	});
	//add/remove to bookmark item (modal window)
	$("#js-modalBookmarkShow").live('click toucstart',function(){
		$(this).toggleClass('active');
		if ( $(this).hasClass('bookmarked') ){
			getItems('bookmark_set', $(this).parent().data('id') );
		}else{
			getItems('bookmark_remove',$(this).parent().data('id'));
		}
	});

	//checkboxes on content
	var count_cheked = 0;

	$('.selectCheckbox').live('click ',function(){
		if( $(this).attr('checked') ) {
			count_cheked++;
			$(this).attr('checked','checked');
		}else{
			count_cheked--;
			$(this).removeAttr('checked');
		}

		if( count_cheked > 0){
			$('#js-download, #js-delete').addClass('active');
		}else{
			$('#js-download, #js-delete').removeClass('active');
		}
	});

	$('#checkbox_all').live('click ',function(){
		if( $(this).attr('checked') ){
			count_cheked = document.getElementsByClassName('selectCheckbox').length;
			$('#js-contentWrapper .selectCheckbox').attr('checked','checked');
			$('#js-download, #js-delete').addClass('active');
		}else{
			count_cheked = 0;
			$('#js-contentWrapper .selectCheckbox').removeAttr('checked');
			$('#js-download, #js-delete').removeClass('active');
		}	
	});
//remove checked from 'all' checkboxes
	$('#js-appFilter .checkbox_filter').live('click ',function(){
			$('#js-allAppCheckbox').removeAttr('checked');
	});
//remove items
	$('#js-delete.active').live('click ',function(){
		
		var confirmWin = confirm('\'Are you sure?\'');
		if(confirmWin == true){
			var itIds = [], tmpIds;
			$('.selectCheckbox').each(function(){
				if( $(this).attr('checked') ){
					tmpIds = $(this).data('id');
					itIds.push(tmpIds);
				}
			});
			getItems('delete',itIds);
		}
	});
//remove item modal
	$('#js-modalDelete').live('click ',function(){	
			var confirmWin = confirm('\'Are you sure?\'');
			if(confirmWin == true){
				var itIds = [], tmpIds;
				tmpIds = $(this).parent().data('id');
				itIds.push(tmpIds);
				getItems('delete',itIds);
			}			
	});

	$('#js-userSelect, #js-appFilter').live('change',function(){
		getItems('other',0);
	});
//zoom on modal image
	$('#js-modalPhotoWrapper').live('click',function(){	
			var src = this.getAttribute('src');
			window.open(src, '_blank'); 	
	});

	$('#js-clearFilters').live('click ',function(){
		getItems('default',0);

		$('#js-bookmarkShow').removeClass('active');
		$('#date-from, #date-to').val('');
		$("#js-userSelect option[value='0'], #js-appFilter option[value='0']").attr('selected','selected');		
	});

});

