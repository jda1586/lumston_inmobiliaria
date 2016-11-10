/**
 * Created by Pedro on 09/11/2016.
 */
function putBox(data) {
    return $('<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">' +
        '<div class="card">' +
        '<div class="figFav figFavS" data-value="' + data.id + '" data-status="toggle">' +
        '<i class="fa fa-heart-o" aria-hidden="true"></i>' +
        '</div>' +
        '<div class="figure" onclick="window.location = ' + "'" + URL_PROPERTIES + "/show/" + data.id + "'" + '">' +
        '<img src="' + data.image + '" alt="image">' +
        '<div class="propDetails">$ ' + data.price +
        '</div>' +
        '<div class="figView"><span class="icon-eye"></span></div>' +
        '<div class="figType">' + data.type + '</div>' +
        '</div>' +
        '<h2 onclick="window.location = ' + "'" + URL_PROPERTIES + "/show/" + data.id + "'" + '">' + data.title + '</h2>' +
        '<div class="cardAddress" onclick="window.location ='+ "'" + URL_PROPERTIES + "/show/" + data.id + "'" + '">' +
        '<i class="fa fa-map-marker" aria-hidden="true"></i> ' + data.address +
        '</div><ul class="cardFeat"><li>' +
        '<i class="fa fa-bed" aria-hidden="true"></i>' + data.bedrooms + '</li>' +
        '<li><i class="fa fa-bath" aria-hidden="true"></i>' + data.bathrooms + '</li>' +
        '<li><span class="icon-frame"></span> ' + data.area + ' m<sup>2</sup>' +
        '</li><li style="float: right; font-size: large;">' +
        '<i class="fa fa-download downPDF" aria-hidden="true" style="cursor: pointer;" data-value="' + data.id + '" data-img="' + data.image + '" data-title="' + data.title + '" data-price="' + data.price + '" data-address="' + data.address + '">' +
        '</i></li></ul><div class="clearfix"></div></div></div>');
}