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
<div class="active-filters active-comparation">
    <div class="wrap-active-filter">
        <a id="fixed-layer-activate" class="fa fa-tags" href="#"></a>
        <strong>Favoritos</strong>
        <div class="item">
            <figure>
                <img src="images/photo3.jpg" alt="Propiedad"/>
                <figcaption>
                    <span>Ref: 125</span>
                </figcaption>
            </figure>
        </div>
        <div class="item">
            <figure>
                <img src="images/photo3.jpg" alt="Propiedad"/>
                <figcaption>
                    <span>Ref: 125</span>
                </figcaption>
            </figure>
        </div>
    </div>
</div>