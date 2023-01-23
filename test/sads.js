{/* <style>
    .select_flat:hover{
        background-color: ;
        opacity: 0.4;
    }
</style>
     */}

    //цвет активной полоски
    var activeStripeColor = '#d1461f';
    //цвет неактивной полоски
    var deactiveStripeColor = '#FFFFFF';


    //id zero блоков для этажей
    var id_first_flour = '#rec518824950';
    var id_second_flour = '#rec518826849';
    
    //id zero для кнопок
    var blockArrowsId1 = '#rec523742249';
    var blockArrowsId2 = '#rec523744372';

    var id_main_block = '#rec518825206';


    //цвет выбранного помещения
    var selectedFlatColor = '#';
    var selectedFlatOpacity = '0.4';

    //цвет занятого помещения
    var blockedFlatColor = '#d1461f';
    var blockefFlatOpacity = '0.2';

    //выбранный этаж и помещение
    var selected_flour = 1;
    var selected_flat = '101';

    var flats = new Map ([
        ['101' ,  
            {
            status : 1,
            square : '565 м²',
            }
        ],
        ['102' ,
            {
            status : 1,
            square : '1000 м²',
            }
        ],
        ['103' ,
            {
            status : 1,
            square : '210 м²',
            }
        ],
        ['104' ,
            {
            status : 1,
            square : '222 м²',
            }
        ],
        ['105' ,
            {
            status : 1,
            square : '194 м²'
            }
        ],
        ['106' ,
            {
            status : 1,
            square : '222 м²'
            }
        ],
        ['107' ,
            {
            status : 1,
            square : '195 м²'
            }
        ],
        ['108' ,
            {
            status : 1,
            square : '242 м²'
            }
        ],
        ['109' ,
            {
            status : 1,
            square : '307 м²'
            }
        ],
        ['110' ,
            {
            status : 1,
            square : '145 м²'
            }
        ],
        ['201' ,
            {
            status : 1,
            square : '1546 м²',
            }
        ],
        ['202' ,
            {
            status : 1,
            square : '502 м²',
            }
        ],
        ['203' ,
            {
            status : 1,
            square : '483 м²',
            }
        ],
        ['204' ,
            {
            status : 1,
            square : '840 м²',
            description: 'С терассой',
            }
        ],
                ['205' ,
            {
            status : 1,
            square : '493 м²',
            }
        ]
        ])


    if (document.readyState !== 'loading') {
        setActiveFlat();
      } else {
        document.addEventListener('DOMContentLoaded', setActiveFlat);
      }
    
    function setActiveFlat(){
        $('.select_flour-1').click(function () {
            changeFlat('101')
            changeFlour(1)
        })
        $('.select_flour-2').click(function () {
            changeFlat('201')
            changeFlour(2)
        })

        $('.select_flat').each(function() {
            $(this).find('a').click(function() {
                var flat = $(this).attr('href').slice(1);
                var flour = flat[0];
    
                if (flat == selected_flat)
                    return
    
                if (flour != selected_flour)
                    changeFlour(flour);
    
                changeFlat(flat)
            })
        })

        $('.table_select_flat').each(function() {
            $(this).find('a').click(function() {
                var flat = $(this).attr('href').slice(1);
                var flour = flat[0];
    
                if (flat == selected_flat)
                    return
    
                if (flour != selected_flour)
                    changeFlour(flour);
    
                changeFlat(flat)

                moveToId(id_main_block)
            })
        })
 
        changeFlour(selected_flour);
        changeFlat(selected_flat)

        $('.table_select_flat').css({'display':'flex'})
    }

    function initFlats(){
        $('[class*="flat-title-"] div').css({'opacity': 0.4})
        $('.select_flat a').css({'opacity': 0})

        for (let pair of flats) {
            if (pair[0] == selected_flat){
                $('.select_flat [href$="'+ selected_flat+'"]').css({'backgroundColor':selectedFlatColor, 'opacity':selectedFlatOpacity})
                $('.flat-title-'+selected_flat+' div').css({'opacity':1})
            }
            if (pair[1].status == 0){
                $('.select_flat [href$="'+ pair[0] +'"]').css({'backgroundColor':blockedFlatColor, 'opacity':blockefFlatOpacity})
            }
        }
    }

    function changeFlour(flour){
        let deactive_flour = 1
        if (flour == 1){
            hide_block = id_second_flour
            show_block = id_first_flour
            //кнопки
            hide_arrowblock = blockArrowsId2
            show_arrowblock = blockArrowsId1
            
            deactive_flour = 2
        }else{
            hide_block = id_first_flour
            show_block = id_second_flour
            //кнопки
            hide_arrowblock = blockArrowsId1
            show_arrowblock = blockArrowsId2
        }

        $(hide_block).fadeOut(200)
        $(show_block).fadeIn(200)
        $(hide_arrowblock).fadeOut(200)
        $(show_arrowblock).fadeIn(200)

        $('.flour_square-' + flour + ' div, .flour_title-' + flour + ' div').css({'opacity':1});
        $('.flour_square-' + deactive_flour + ' div, .flour_title-' + deactive_flour + ' div').css({'opacity':0.4});


        $('.flour_stripe-' + flour + ' div, .flour_stripe-' + flour + ' div').css({'opacity':1, 'backgroundColor': activeStripeColor});
        $('.flour_stripe-' + deactive_flour + ' div, .flour_stripe-' + deactive_flour + ' div').css({'opacity':0.4, 'backgroundColor': deactiveStripeColor});

        selected_flour = flour
    }

    function changeFlat(flat){
        if (!flats.has(flat))
            return

        let flat_data = flats.get(flat)

        status = flat_data.status?'Свободно':'Занято'

        $('.selected_flat_number div').text(flat)
        $('.selected_flat_status div').text(status)
        $('.selected_flat_square div').text(flat_data.square)
        
        selected_flat = flat
        
        initFlats()
    }

    function moveToId(id){
		//узнаем высоту от начала страницы до блока на который ссылается якорь
        let to  = $(id).offset().top;
		
		//анимируем переход на расстояние - top за 1500 мс
		$('body,html').animate({scrollTop: to}, 1500);
    }


    const fun = () => {

    }