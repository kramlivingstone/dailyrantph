$('#post').keyup(function(){
	if($('#post').val() != "")
		$("#btnPost").attr('disabled', false);
	else 
		$("#btnPost").attr('disabled', true);
});

function getCaret(el) {
    if (el.selectionStart) {
        return el.selectionStart;
    } else if (document.selection) {
        el.focus();
        var r = document.selection.createRange();
        if (r == null) {
            return 0;
        }
        var re = el.createTextRange(),
            rc = re.duplicate();
        re.moveToBookmark(r.getBookmark());
        rc.setEndPoint('EndToStart', re);
        return rc.text.length;
    }
    return 0;
}

// var commentId = $('.comment').attr("id");

$('.comment').keypress(function (event) {
    var postId = (this.id).substring(10);
    var token = $('#token').val();
    var comment = $('#txtComment'+postId).val();
    
    if (event.shiftKey && event.keyCode == 13) {
        var content = this.value;
        var caret = getCaret(this);
        this.value = content.substring(0, caret) + content.substring(caret, content.length);
        event.stopPropagation();
    } else if (event.keyCode == 13) {
        event.preventDefault();

        // alert(comment);

        // $('#test' + postId).submit();

         $.post('/posts/'+postId+'/comments',{
            _token : token,
            comment : comment,
        }, function(data) {
            $('#showComments'+postId).html(data);
            $('#showMoreSection'+postId).show();
            $('.li-comments'+postId).slice(-3).show();
            $('#txtComment'+postId).val('');
        });
    }
});


function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            

            reader.onload = function (e) {
            	$('#imgWell').slideDown();
            	$('#imgPreview').show();
                $('#imgPreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

$("#uploadImg").change(function(){
    readURL(this);
});


function readProfileURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            

            reader.onload = function (e) {
                $('#imgDisplay').show();
                $('#imgDisplay').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

$("#displayPhoto").change(function(){
    readProfileURL(this);
});



$('.callUser').click(function () {
    var postId = (this.id);
    var name = $('#hidden' + postId).val();
    


    $('#txtComment'+postId).focus();
    $('#txtComment'+postId).val(name);
});


$('.showComments').each(function(){
    var id = (this.id).substring(12);

    $('.li-comments'+id).slice(-3).show();

    if($('.li-comments'+id+':hidden').length == 0){
        $('#showMoreSection'+id).hide();
    }

    $('#showMoreSection'+id).click(function(e){
        e.preventDefault();

        $('.li-comments'+id+':hidden').slice(0,10).fadeIn();

        if($('.li-comments'+id+':hidden').length == 0){
            $('#showMoreSection'+id).hide();
        }
    });
});

function like(id)
{
    if($('#like'+id).attr('name') == 'like'){
        $.ajax({
            url: '/like/',
            method: 'GET',
            data: {
                post_id : id,
            },
            success: function(data){
                $('#like'+id).html('Unlike');
                $('#like'+id).attr('name','unlike');
                $('#likeCount'+id).html(data); 
            }
        });
    }
}



