$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
});

function getVideoLink(modalID){
    var link;
    if (modalID == "#BOM_MGMT_Modal") {
        link = '<video class="" controls><source class="" src="video/BOM_MGMT.mp4" type="video/mp4">Your browser does not support the video tag.</video>';
    }
    return link;

}

function videoSwitch(modalID){
    var oldElement = document.querySelector(modalID + ' .modal-body');
    while (oldElement.hasChildNodes()) {
        oldElement.removeChild(oldElement.firstChild);
      }

      var div = document.createElement('div');
      div.classList.add('ratio', 'ratio-16x9');
  
      div.innerHTML = getVideoLink(modalID);
  
      document.querySelector(modalID + ' .modal-body').append(div);

}

function getSlideLink(modalID){
    var link;
    if (modalID == "#BOM_MGMT_Modal") {
        link = '<iframe src="https://cimforce-my.sharepoint.com/personal/sharon_chen_cimforce_com/_layouts/15/Doc.aspx?sourcedoc={1da0917f-1652-432b-99b2-eb04ecd24114}&amp;action=embedview&amp;wdAr=1.7777777777777777" frameborder="0">這是 <a target="_blank" href="https://office.com/webapps">Office</a> 提供的內嵌 <a target="_blank" href="https://office.com">Microsoft Office</a> 簡報。</iframe>';
    }
    return link;
}

function slidesSwitch(modalID){
    var oldElement = document.querySelector(modalID + ' .modal-body');
    while (oldElement.hasChildNodes()) {
        oldElement.removeChild(oldElement.firstChild);
      }

    var div = document.createElement('div');
    div.classList.add('ratio', 'ratio-16x9');


    div.innerHTML = getSlideLink(modalID);

    document.querySelector(modalID + ' .modal-body').append(div);

}