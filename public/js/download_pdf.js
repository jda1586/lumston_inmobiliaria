/**
 * Created by Pedro on 08/11/2016.
 */
$(document).ready(function () {
    $('.downPDF').click(function () {
        var $this = $(this);
        $('#downloadModal').find('#downloadImg').attr('src', $this.attr('data-img'));
        $('#downloadModal').find('#modalTitle').html($this.attr('data-title'));
        $('#downloadModal').find('#modalPrice').find('span').html($this.attr('data-price'));
        $('#downloadModal').find('#modalAddress').find('span').html($this.attr('data-address'));
        $('#downloadModal').modal('show');
    });
});