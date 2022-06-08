(function($){

    const Fieldsets = {
        showNext: function(){
            $('.showing').velocity('transition.slideLeftOut', {
                duration: 200,
                complete: function(){
                    $('.showing')
                        .next('fieldset')
                        .addClass('showing')
                        .velocity('transition.slideRightIn')
                        .siblings('fieldset')
                        .removeClass('showing')
                    // $('.progressbar').find('.active').removeClass('active').addClass('done').next('li').addClass('active')
                }
            })
        },
        showPrev: function(){
            $('.showing').velocity('transition.slideRightOut', {
                duration: 200,
                complete: function(){
                    $('.showing')
                        .prev('fieldset')
                        .addClass('showing')
                        .velocity('transition.slideRightIn')
                        .siblings('fieldset')
                        .removeClass('showing')
                    // $('.progressbar').find('.active').removeClass('active').removeClass('done').prev('li').addClass('active').addClass('previous')
                }
            })
        }
    }

    $('#unionized').change(function(e){
        let val = $(this).val()
        nextEl = $(this).parent().parent().next()
        
        if(val === 'yes'){
            nextEl.fadeIn('slow')
        }
        else{
            nextEl.fadeOut('slow')
        }
    })

    $(".validate").keyup(function(e){
        $(this).siblings('.text-danger').fadeOut()
    })

    $(".validate").change(function(e){
        $(this).siblings('span').remove()
        $(this).siblings('.text-danger').fadeOut()
    })

    $(document).on('click', 'button.next', function(event){

        let error = false
        const parentFieldset$ = $(this).closest('fieldset')
        
        parentFieldset$.find('input.validate, select.validate, textarea.validate').each(function(){
        
        const inputField$ = $(this)
        
        // if(!inputField$.val()) 
        // {	
        //     const inputFieldParentEl$ = inputField$.parent()
        //     inputFieldParentEl$.find('span').remove()
        //     inputFieldParentEl$.append(`<span class="text-danger">This field is required</span>`)
        //     error = true
            
        // }
    })

    if(!error){
        Fieldsets.showNext()
    }

    })

    $(document).on('click', 'button.prev', function(){
        Fieldsets.showPrev()
    })

    $(document).on('change', '[name="photo"]', function(e){

            let ext = $(e.target).val().split('.').pop().toLowerCase(), 
                error = false

            if($.inArray(ext, ['gif', 'png', 'jpg','jpeg', 'webP']) == -1)
            {
                $(this).val("")
                $(this).parent().append(`<span class="text-danger text-small">Only image file(.gif, .png, .jpg, .webP) can be uploaded</span>`)
                error = true
            }

            else if(this.files[0].size)
            {
                let filesize = this.files[0].size / 1024
                if(filesize > 1000)
                {
                    $(this).val('')
                    $(this).parent().append(`<span class="text-danger">Photo must not exceed 1MB</span>`) 
                    error = true
                }
                else if(!error)
                {
                    showPhoto($(this))
                }
            }
    })

    function showPhoto(photo){

        let file = photo.get(0).files[0];
 
        if(file){

            let reader = new FileReader();
 
            reader.onload = function(){
                $(".photo-frame").find("img").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }

    // $(document).on('click', 'button.add-more', function(event){
    //     let btn = $(this)
    //     btn.prev('div.input-field').clone().insertAfter(btn).append('<button type="button" class="remove waves-effect waves-red btn-floating red" title="Remove"><i class="fa fa-minus"></i></button>')
    // })

    // $(document).on('click', 'button.remove', function(event){
    //     let btn = $(this) 
    //     btn.closest('div.row').find('div.input-field:last').add(btn).remove()
    // })

})(jQuery)