/**
 * Created by Davo on 1/15/2016.
 */
var term, termClone, termOption;
$(function(){
    $('#advanced').click(function(){
        $('#section-advanced').toggle(500);
    });
});

function addMainTerms(){
    $('#terms-main-btn').click(function(){
        term = $('#terms-main-input');
        if(!term.val()){
        }else{
            $('#terms-main-search').append($('<li class="search-label bg-green-meadow font-white"></li>').html(term.val() + '&nbsp;<a class="fa fa-times"></a>'));
            console.log();
        }
        term.val('');
        term.blur();
    });
}

function addExtraTerms(){
    $('#terms-extra-btn').click(function(){
        term = $('#terms-extra-input');
        termOption = $('#terms-select');
        console.log(term.val() + '  ' + termOption.val());
        if(!term.val()){
        }else{
            switch (termOption.val()){
                case '1':
                    console.log('Enter');
                    $('#terms-defo-container').fadeIn(200);
                    $('#terms-defo-search').append($('<li class="search-label bg-blue-sharp font-white"></li>').html(term.val() + '&nbsp;<a class="fa fa-times"></a>'));
                    break;
                case '2':
                    $('#terms-maybe-container').fadeIn(200);
                    $('#terms-maybe-search').append($('<li class="search-label bg-yellow-soft font-white"></li>').html(term.val() + '&nbsp;<a class="fa fa-times"></a>'));
                    break;
                case '0':
                    $('#terms-not-container').fadeIn(200);
                    $('#terms-not-search').append($('<li class="search-label bg-red-intense font-white"></li>').html(term.val() + '&nbsp;<a class="fa fa-times"></a>'));
                    break;
            }
        }
        term.val('');
        term.blur();
    });
}

function removeTerms(){
    $('#terms-global-container').on('click','a', function(){
        $(this).closest('li').remove();

        if($('#terms-defo-search').find('li').length < 1){
            $('#terms-defo-container').fadeOut(200);
        }
        if($('#terms-maybe-search').find('li').length < 1){
            $('#terms-maybe-container').fadeOut(200);
        }
        if($('#terms-not-search').find('li').length < 1){
            $('#terms-not-container').fadeOut(200);
        }
    });
}

function scrollTo(){
    $("#search-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#section-posts").offset().top
        }, 800);
    });
}

$(document).ready(function(){
    $('.page-title').html('<h1>Búsqueda</h1>');
    $('#page-breadcrumb').text('Búsqueda');
    $('#menu-busqueda').addClass('active');
    addMainTerms();
    addExtraTerms();
    removeTerms();
    scrollTo();
});