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
                    videoSrc:'video/electrode_design_0129.mp4',
                    images:[
                        'images/electrode_design/electrode_design_1.PNG',
                        'images/electrode_design/electrode_design_2.PNG',
                        'images/electrode_design/electrode_design_3.PNG',
                        'images/electrode_design/electrode_design_4.PNG',
                        'images/electrode_design/electrode_design_5.PNG',
                        'images/electrode_design/electrode_design_6.PNG',
                        'images/electrode_design/electrode_design_7.PNG',
                        'images/electrode_design/electrode_design_8.PNG',
                        'images/electrode_design/electrode_design_9.PNG',
                        'images/electrode_design/electrode_design_10.PNG',
                        'images/electrode_design/electrode_design_11.PNG',
                        'images/electrode_design/electrode_design_12.PNG'
                    ]
                },
                {
                    id:'cnc_cam',
                    title:'CNC CAM',
                },
                {
                    id:'wedm_cam',
                    title:'WEDM CAM',
                },
                {
                    id:'cmm_cam',
                    title:'CMM CAM',
                },
                {
                    id:'cnc_machining',
                    title:'CNC Machining'
                },
                {
                    id:'edm_machining',
                    title:'EDM Machining'
                },
                {
                    id:'wedm_machining',
                    title:'WEDM Machining'
                },
                {
                    id:'cmm_measuring',
                    title:'CMM Measuring'
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