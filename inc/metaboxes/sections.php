<?php

function mark_section_type_metabox($metaboxes){
    $metaboxes[]=array(
        'id'=>'mark_section_type',
        'title'=>__('section Type','mark'),
        'post_type'=>'marksection',
        'context'=>'normal',
        'priority'=>'default',
        'sections'=>array(
            array(
       'name'=>'mark_section_types',
            'icon'=>'fa fa-image',
            'fields'=>array(
                array(
        'id'=>'section_type',
        'type'=>'select',
        'title'=>__('select Section Type','mark'),
        'options'=>array(
        'banner'=>__('Banner','mark'),
        'mission'=>__('Mission','mark'),
        'info'=>__('Info','mark'),
        'about'=>__('About','mark'),
        'services'=>__('Services','mark'),
        'benefits'=>__('Benefits','mark'),
        'testimonials'=>__('Testimonials','mark'),
        'imageinfo'=>__('Imageinfo','mark'),
        'counter'=>__('Counter','mark'),
        'cta'=>__('Cta','mark'),
        'team'=>__('Team','mark'),
        'protfolio'=>__('Protfolio','mark'),
        'pricingplan'=>__('Pricing plan','mark'),
        'shop'=>__('Shop','mark'),
        'blog'=>__('blog','mark'),
        'client'=>__('Client','mark'),
        'subscription'=>__('Subscription','mark'),
        'contact'=>__('Contact','mark'),

            )
                )
            )
        )
    ),
    );

    return $metaboxes;
}
add_filter('cs_metabox_options','mark_section_type_metabox');