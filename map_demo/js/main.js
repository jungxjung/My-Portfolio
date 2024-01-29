function getAriaLabel(modalTitle, index){
    return modalTitle +" "+ (index+1);
}

const app = Vue.createApp({
    data() {
        return {
            isVideo: true,
            modals:[
                {
                    id:'BOM_MGMT_Modal',
                    title:'BOM管理',
                    videoSrc:'video/BOM_MGMT.mp4',
                    images:[
                        'images/bom_slide/bom_slide_1.PNG',
                        'images/bom_slide/bom_slide_2.PNG',
                        'images/bom_slide/bom_slide_3.PNG',
                        'images/bom_slide/bom_slide_4.PNG',
                        'images/bom_slide/bom_slide_5.PNG',
                        'images/bom_slide/bom_slide_6.PNG',
                        'images/bom_slide/bom_slide_7.PNG'
                    ]

                },
                {
                    id:'CAPP_Modal',
                    title:'CAPP製程設計',
                    videoSrc:'video/CAPP_0112_2024.mp4',
                    images:[
                        'images/capp_slide/capp_slide_1.PNG',
                        'images/capp_slide/capp_slide_2.PNG',
                        'images/capp_slide/capp_slide_3.PNG',
                        'images/capp_slide/capp_slide_4.PNG',
                        'images/capp_slide/capp_slide_5.PNG',
                        'images/capp_slide/capp_slide_6.PNG',
                        'images/capp_slide/capp_slide_7.PNG',
                        'images/capp_slide/capp_slide_8.PNG',
                    ]

                },
                {
                    id:'electrode_design_modal',
                    title:'電極設計',
                    videoSrc:'video/electrode_design_0129'
                }
            ]
        }
    }
});

const mountedApp =app.mount('body');



// function setCarouselActionItem(){
//     var carousel = document.querySelector('.carousel-item');
//     carousel.classList.add('active');
// };

// $(document).ready(function () {
//     setCarouselActionItem();
//   });