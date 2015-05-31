<script>
    $(document).ready(function() {
        $('#fixed-layer-activate').on('click', function(evt) {
            evt.preventDefault();
            $('.wrap-active-filter').animate({right: parseInt($('.wrap-active-filter').css('right')) == 0 ? '-=' + $('.wrap-active-filter').outerWidth() : 0}, {duration: 500, complete: function() {
                    $('#fixed-layer-activate').toggleClass('active');
                }
            });
        });
    });
</script>
<div class="active-filters">
    <div class="wrap-active-filter">
        <a id="fixed-layer-activate" class="fa fa-tags" href="#"></a>
        <strong>Fitros aplicados</strong>
        <a id="filtro-1" href="#"><i class="fa fa-times"></i>Filtro 1</a>
        <a id="filtro-2" href="#"><i class="fa fa-times"></i>Filtro 2</a>
        <a id="filtro-3" href="#"><i class="fa fa-times"></i>Filtro 3</a>
        <a id="filtro-4" href="#"><i class="fa fa-times"></i>Filtro 4</a>
        <a id="filtro-5" href="#"><i class="fa fa-times"></i>Filtro 5</a>
    </div>
</div>